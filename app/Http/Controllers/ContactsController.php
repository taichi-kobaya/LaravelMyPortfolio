<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactsController extends Controller
{

    public function confirm(Request $request)
    {

        $request->validate([
            'name'     => 'required|max:10',
            'email'    => 'required|email',
            'tel'      => 'nullable|numeric',
            'gender'   => 'required',
            'contents' => 'required',
        ]);

        $inputs = $request->all();

        return view('contacts.confirm', ['inputs' => $inputs]);
    }


    public function process(Request $request)
    {
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if($action === 'submit') {

            // DBにデータを保存
            $contact = new Contact();
            $contact->fill($input);
            $contact->save();

            return view('top.index');

        }
    }

    public function complete()
    {
        return view('contacts.complete');
    }
}
