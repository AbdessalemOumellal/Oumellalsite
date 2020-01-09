<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contactme;

class contactmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $msgs = Contactme::all();
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uxui');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);


        
        $message = new Contactme();
            $message->fullname = $request->fullname;
            $message->email = $request->email;
            $message->phone = $request->phone;
            $message->message = $request->message;
            $message->save();

            mail('fa_oumellal@esi.dz','Website Contact Form: '.$message->fullname, "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $message->fullname\n\nEmail: $message->email\n\nPhone: $message->phone\n\nMessage:\n$message->message"."\r\n\r\n");

            return redirect('/#contact')->with('Successmsg', 'Message Successfully Sent');
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
