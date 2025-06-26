<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.resources.type.index', [
            'types' => Type::all(),
            'title' => "Liste des types"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resources.type.form', [
            'title' => "Ajouter un type",
            'type' => new Type()
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
            'name' => 'required|unique:types,name',
            'nb_days' => 'required|numeric|min:0|max:4',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $type = Type::create([
            'name' => $request->input('name'),
            'nb_days' => $request->input('nb_days')
        ]);

        if ($type) {
            return redirect()->route('type.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        return view('backend.resources.type.form', [
            'title' => "Modifier un type",
            'type' => $type
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'nb_days' => 'required|numeric|min:0|max:4',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isUpload = $type->update([
            'name' => $request->input('name'),
            'nb_days' => $request->input('nb_days')
        ]);

        if ($isUpload) {
            return redirect()->route('type.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        if($type->delete()) {
            return redirect()->route('type.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    public function trashed(){
        $types = Type::onlyTrashed()->get();

        return view('backend.resources.type.index', [
            'types' => $types,
            'title' => 'Liste des types supprimés'
        ]);

    }

    public function restore(string $id){

        $type = Type::withTrashed()->find($id);
        if($type->restore()){

            return redirect()->route('type.trashed')->with('success', 'Réstauration réussit');

        }
        return redirect()->back()->with('error', 'Echec de réstauration');

    }

    public function forceDelete(string $id){

        $type = Type::withTrashed()->find($id);

        if (!$type) {
            return redirect()->back()->with('error', 'Type introuvable');
        }

        if ($type->forceDelete()) {

            return redirect()->route('type.index')->with('success', 'Suppression définitive réussie');

        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }

    public function clear()
    {
        $deleted = Type::query()->delete(); // Soft delete tous les genres
        if ($deleted) {
            return redirect()->route('type.index')->with('success', 'Tous les types ont été déplacés dans la corbeille.');
        }

        return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression.');
    }
}
