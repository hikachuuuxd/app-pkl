<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Kesediaan;
use App\Models\Kompetensi;
use App\Models\User;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Gate;
class KesediaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('dashboard.kesediaan.index',[
            'title' => "tambah",
            'kesediaans' => Kesediaan::where('user_id_dudi', Auth::id())->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('dashboard.kesediaan.create',[
            'title' => "tambah",
            'jurusans' => Jurusan::get(),
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

        $input = $request->validate([
            'jurusan_id' => ['required'], 
            'jumlah' => ['required']
    ]);
   
        $kesediaan = new Kesediaan;
        $kesediaan->user_id_dudi = Auth::id();
        $kesediaan->save();

    
      
            $jurusan_id = $request->jurusan_id;
            $jumlah = $request->jumlah;
            foreach($jurusan_id as $item => $value)
            {
  
            $input['jurusan_id'] = $jurusan_id[$item]; 
            $input[  'jumlah'] = $jumlah[$item];
    

            $kesediaan->jurusans()->attach($kesediaan->id, $input);
            }

            // $jurusans = [$request->jurusan_id];
            // foreach($jurusans as $jurusan => $id){
            //     $jurusans['jumlah'] = $request->jumlah[$jurusan];
            // }

            // $kesediaan->jurusans()->attach($jurusans);
            return redirect()->route('kesediaan.index')->with('success', 'kesediaan baru berhasil di tambahkan!');
           
        
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
        return view('dashboard.kesediaan.edit', [
            'title' => "edit",
            'jurusans' => Jurusan::get(),
            'kesediaan' => Kesediaan::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kesediaan $kesediaan)
    {
      Kesediaan::find($kesediaan->id);

      $jurusan_id = $request->jurusan_id;
      $jumlah = $request->jumlah;
      foreach($jurusan_id as $item => $value)
      {
            $input['jurusan_id'] = $jurusan_id[$item]; 
            $input[  'jumlah'] = $jumlah[$item];

      $kesediaan->jurusans()->syncWithPivotValues($kesediaan->id, $input);

      }
    

            return redirect()->back();
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kesediaan $kesediaan)
    {
        Kesediaan::Destroy($kesediaan->id);
        $kesediaan->jurusans()->detach('jurusan_id');
        return redirect()->route('kesediaan.index');
    }
}
