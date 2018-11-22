<?php

namespace App\Http\Controllers\Manage;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $patients = Patient::infoPatients();
        return view('tien.home', compact('patients'));
    }

    public function processEdit(Request $request)
    {

    }

    public function processAdd()
    {

    }

    public function processDelete()
    {

    }
}
