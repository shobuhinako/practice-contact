<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contact = ['contact' => 'name', 'email', 'tel', 'content'];
        return view('index', $contact);
    }

    public function confirm(ContactRequest $request){
        $contact = $request->all();
        return view('/confirm', compact('contact'));
    }

    public function thanks(){
        return view('/thanks');
    }

    public function create(Request $request){
        $form = [
            'name' => $request->name,
            'email' => $request->email,
            'tel' => $request->tel,
            'content' => $request->content,
        ];
        Contact::create($form);
        return view('/thanks');
    }
}
