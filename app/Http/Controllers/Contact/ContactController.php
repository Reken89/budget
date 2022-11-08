<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact\Contact;
use Illuminate\Http\Request;
use App\Request\ContactRequest;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.contact_form');        
    }
    
    public function store(ContactRequest $request)
    {

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->mobile_number = $request->mobile_number;
        $contact->message = $request->message;
        $contact->save();
      
        return response()->json(['success'=>'Form is successfully submitted!']);
        
    }
    
    public function test()
    {
        return view('contact.test'); 
        
    }
}
