<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Leave;
use App\Models\Person;
use App\Models\Status;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $validated = $request->validate([
            'start' => 'required|date',
            'type_id' => 'required|exists:types,id',
            'number' => 'nullable|integer|min:1'
        ]);

        /** @var Person $person */
        $person = Person::findOrFail($request->input('person_id'));

        if (!$person) {
            return response()->json(['error' => 'Aucun profil Person associé.'], 422);
        }

        $type = Type::findOrFail($validated['type_id']);

        // ✅ Cas 1 : Congé ordinaire (type_id = 12)
        if ($type->id == 12) {
            $soldeRestant = $person->joursCongesAnnuelsDisponibles();

            if ($soldeRestant <= 0) {
                return response()->json(['error' => 'Aucun solde disponible pour congé ordinaire.'], 422);
            }

            $numberOfDays = $request->input('number', 1);
            if ($numberOfDays > $soldeRestant) {
                return response()->json([
                    'error' => "Vous demandez $numberOfDays jours mais il ne vous reste que $soldeRestant jours."
                ], 422);
            }

        } else {
            // ✅ Cas 2 : Congé exceptionnel
            $numberOfDays = $type->nb_days ?? 1;
        }

        // ✅ Calcul des dates ouvrables
        $startDate = Carbon::parse($validated['start']);
        $endDate = $this->addBusinessDays($startDate, $numberOfDays);

        // ✅ Status par défaut
        $status = Status::where('name', 'En attente')->first() ?? Status::first();

        // ✅ Enregistrement du congé
        $leave = $person->leaves()->create([
            'start' => $startDate->format('Y-m-d'),
            'end' => $endDate->format('Y-m-d'),
            'number' => $numberOfDays,
            'type_id' => $type->id,
            'status_id' => $status->id,
        ]);

        if($leave){
            return redirect()->route('person.show', $person)->with('success', "Demande de congé enregistrée avec succès.");
        }

        return redirect()->back()->with('error', "")->withInput();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        //
    }

    private function addBusinessDays(Carbon $start, int $businessDays): Carbon
    {
        $date = $start->copy();

        while ($businessDays > 0) {
            $date->addDay();
            if ($date->isWeekday()) {
                $businessDays--;
            }
        }

        return $date;
    }

    public function updateStatus(Request $request, Leave $leave){
        //dd($leave, $request->all());
        $validator = Validator::make($request->all(), [
            'status_id' => 'required|exists:statuses,id'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isUpdated = $leave->update([
            'status_id' => $request->input('status_id'),
        ]);

        if($isUpdated){
            return redirect()->back()->with('success', "Le statut du congé a été mis à jour");
        }

        return redirect()->back()->with('error', "Impossible de mettre à jour le statut de ce congé");
    }

}
