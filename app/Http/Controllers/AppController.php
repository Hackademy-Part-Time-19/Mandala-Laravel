<?php

namespace App\Http\Controllers;

use App\Mail\PrimaryMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppController extends Controller
{
    public function index()
    {
        return view('home', ["titolo" => "Il blog di Francesco"]);
    }

    public function articoli()
    {
        $articoli = [
            ["titolo" => "Cappotto", "categoria" => "Inverno", "descrizione" => "Cappotto 100% lana!"],
            ["titolo" => "Maglione", "categoria" => "Inverno", "descrizione" => "Maglione 100% lana!"],
            ["titolo" => "T-shirt", "categoria" => "Estate", "descrizione" => "T-shirt vari modelli!"],
            ["titolo" => "Shorts", "categoria" => "Estate", "descrizione" => "Shorts in jeans o cotone!"],
            ["titolo" => "Sciarpa", "categoria" => "Inverno", "descrizione" => "Sciarpa 100% lana!"],
            ["titolo" => "Baseball Cap", "categoria" => "Estate", "descrizione" => "Cappellino in stile baseball!"]
        ];

        return view('articoli', ["articoli" => $articoli, "articoli_title" => "I miei articoli"]);
    }

    public function dettaglio($id)
    {
        $articoli = [
            0 => ["titolo" => "Cappotto", "categoria" => "Inverno", "descrizione" => "Cappotto 100% lana!"],
            1 => ["titolo" => "Maglione", "categoria" => "Inverno", "descrizione" => "Maglione 100% lana!"],
            2 => ["titolo" => "T-shirt", "categoria" => "Estate", "descrizione" => "T-shirt vari modelli!"],
            3 => ["titolo" => "Shorts", "categoria" => "Estate", "descrizione" => "Shorts in jeans o cotone!"],
            4 => ["titolo" => "Sciarpa", "categoria" => "Inverno", "descrizione" => "Sciarpa 100% lana!"],
            5 => ["titolo" => "Baseball Cap", "categoria" => "Estate", "descrizione" => "Cappellino in stile baseball!"]
        ];

        return view('dettaglio', ["articolo" => $articoli[$id]]);
    }

    public function contatti(){
        return view('contatti', ["contatti"=> "Contatti"]);
    }

    public function InviaMail(Request $request)
    {
        Mail::to($request->input("Email"))->send(new PrimaryMail($request->input("Nome"), $request->input("Email"), $request->input("Testo")));

        return redirect()->back()->with("success","Il messaggio è stato inviato correttamente.");
    }
}
