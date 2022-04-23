<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return view('home', ['contacts' => $data]);
    }

    public function create(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->post('name');
        $contact->contact = $request->post('contact');
        $contact->email = $request->post('email');
        $contact->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $data = Contact::find($id);
        return view('edit', ['contact' => $data]);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->post('name');
        $contact->contact = $request->post('contact');
        $contact->email = $request->post('email');
        $contact->save();

        return redirect('/');
    }

    public function delete($id)
    {
        Contact::find($id)->delete();

        return redirect()->back();
    }
}
