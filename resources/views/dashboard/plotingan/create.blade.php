@extends('layouts.main')
@section('container')

<div class="h-full ml-14 mt-14 mb-10 md:ml-64">
    <div class="container m-10 p-6 mx-auto">
        <div class="m-5 p-5 ">
            <p class="uppercase text-xl text-center my-5 ">Ploting PKL</p>
            <form action="{{ route('plotingan.store') }}" method="post">
              
                @csrf
                
            
                <div class="flex justify-center flex-wrap">
    
                    
                    <input type="text" class="hidden" name="kesediaan_id" value="{{ $kesediaan->id }}" >
                    <p class=" w-4/5 p-2 m-2">{{ $kesediaan->dudi->nama }}</p>
                    <select name="user_id_guru" id="" class="w-4/5 p-2 m-2  text-purple-500 border-b-2 bg-transparent">
                        <option value="">Pilih</option>
                    
                        @foreach ($gurus as $guru)
                        @if($guru->status == 0)
                        <option value="{{ $guru->user_id_guru }}">{{ $guru->user->nama }}</option>
                        @else
                        <option value="{{ $guru->user_id_guru }}" class="hidden">{{ $guru->user->nama }}</option>
                        @endif
                    @endforeach
                    </select>
                @foreach ($kesediaan->jurusans as $jurusan)
                <select name="jurusan_id[]" id=""  class="w-4/5 p-2 m-4  text-purple-500 border-b-2 bg-transparent">   
                    @foreach ($jurusans as $kompetensi)
                        @if($jurusan->pivot->jurusan_id == $kompetensi->id)
                        <option value="{{ $kompetensi->id }}"   >{{ $kompetensi->nama }}</option>
                        @endif
                    @endforeach
                </select>
                <select name="user_id_siswa[]" id="" multiple class="w-4/5 p-2 m-2  text-purple-500 border-b-2 bg-transparent">
                    @foreach ($siswas as $siswa)
                    @if($siswa->status == 0 && $jurusan->pivot->jurusan_id == $siswa->jurusan_id)
                     <option value="{{ $siswa->user_id_siswa }} " class="">{{ $siswa->user->nama }} | {{ $siswa->jurusan->nama }}</option>
                    @else
                    <option value="{{ $siswa->user_id_siswa }} " class="hidden">{{ $siswa->user->nama }}</option>
                    @endif
                    @endforeach
                </select>
                @endforeach
          
                    
       
    
                </div>
                <div class="flex justify-center">
                    <button type="submit" class=" p-3 my-6 w-2/5 text-base   bg-purple-200 rounded hover:bg-purple-800 hover:text-white ">Kirim</button>
                </div>


                </form>
        
        </div>
    </div>
    
</div>


    
@endsection