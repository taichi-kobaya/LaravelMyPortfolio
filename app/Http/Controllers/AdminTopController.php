<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
class AdminTopController extends Controller
{
    public function showList()
    {

        $contacts = Contact::orderBy('created_at', 'desc')->paginate(10);
        // $contacts = DB::table('contacts');
        // $contacts = orderBy('created_at', 'desc')->paginate(10);

        return view('admin.index',compact('contacts'));
    }

}