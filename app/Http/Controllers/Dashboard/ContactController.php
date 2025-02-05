<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(4);
        return view('dashboard.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('dashboard.contacts.show', compact('contact'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('dashboard.contacts.index')->with('success_message', 'The Contact Message has been deleted successfully');

    }


}
