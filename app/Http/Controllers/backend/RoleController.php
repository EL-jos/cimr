<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.resources.role.index', [
            'roles' => Role::all(),
            'title' => "Liste des roles"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resources.role.form', [
            'title' => "Ajouter un role",
            'role' => new Role()
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
            'name' => 'required|unique:roles,name'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role = Role::create([
            'name' => $request->input('name')
        ]);

        if ($role) {
            return redirect()->route('role.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('backend.resources.role.form', [
            'title' => "Modifier un role",
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isUpload = $role->update([
            'name' => $request->input('name')
        ]);

        if ($isUpload) {
            return redirect()->route('role.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->persons()->delete();
        if($role->delete()) {
            return redirect()->route('role.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    public function trashed(){
        $roles = Role::onlyTrashed()->get();

        return view('backend.resources.role.index', [
            'roles' => $roles,
            'title' => 'Liste des roles supprimés'
        ]);

    }

    public function restore(string $id){

        $role = Role::withTrashed()->find($id);
        if($role->restore()){

            return redirect()->route('role.trashed')->with('success', 'Réstauration réussit');

        }
        return redirect()->back()->with('error', 'Echec de réstauration');

    }

    public function forceDelete(string $id){

        $role = Role::withTrashed()->find($id);

        if (!$role) {
            return redirect()->back()->with('error', 'Role introuvable');
        }

        // Suppression définitive des personnes associées
        $role->persons()->withTrashed()->forceDelete();
        if ($role->forceDelete()) {

            return redirect()->route('role.index')->with('success', 'Suppression définitive réussie');

        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }

    public function clear()
    {
        $deleted = Role::query()->delete(); // Soft delete tous les genres
        if ($deleted) {
            return redirect()->route('role.index')->with('success', 'Tous les roles ont été déplacés dans la corbeille.');
        }

        return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression.');
    }
}
