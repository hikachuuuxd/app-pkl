<?php

namespace App\Http\Controllers;
use App\Models\Jurnal;
use Illuminate\Support\Facades\Gate;
use App\Models\Plotingan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GuruJurnalController extends Controller
{
    public function index()
    {
        if (! Gate::allows('guru')) {
            abort(403);
        }
        return view('dashboard.jurnal.guru', [
            'title' => 'Jurnal',
            'jurnals' => Jurnal::with('images')->whereHas('plotingans', function($query){
                $query->with('siswas');
                $query->where('user_id_guru', Auth::id());
            })->get(),
        ]);
    }
}
