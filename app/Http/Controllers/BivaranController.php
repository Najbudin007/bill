<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BivaranController extends Controller
{
    public function personalBivaran()
    {
        return view('admin.biwaran.personal_create');
    }
}
