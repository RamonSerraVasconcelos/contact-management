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
        if (strlen($request->post('name')) <= 5) {
            $data = Contact::all();
            return view('create', ['contacts' => $data, 'error' => "The name must be greater than 5 letters."]);
        }

        if (strlen($request->post('contact')) != 9) {
            $data = Contact::all();
            return view('create', ['contacts' => $data, 'error' => "The contact number must be 9 digits."]);
        }

        $contact = new Contact();
        $contact->name = $request->post('name');
        $contact->contact = $request->post('contact');
        $contact->email = $request->post('email');
        $contact->save();

        return redirect('/');
    }

    public function edit(Request $request, $id)
    {
        $data = Contact::find($id);
        return view('edit', ['contact' => $data]);
    }

    public function update(Request $request, $id)
    {
        if (!$request->session()->has('user')) {
            $data = Contact::find($id);
            return view('edit', ['contact' => $data, 'error' => "Only logged users have access to this functionality"]);
        }

        $contact = Contact::find($id);
        $contact->name = $request->post('name');
        $contact->contact = $request->post('contact');
        $contact->email = $request->post('email');
        $contact->save();

        return redirect('/');
    }

    public function delete(Request $request, $id)
    {
        Contact::find($id)->delete();

        return redirect()->back();
    }
}
