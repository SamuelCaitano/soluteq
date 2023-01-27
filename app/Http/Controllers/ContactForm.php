<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactForm extends Controller
{
  private $name;
  private $email;
  private $price;
  private $location;
  private $message;

  public function __construct(Request $request)
  {
    $this->name = $request->name;
    $this->email = $request->email;
    $this->price = $request->price;
    $this->location = $request->location;
    $this->message = $request->message;
  }

  public function SendMailForm()
  {
    
    // $a = 10/0;
    
    // verifica se a conexão com a internet
    if ($this->isOnline()) {
      $data =  [
        'recipient' => 'smlcaitano@gmail.com',
        'name' => $this->name,
        'email' => $this->email,
        'price' => $this->price,
        'location' => $this->location,
        'message' => $this->message,
      ];
    } else {
      return redirect()->back()->withInput()->with("error", "Verifique a conexão com á sua internet");
    }
 
    // cria uma instancia da classe SendMail, e passa os dados como parametro
    Mail::send(new SendMail($data)); 
       
  }

  // adicionar link do site principal
  public function isOnline($site = "https://www.youtube.com/")
  {
    if (@fopen($site, "r")) {
      return true;
    } else {
      return false;
    }
  }
}
