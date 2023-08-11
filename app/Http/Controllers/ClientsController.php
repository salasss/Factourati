<?php

namespace App\Http\Controllers;

use App\Models\clients;
use Illuminate\Http\Request;
use App\Http\Requests\Clientsformrequest;
class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = auth()->id();
        $Clients = Clients::where('user_id', $user_id)->get();
        return view('Clients.index', compact('Clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clients.Ajout');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Client = new Clients;
            $Client ->Nom = $request -> Nom;
            $Client ->Prenom = $request -> Prenom;
            $Client ->Email = $request -> Email;
            $Client ->Telephone = $request -> Telephone;
            $Client ->Entreprise = $request -> Entreprise;
            $Client ->Adresse = $request -> Adresse;
            $Client->user_id = auth()->id();

            $Client ->save();
            return redirect('Clients/Clients-ajout')->with('message','Le Client est ajouter avec succse');
    }

    /**
     * Display the specified resource.
     */
    public function show(clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($Client_id)
    {
        $Client = clients::find($Client_id);

        return view('Clients.Modification', compact('Client'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientsFormRequest $request, $Client_id)
    {
        $data = $request->validated();

        $client = clients::where('id',$Client_id)-> update([
            'Nom'=> $data['Nom'],
            'Prenom' => $data['Prenom'],
            'Email'=> $data['Email'],
            'Telephone'=> $data['Telephone'],
            'Adresse'=> $data['Adresse']


        ]);
        return redirect('Clients')->with('message','Le Client a été modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyy(clients $Client_id)
    {
        $Client_id->delete();

        return redirect('Clients')->with('message','Le Client a été supprimé avec succès');

    }

}
