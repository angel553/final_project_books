<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {                                       
        return view('us.contactUs');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'max:50'],
            'message' => ['required'],            
        ]);                                
        
        $email = new ContactMailable($request->all());

        //dd($email);

        Mail::to('contacus@example.com')->send($email);
        
        return redirect('/contactus')->with('info','Mensaje Enviado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSeller(Request $request)
    {
        //dd($request);

        $request->validate([
            'name' => ['required', 'max:50'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'max:50'],
            'message' => ['required'],            
        ]);                                
        
        $email = new ContactMailable($request->all());

        //dd($email);

        Mail::to($request->user->email)->send($email);
        
        return redirect('/products')->with('info','Mensaje Enviado');
    }
    
}
