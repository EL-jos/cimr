<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * @param Request $request
     * @param string $path
     * @return \Intervention\Image\Image|void
     */
    public function encodeImage(Request $request, string $path, string $model=null)
    {
        //
        $width = (int) request()->input('w');
        $height = (int) request()->input('h');

        //dd($width, $height);

        switch ($model) {
            case Variant::class:
                $path = 'assets/resources/variants'. DIRECTORY_SEPARATOR . $path;
                break;
            case Category::class:
                $path = 'assets/resources/categories'. DIRECTORY_SEPARATOR . $path;
                break;
            case Menu::class:
                $path = 'assets/resources/menus'. DIRECTORY_SEPARATOR . $path;
                break;
            default:
                $path = 'assets/resources/articles'. DIRECTORY_SEPARATOR . $path;
                break;
        }

        // Obtenez le chemin complet de l'image
        $imagePath = public_path($path);
        // Vérifier si le fichier existe
        if (file_exists($imagePath)) {

            // Redimensionner l'image
            $image = Image::make($imagePath);

            // Redimensionner l'image si les paramètres de taille sont spécifiés
            if ($width && $height) {
                $image->fit($width, $height);
            }

            // Obtenez l'encodage de l'image redimensionnée
            $encodedImage = $image->encode('data-url');

            // Retourner directement le data URL pour l'afficher dans le navigateur
            return $image->response('jpg');

            // Afficher l'image redimensionnée dans la balise <img>
            //echo '<img src="'.$encodedImage.'">';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document, bool $isMultiple)
    {

        $this->deleteImage($document->path);

        if($document->delete()){
            return view('backend.layouts.file', ['isMultiple' => $isMultiple])->render();
        }else{
            return response()->json(['message' => "Impossible de supprimer l'image", 'code' => 1]);
        }

    }

    private function deleteImage($path)
    {
        if ( file_exists( public_path($path) ) ) {
            unlink(public_path($path));
        }
    }

}
