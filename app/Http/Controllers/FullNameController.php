<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullNameController extends Controller
{
    private $fullName;
    public function index(Request $request) {
        $this->fullName = $request['first_name'].' '.$request['last_name'];
        return back()->with('message',$this->fullName);
    }
}
