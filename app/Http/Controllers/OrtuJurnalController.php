<?php

namespace App\Http\Controllers;
use App\Models\Jurnal;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrtuJurnalController extends Controller
{
    public function index()
    {
        if (! Gate::allows('ortu')) {
            abort(403);
        }

        return view('dashboard.jurnal.ortu', [
            'title' => 'Jurnal',
            'jurnals' => Jurnal::whereHas('ortu', function($query){
                $query->where('user_id_ortu', Auth::id());
            })->with('images')->get(),
        ]);
    }
}
