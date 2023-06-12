@extends('layouts.main')
@section('container')

<div  class="h-full ml-14 mt-14 mb-10 md:ml-64">
    <div class="container m-10 p-6 mx-auto lg:w-5/6 ">
 
        <p class="uppercase text-xl text-center my-5 ">Edit Kesediaan</p>
    <form action="{{ route('kesediaan.update', $kesediaan->id) }}" method="post" >
        @method('PUT')
            @csrf
            
        <div class="flex justify-center flex-wrap" id="form">
    
@foreach ($kesediaan->jurusans as $jurusan)
<select name="jurusan_id[]" id=""  class="w-4/5 p-2 m-4  text-purple-500 border-b-2 bg-transparent">   
    @foreach ($jurusans as $kompetensi)
        @if($jurusan->pivot->jurusan_id == $kompetensi->id)
        <option value="{{ $kompetensi->id }}"   >{{ $kompetensi->nama }}</option>
        @endif
    @endforeach
</select>
        <input type="number" name="jumlah[]" id="jumlah" value="{{ old('jumlah[]', $jurusan->pivot->jumlah) }}"  class="w-4/5 p-2 m-4   text-purple-500 border-b-2 bg-transparent" placeholder="jumlah" >
@endforeach
        </div>

        <div class="flex justify-end">
            <button type="button" id="tambah" class="p-4 m-6 text-base  bg-purple-200 rounded hover:bg-purple-800 hover:text-white">Tambah Kompetensi</button>
        </div>
        <div class="flex justify-center ">
            <button type="submit" class=" p-3 my-10 w-2/4 text-base  bg-purple-200 rounded hover:bg-purple-800 hover:text-white ">Submit</button>
        </div>
    </form>
    
    
</div>
</div>


<script>

// for(let i = 0; i<kesediaan['jurusans'].length; i++){
//         <select name="jurusan_id[]" id=""  class="w-4/5 p-2 m-4  text-purple-500 border-b-2 bg-transparent">
//                 @foreach ($jurusans as $jurusan)
//                     <option value="{{ $jurusan->id }}" @foreach($kesediaan->jurusans as $kompetensi) {{ old('jurusan_id[]', $kesediaan->id ) == $jurusan->id? 'selected':null}} @endforeach>{{ $jurusan->nama }}</option>
//                 @endforeach
//             </select>
// }

//     document.getElementById('tambah').addEventListener('click', function(){
//     let content = document.getElementById('form')
//     let input = `
//     <select name="jurusan_id[]" id=""  class="w-4/5 p-2 m-4  text-purple-500 border-b-2 bg-transparent">
//                 @foreach ($jurusans as $jurusan)
//                     <option value="{{ $jurusan->id }}" @foreach($kesediaan->jurusans as $kompetensi) {{ old('jurusan_id[]', $kesediaan->id ) == $jurusan->id? 'selected':null}} @endforeach>{{ $jurusan->nama }}</option>
//                 @endforeach
//             </select>
//         <input type="number" name="jumlah[]" id="jumlah"  class="w-4/5 p-2 m-4   text-purple-500 border-b-2 bg-transparent" placeholder="jumlah"> 
//     `
//     content.insertAdjacentHTML('beforeend', input)
  
    
    
    
// })
</script>


@endsection