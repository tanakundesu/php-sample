<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacts;

use Illuminate\Support\Facades\DB;

class MenteController extends Controller
{
    //
    public function index() {
        $values = Contacts::all();

        $contacts = DB::table('contacts')->get();
        dd($contacts);

        return view('mente.test', compact('values'));
    }
}
