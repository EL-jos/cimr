<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.resources.gender.index', [
            'genders' => Gender::all(),
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
        return view('backend.resources.gender.form', [
            'title' => "Ajouter un genres",
            'gender' => new Gender()
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
            'name' => 'required|unique:genders,name'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $gender = Gender::create([
            'name' => $request->input('name')
        ]);

        if ($gender) {
            return redirect()->route('gender.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function edit(Gender $gender)
    {
        return view('backend.resources.gender.form', [
            'title' => "Modifier un genres",
            'gender' => $gender
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gender $gender)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isUpload = $gender->update([
            'name' => $request->input('name')
        ]);

        if ($isUpload) {
            return redirect()->route('gender.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gender $gender)
    {
        $gender->persons()->delete();
        if($gender->delete()) {
            return redirect()->route('gender.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    public function trashed(){
        $genders = Gender::onlyTrashed()->get();

        return view('backend.resources.gender.index', [
            'genders' => $genders,
            'title' => 'Liste des genres supprimés'
        ]);

    }

    public function restore(string $id){

        $gender = Gender::withTrashed()->find($id);
        if($gender->restore()){

            return redirect()->route('gender.trashed')->with('success', 'Réstauration réussit');

        }
        return redirect()->back()->with('error', 'Echec de réstauration');

    }

    public function forceDelete(string $id){

        $gender = Gender::withTrashed()->find($id);

        if (!$gender) {
            return redirect()->back()->with('error', 'Genre introuvable');
        }

        // Suppression définitive des personnes associées
        $gender->persons()->withTrashed()->forceDelete();
        if ($gender->forceDelete()) {

            return redirect()->route('gender.index')->with('success', 'Suppression définitive réussie');

        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }

    public function clear()
    {
        $deleted = Gender::query()->delete(); // Soft delete tous les genres
        if ($deleted) {
            return redirect()->route('gender.index')->with('success', 'Tous les genres ont été déplacés dans la corbeille.');
        }

        return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression.');
    }
}
