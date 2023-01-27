<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    // visualização principal do projeto
    return view('index');
  }

  public function gallery() {
    return view('\site\layouts\gallery');
  }

  // visualização para configuração do template de email
  public function email()
  {
    return view('\site\layouts\contact\message');
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
    $data['name'] = $request->name;

    // validação da entrada de dados do formulario   
    $request->validate([
      'name' => 'required',
      'email' => 'required|email',
      'price' => 'required',
      'location' => 'required',
      'message' => 'required|max:255',
    ]);

    $contact = new ContactForm($request);

    // validação de erros no envio
    try {
      $contact->SendMailForm();
      return redirect('/')
        ->with('nameLead', $data['name']);
    } catch (\Exception $error) {

      return redirect('/')
        ->with('erroForm', $error->getMessage());
      // return redirect()->back()->withInput()->with("error", "Ocorreu um erro inesperado: {$error->getMessage()}");
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //
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
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
