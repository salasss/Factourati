<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use App\Http\Requests\CategoriesFormRequest;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $cates = Categorie::where('user_id', $user_id)->get();

        return view('categorie.Index', compact('cates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categorie.ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Cat = new Categorie;
        $Cat ->Nom = $request -> Nom;
        $Cat->user_id = auth()->id();
        $Cat ->save();
        return redirect('Categorie/Categorie-ajout')->with('message','La Categorie est ajouter avec succès');

    }

    /**
     * Display the specified resource.
     */
    public function show(categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($Categorie_id)
    {
        $Categorie =Categorie::find($Categorie_id);

        return view('categorie.Modification', compact('Categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesFormRequest $request, $Categorie_id)
    {
        $data = $request->validated();

        $Categorie = Categorie::where('id',$Categorie_id)-> update([
            'Nom'=> $data['Nom']

        ]);
        return redirect('Categorie')->with('message','La Categorie a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $Categorie_id)
    {
        $Categorie_id->delete();

        return redirect('Categorie')->with('message','La Categorie a été supprimé avec succès');

    }
}
