<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Contact::all());
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
       $contact = new Contact;
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->phone = $request->phone;
       $contact->image = "asndjsajk";

       $contact->save();

       return response()->json($contact) ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados recebidos na requisição
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15'
        ]);

        // Encontrar o contato pelo ID
        $contact = Contact::find($id);

        // Verificar se o contato foi encontrado
        if (!$contact) {
            return response()->json(['message' => 'Contato não encontrado'], 404);
        }

        // Atualizar os dados do contato
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];

        // Salvar as mudanças no banco de dados
        $contact->save();

        // Retornar uma resposta adequada
        return response()->json(['message' => 'Contato atualizado com sucesso', 'contact' => $contact], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
     $contact->delete(); 
    }
}
