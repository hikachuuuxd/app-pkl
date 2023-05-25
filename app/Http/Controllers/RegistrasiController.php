<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi.index', [
            'title' => 'Registrasi'
        ]);
    }
    public function registrasi(Request $request)
    {
        $user = $request->all();
        $user['password'] = bcrypt($user['password']);
        User::create($user);
        
        return redirect()->route('login.index');
    }
}
