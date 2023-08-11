<?php

namespace App\Http\Controllers;

use App\Models\factures;
use Illuminate\Http\Request;
use DB;
class FacturesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $Factures = Factures::where('user_id', $user_id)->get();
        return view('factures.index', compact('Factures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user_id = auth()->id();
        $produits = DB::table('produits')->where('user_id', $user_id)->get();

        return view('factures.Ajout',compact('produits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Facture = new Factures;
            $Facture ->facture_number = $request -> FactureNo;
            $Facture ->facture_Date = $request -> date1;
            $Facture ->Echeance_date = $request -> date2;
            $Facture ->valeur_tva = $request -> {10};
            $Facture ->Total = $request -> netotal;
            //$Facture ->Adresse = $request -> Adresse;
            $Facture->user_id = auth()->id();

            $Facture ->save();
            return redirect('factures/factures-ajout')->with('message','Le Facture est ajouter avec succse');
    }

    /**
     * Display the specified resource.
     */
    public function show(factures $factures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(factures $factures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, factures $factures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(factures $Facture_id)
    {
        $Facture_id->delete();

        return redirect('factures')->with('message','La factures a été archivée avec succès');

    }
    public function ind(Request $request)
    {
        if($request->get('query'))
        {
         $query = $request->get('query');
         $data = DB::table('clients')->where('entreprise', 'LIKE', "%{$query}%")->get();
         $output = '<ul class="block relative" >';
         foreach($data as $row)
         {
          $output .= '
          <li id="li0"><a href="#">'.$row->entreprise.'</a></li>
          ';
         }
         $output .= '</ul>';
         echo $output;
        }}

        public function indd(Request $request)
    {
        if($request->get('query'))
        {
         $query = $request->get('query');
         $data = DB::table('clients')
           ->where('adresse', 'LIKE', "%{$query}%")
           ->get();
           $output = '<ul class="block relative" >';
         foreach($data as $row)
         {
          $output .= '
          <li id="li1"><a href="#">'.$row->adresse.'</a></li>
          ';
         }
         $output .= '</ul>';
         echo $output;
        }}

        public function archive()
    {
        $user_id = auth()->id();
        $Factures = Factures::onlyTrashed()->where('user_id', $user_id)->get();
        return view('factures.archive', compact('Factures'));
    }


        public function inddo(Request $request)
    {
        if($request->get('query'))
        {
         $query = $request->get('query');
         $data = DB::table('produits')
           ->where('nom', 'LIKE', "%{$query}%")
           ->get();
           $output = '<ul class="block relative" >';
         foreach($data as $row)
         {
          $output .= '
          <li id="li5"><a href="#">'.$row->nom.'</a></li>
          ';
         }
         foreach($data as $row)
         {
          $output .= '
          <li id="li6"><a href="#">'.$row->prix_ht.'</a></li>
          ';
         }
         $output .= '</ul>';
         echo $output;
        }}



}
