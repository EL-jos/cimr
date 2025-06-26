<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\MaritalStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaritalStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.resources.maritalStatus.index', [
            'maritalStatuses' => MaritalStatus::all(),
            'title' => "Liste des genres"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resources.maritalStatus.form', [
            'title' => "Ajouter un genres",
            'maritalStatus' => new MaritalStatus()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:marital_statuses,name'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $maritalStatus = MaritalStatus::create([
            'name' => $request->input('name')
        ]);

        if ($maritalStatus) {
            return redirect()->route('maritalStatus.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MaritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(MaritalStatus $maritalStatus)
    {
        return view('backend.resources.maritalStatus.form', [
            'title' => "Modifier un genres",
            'maritalStatus' => $maritalStatus
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MaritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MaritalStatus $maritalStatus)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isUpload = $maritalStatus->update([
            'name' => $request->input('name')
        ]);

        if ($isUpload) {
            return redirect()->route('maritalStatus.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MaritalStatus  $maritalStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaritalStatus $maritalStatus)
    {
        $maritalStatus->persons()->delete();
        if($maritalStatus->delete()) {
            return redirect()->route('maritalStatus.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    public function trashed(){
        $maritalStatuses = MaritalStatus::onlyTrashed()->get();

        return view('backend.resources.maritalStatus.index', [
            'maritalStatuses' => $maritalStatuses,
            'title' => 'Liste des genres supprimés'
        ]);

    }

    public function restore(string $id){

        $maritalStatus = MaritalStatus::withTrashed()->find($id);
        if($maritalStatus->restore()){

            return redirect()->route('maritalStatus.trashed')->with('success', 'Réstauration réussit');

        }
        return redirect()->back()->with('error', 'Echec de réstauration');

    }

    public function forceDelete(string $id){

        $maritalStatus = MaritalStatus::withTrashed()->find($id);

        if (!$maritalStatus) {
            return redirect()->back()->with('error', 'Genre introuvable');
        }

        // Suppression définitive des personnes associées
        $maritalStatus->persons()->withTrashed()->forceDelete();
        if ($maritalStatus->forceDelete()) {

            return redirect()->route('maritalStatus.index')->with('success', 'Suppression définitive réussie');

        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }

    public function clear()
    {
        $deleted = MaritalStatus::query()->delete(); // Soft delete tous les genres
        if ($deleted) {
            return redirect()->route('maritalStatus.index')->with('success', 'Tous les genres ont été déplacés dans la corbeille.');
        }

        return redirect()->route('blog.index')->with('error', 'Une erreur est survenue lors de la suppression.');
    }
}
