@extends('layouts.main')
@section('container')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">
    <div class="container m-10 p-6 mx-auto">
        <div class="m-5 p-5 ">
            <p class="uppercase text-xl text-center my-5 ">Ploting PKL</p>
            <form action="{{ route('jurnal.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @foreach ($plotingans as $plotingan)
                <input type="number" class="hidden" name="plotingan_id" value="{{ $plotingan->id}}" id="">
                @endforeach
                <textarea name="isi" id="" cols="30" rows="10" class="w-full p-2 m-2  text-slate-500 border-b-2 bg-transparent" placeholder="Isi Jurnal"></textarea>
                <input type="file" name="image[]"  id="" placeholder="tambah image" accept="image/*" multiple class="w-full p-2 m-2  text-slate-500 border-b-2 bg-transparent">
                {{-- <input type="file" name="image[]" id="" placeholder="tambah image" accept="image/*" class="w-full p-2 m-2  text-purple-500 border-b-2 bg-transparent"> --}}
                <div class="flex justify-center">
                    <button type="submit" class=" p-3 my-6 w-2/4 text-base  bg-purple-200 rounded hover:bg-purple-800 hover:text-white " placeholder="tambah image" >Kirim</button>
                </div>
                </form>
        
        </div>
    </div>
</div>



    
@endsection