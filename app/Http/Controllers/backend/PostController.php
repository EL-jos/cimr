<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.resources.post.index', [
            'posts' => Post::all(),
            'title' => "Liste des posts"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.resources.post.form', [
            'title' => "Ajouter un post",
            'post' => new Post()
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
            'name' => 'required|unique:posts,name'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $post = Post::create([
            'name' => $request->input('name')
        ]);

        if ($post) {
            return redirect()->route('post.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('backend.resources.post.form', [
            'title' => "Modifier un post",
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $isUpload = $post->update([
            'name' => $request->input('name')
        ]);

        if ($isUpload) {
            return redirect()->route('post.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->persons()->delete();
        if($post->delete()) {
            return redirect()->route('post.index')->with('success', "Action réussit");
        }

        return redirect()->back()->with('error', 'Une erreur est survenue')->withInput();
    }

    public function trashed(){
        $posts = Post::onlyTrashed()->get();

        return view('backend.resources.post.index', [
            'posts' => $posts,
            'title' => 'Liste des posts supprimés'
        ]);

    }

    public function restore(string $id){

        $post = Post::withTrashed()->find($id);
        if($post->restore()){

            return redirect()->route('post.trashed')->with('success', 'Réstauration réussit');

        }
        return redirect()->back()->with('error', 'Echec de réstauration');

    }

    public function forceDelete(string $id){

        $post = Post::withTrashed()->find($id);

        if (!$post) {
            return redirect()->back()->with('error', 'Post introuvable');
        }

        // Suppression définitive des personnes associées
        $post->persons()->withTrashed()->forceDelete();
        if ($post->forceDelete()) {

            return redirect()->route('post.index')->with('success', 'Suppression définitive réussie');

        }

        return redirect()->back()->with('error', 'Échec de la suppression définitive');
    }

    public function clear()
    {
        $deleted = Post::query()->delete(); // Soft delete tous les genres
        if ($deleted) {
            return redirect()->route('post.index')->with('success', 'Tous les posts ont été déplacés dans la corbeille.');
        }

        return redirect()->back()->with('error', 'Une erreur est survenue lors de la suppression.');
    }
}
