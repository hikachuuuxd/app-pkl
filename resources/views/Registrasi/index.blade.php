<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>Document</title>
</head>
<body>
    <!-- component -->
<form action="{{ route('registrasi') }}" method="post">
@csrf
<div class="min-h-screen w-full flex items-center justify-center bg-gray-50">
  
<div class="bg-white rounded-md border-t-4 border-purple-400">

  <div class="grid max-w-3xl gap-4 py-4 px-8 sm:grid-cols-2 ">
    <div class="grid">
      <div class="bg-white flex min-h-[60px] flex-col-reverse justify-center rounded-md ">
        <input type="text" name="nama" id="" placeholder="nama" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" />
        <label html="first-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Nama Lengkap</label>
      </div>
    </div>

    <div class="grid">
      <div class="bg-white first:flex min-h-[60px] flex-col-reverse justify-center rounded-md ">
        <select name="jenis_kelamin" id="" placeholder="jenis_kelamin" class="border w-full  px-3 py-2 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        {{-- <input type="text" name="last-name" id="last-name"  placeholder="Last name" /> --}}
        <label html="last-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Jenis Kelamin</label>
      </div>
    </div> 
  </div>

  <div class="grid max-w-3xl gap-4 py-2 px-8 ">
    <div class="grid">
      <div class="bg-white flex min-h-[60px] flex-col-reverse justify-center rounded-md ">
       <textarea name="alamat" id="" cols="30" rows="5" class="border w-full  px-3 py-2 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md"></textarea>
        {{-- <input type="text" name="nama Lengkap" id="" placeholder="nama" class="peer block w-full border-0 p-0 text-base text-gray-900 placeholder-gray-400 focus:ring-0" /> --}}
        <label html="first-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Alamat</label>
      </div>
    </div>    
  </div>

  <div class="grid max-w-3xl gap-4 py-4 px-8 sm:grid-cols-2 ">
    <div class="grid">
      <div class="bg-white flex min-h-[60px] flex-col-reverse justify-center rounded-md ">
        <input type="number" name="telp" id="" placeholder="telp"  class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" />
        <label html="first-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Nomor Telepon</label>
      </div>
    </div>

    <div class="grid">
      <div class="bg-white first:flex min-h-[60px] flex-col-reverse justify-center rounded-md ">
        <input type="email" name="email" id="last-name"  placeholder="email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" >
        <label html="last-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Email</label>
      </div>
    </div> 
  </div>

  <div class="grid max-w-3xl gap-4 py-4 px-8 sm:grid-cols-2 ">
    <div class="grid">
      <div class="bg-white flex min-h-[60px] flex-col-reverse justify-center rounded-md ">
        <input type="password" name="password" id="" placeholder="password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" />
        <label html="first-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Password</label>
      </div>
    </div>

    <div class="grid">
      <div class="bg-white first:flex min-h-[60px] flex-col-reverse justify-center rounded-md ">
        <input type="password" name="password" id="" placeholder="password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md" >
        <label html="last-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">Konfirmasi Password</label>
      </div>
    </div> 
  </div>

  <div class="grid max-w-3xl gap-4 py-2 px-8 ">
    <div class="grid">
      <div class="bg-white flex min-h-[60px] flex-col-reverse justify-center rounded-md ">
       {{-- <textarea name="alamat" id="" cols="30" rows="10" class="peer block w-full border-0 p-0 text-base text-gray-900 placeholder-gray-400 focus:ring-0"></textarea> --}}
       <select name="role" id="" class="border w-full  px-3 py-2 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <option value="guru">Guru</option>
            <option value="siswa">Siswa</option>
            <option value="dudi">Dudi</option>
            <option value="ortu">Ortu</option>
       </select>
        {{-- <input type="text" name="nama Lengkap" id="" placeholder="nama" class="peer block w-full border-0 p-0 text-base text-gray-900 placeholder-gray-400 focus:ring-0" /> --}}
        <label html="first-name" class="block transform text-xs font-bold uppercase text-gray-400 transition-opacity, duration-200 peer-placeholder-shown:h-0 peer-placeholder-shown:-translate-y-full peer-placeholder-shown:opacity-0">ROle</label>
      </div>
    </div>    
  </div>

    <div class="div grid max-w-3xl gap-4 py-4 px-8">
        <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">Registrasi</button>
    </div>
</form>
  </div>
</body>
</html>



