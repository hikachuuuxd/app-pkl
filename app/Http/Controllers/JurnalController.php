<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurnal;
use App\Models\Image;
use App\Models\ImageJurnal;
use App\Models\Plotingan;
use App\Models\Bimbingan;


class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('siswa')) {
            abort(403);
        }
        
        return view('dashboard.jurnal.index', [
            'title' => 'Jurnal',
            'jurnals' => Jurnal::with('images')->where('user_id_siswa', Auth::id())->get(),
            'plotingans' => Plotingan::whereHas('siswas', function($query){
                $query->where('user_id_siswa', Auth::id());
            })->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        if (! Gate::allows('siswa')) {
            abort(403);
        }
        return view('dashboard.jurnal.create', [
            'title' => 'Jurnal',
            'plotingans' => Plotingan::whereHas('siswas', function($query){
                $query->where('user_id_siswa', Auth::id());
            })->get()

                  
                     
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

      
        $jurnal = new Jurnal;
        $jurnal->user_id_siswa = Auth::id();
        $jurnal->tanggal = now();
        $jurnal->plotingan_id = $request->plotingan_id;
        $jurnal->isi = $request->isi;
        $jurnal->save();

            if($request->hasFile('image')){
                    $image = $request->file('image');
                    foreach($image as $item => $value)
                    {
                        $path = '/asset/jurnal/';
                        $time = now()->timestamp.'-';
                        $filename = $path.$time.$image[$item]->getClientOriginalName();
                        $image[$item]->move(public_path().'/asset/jurnal', $filename);

                        $input = [
                            'jurnal_id' => $jurnal->id,
                            'image' => $filename
                        ];

                        Image::create($input);
            };
                
        }

        return redirect()->route('jurnal.index')->with('success', 'Jurnal Baru Berhasil di tambahkan!');
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
        return view('dashboard.jurnal.edit', [
            'title' => 'Jurnal',
            'jurnal' => Jurnal::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurnal $jurnal, Image $image)
    {
        $jurnal->update([
            'isi' => $request->isi
        ]);

        if ($request->hasfile('image')) {
    
        foreach($jurnal->images->pluck('image') as $image){
        $path = public_path().$image;

                if (is_file($path)) {
                    unlink($path);
                }
        }

            $image = $request->file('image');
            foreach($image as $item => $value)
            {
                $path = '/asset/jurnal/';
                $time = now()->timestamp.'-';
                $filename = $path.$time.$image[$item]->getClientOriginalName();
                $image[$item]->move(public_path().'/asset/jurnal', $filename);

                $input = [
                    'jurnal_id' => $jurnal->id,
                    'image' => $filename
                ];

            $jurnal->images()->create($input);

            };
                
       
        }
        return redirect()->route('jurnal.index')->with('success', 'Jurnal di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurnal $jurnal, Image $img)
    {   
        if($jurnal->images()){
            foreach($jurnal->images as $image){
                Storage::delete($image->image);
            }
        }
        Jurnal::destroy($jurnal->id);
        return redirect()->route('jurnal.index');
    }


}
