<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(ContactRequest $request)
    {
       /* $validation = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required|min:5|max:30',
            'message'=>'required|min:5|max:300'
        ]);*/

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contact')->with('success','Messages has ben Add');
    }

    public function allData()
    {
        return view('messages',['data'=> Contact::inRandomOrder()->get()]);
    }

    public function oneMessage($id)
    {
        return view('one_message',['data'=>Contact::find($id)]);
    }

    public function updateMessage($id)
    {
        return view('update_message',['data'=>Contact::find($id)]);
    }

    public function updateMessageSubmit($id,ContactRequest $request)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        $contact->save();

        return redirect()->route('contact-data')->with('update','Messages has ben Updated');
    }

    public function deleteMessage($id)
    {
        Contact::find($id)->delete();

        return redirect()->route('contact-data')->with('delete','Messages has ben Deleted');
    }
}
