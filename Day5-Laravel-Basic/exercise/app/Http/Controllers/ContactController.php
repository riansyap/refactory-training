<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        return $contact;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required|email|unique:contacts,email',
            'telepon_ponsel' => 'required|numeric',
            'telepon_rumah' => 'required|numeric',
        ];
        
        $validation = validator()->make(request()->all(), $rules);

        if ($validation->passes()) {
            $contact = new Contact();
            
            $contact->nama_depan = $request->nama_depan;
            $contact->nama_belakang = $request->nama_belakang;
            $contact->telepon_ponsel = $request->telepon_ponsel;
            $contact->telepon_rumah = $request->telepon_rumah;
            $contact->email = $request->email;
            $contact->description = $request->description;

            $contact->save();

            return [
            'message' => 'Successfully create new contact',
            ];
        } else {
            return [
                'message' => $validation->messages(),
            ];
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return $contact;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $rules = [
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'email' => 'required|email',
            'telepon_ponsel' => 'required|numeric',
            'telepon_rumah' => 'required|numeric',
        ];
        
        $validation = validator()->make(request()->all(), $rules);

        if ($validation->passes()) {
            
            $contact->nama_depan = $request->nama_depan;
            $contact->nama_belakang = $request->nama_belakang;
            $contact->telepon_ponsel = $request->telepon_ponsel;
            $contact->telepon_rumah = $request->telepon_rumah;
            $contact->email = $request->email;
            $contact->description = $request->description;

            $contact->save();

            return [
            'message' => 'Successfully update new contact',
            ];
        } else {
            return [
                'message' => $validation->messages(),
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        return [
        'message' => 'Contact has been deleted',
        ];

    }
}
