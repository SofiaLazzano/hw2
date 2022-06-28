<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AccessController extends BaseController
{
 public function ShowRegistrazione(){

  
    return view('registrazione');

 }

 public function CheckUsername($username){
    
    $username2 = User::where('username', $username)
    ->first();
    return $username2;
 }

 public function Errors($data){

    $errors = array();


    if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $data['username'])) {
        $errors[] = "Username non valido";
    }
    
    
    if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email non valida";
    } else {
        $email = User::where('email', $data['email'])
        ->first();
        if ($email !== null) {
            $errors[] = "Email già esistente";
        }
    }


    if (strlen($data["password"]) < 8) {
        $errors[] = "Password non valida";
    } 

    return count($errors);
 }

 public function AvviaRegistrazione(Request $request){
    if($this->Errors($request) == 0){
        $User = new User;
        $User -> nome = $request -> nome;
        $User -> cognome = $request -> cognome;
        $User -> username = $request -> username;
        $User -> email = $request -> email;
        $User -> password = $request -> password;
       

        if ($User) {
            Session::put('email', $User->email);
            $User->save();
            return redirect('home');
        } 
        else {
            return redirect('registrazione')
            ->withInput();
        } 
    } else {
        return redirect('registrazione')->withInput();
    }

}
       
 }

