<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil
     */
    public function index()
    {
        return view('home');
    }

    // (les autres méthodes déjà utilisées)
    public function contact()
    {
        return view('contact');
    }

    public function sendContact(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Récupération des données envoyées
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Envoi des données à la vue
        return view('contact-result', compact('name', 'email', 'message'));
    }
}
