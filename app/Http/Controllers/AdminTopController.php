<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminTopController extends Controller
{
    public function showList()
    {
        $contacts = Contact::paginate(10);

        return view('admin.index',compact('contacts'));
    }

}