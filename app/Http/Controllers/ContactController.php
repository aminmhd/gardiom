<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('create')->with(['contact_create' => 'active']);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'number' => 'required',
            'subject' => 'required',
            'select' => 'required',
        ], [
            'name.required' => 'Field Name is required.',
            'email.required' => 'Field Email is required.',
            'email.email' => 'Field Email is not Valid.',
            'number.required' => 'Field Number is required',
            'subject.required' => 'Field subject is required.',
            'select.required' => 'Field Select is required',
        ]);
        $create_contacts = [
            'contact_name' => $request->input('name'),
            'contact_email' => $request->input('email'),
            'contact_number' => $request->input('number'),
            'contact_subject' => $request->input('subject'),
            'contact_message' => $request->input('message'),
            'contact_condition' => $request->input('select'),
        ];
        Contact::create($create_contacts);

        return redirect()->Route('admin.contact.create')->with('success', 'form submited');
    }

    public function list()
    {
        $contact_list_view = Contact::all();
        return view('panel.contact-list', compact('contact_list_view'))->with(['contact_list' => 'active']);

    }

    public function destroy($contact_id)
    {

        if (ctype_digit($contact_id)) {
            $destroy_contact = Contact::find($contact_id);
            if ($destroy_contact && $destroy_contact instanceof Contact) {
                $destroy_contact->delete();
                return redirect()->Route('admin.contact.list')->with(['success' => 'this field deleted']);

            }
        }


    }
}
