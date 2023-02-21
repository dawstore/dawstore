<?php

namespace App\Http\Controllers;
use App\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Mailable
{
 public function index(){
    return view('/contact');

 }

 public function store(){

    $data = request()->validate([
        'contactName' => 'required',
        'contactSurname' => 'required',
        'contactEmail' => 'required',
        'contactPhone' => 'required',
        'contactMessage' => 'required'
    ]);
    $email = new ContactMailable;

    Mail::to('victor.torres.ortiz.18@gmail.com')->send($email);
    return "Mensaje enviado";

 }
}
