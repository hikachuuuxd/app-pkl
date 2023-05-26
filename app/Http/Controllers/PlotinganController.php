<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\Plotingan;
use App\Models\Kesediaan;
use App\Models\Bimbingan;
use App\Models\User;
use App\Models\Siswa;
use App\Models\Guru;
use Illuminate\Http\Request;

class PlotinganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.plotingan.index', 
        [
            'title' => 'Plotingan',
            'admins' => Plotingan::with('guru', 'siswas')->get(),
            'kesediaans' => Kesediaan::with('dudi')->get(),
            'plotingans'=> Plotingan::whereHas('siswas', function($query){
                $query->where('user_id_siswa', Auth::id());
            })->orWhereHas('kesediaan', function($query){
                $query->where('user_id_dudi', Auth::id());
            })->orWhere('user_id_guru', Auth::id())->with('guru', 'siswas')->get(),
        ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('admin')) {
            abort(403);
        }

        return view('dashboard.plotingan.create', [
            'title' => 'Plotingan',
            'gurus' => Guru::with('user')->get(),
            'kesediaans' => Kesediaan::with('dudi')->get(),
            'siswas' => Siswa::with('user')->get(),

 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $plotingan = new Plotingan;
        $plotingan->tanggal = now();
        $plotingan->user_id_guru = $request->user_id_guru;
        $plotingan->kesediaan_id = $request->kesediaan_id;
        $plotingan->save();
                        
        $siswa = $request->user_id_siswa;
        foreach($siswa as $item => $value)
        {
            $detail = [
                'plotingan_id' => $plotingan->id, 
                'user_id_siswa' => $siswa[$item],
            ];
        
         Bimbingan::create($detail);
        }

        return redirect()->route('plotingan.index')->with('success', 'Plotingan baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Plotingan::destroy($id);
        return redirect()->route('plotingan.index');
    }
}
