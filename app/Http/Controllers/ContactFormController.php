<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validator = $request->validate([
            'nombre'  => 'required|min:3|max:55',
            'email'   => 'required|email',
            'phone'   => 'required|numeric|max_digits:10',
            'mensaje' => 'required|max:500',
        ]);

       

      

        
        $nombre   = $request->input('nombre');
        $correo   = $request->input('email');
        $telefono = $request->input('phone');
        $mensaje  = $request->input('mensaje');

        // mailtrap@example.com for test
        Mail::to('mailtrap@example.com')->send(new ContactMail($validator));

        // Aquí maneja el envío del formulario, como validar entrada y enviar correos.
        return redirect()->to(url()->previous() . '#contacto')->with('success', '¡Hemos recibido tu mensaje! nos comunicaremos lo mas pronto posible');
    }
}
