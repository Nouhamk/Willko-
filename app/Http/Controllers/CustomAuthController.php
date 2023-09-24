<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateurs;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function registration()
    {
        return view('registration');
    }
}
