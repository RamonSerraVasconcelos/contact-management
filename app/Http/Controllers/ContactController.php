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

    public function delete($id)
    {
        Contact::find($id)->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $data = Contact::find($id);
        return view('edit', ['contact' => $data]);
    }
}
