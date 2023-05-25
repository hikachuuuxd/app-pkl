
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <title>Login</title>
</head>
<body>
    
<div class="relative flex min-h-screen text-gray-800 antialiased flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
    <div class="relative py-3 sm:w-96 mx-auto text-center">
      <span class="text-2xl font-light ">Login to your account</span>
      <div class="mt-4 bg-white shadow-md rounded-lg text-left">
        <div class="h-2 bg-purple-400 rounded-t-md"></div>
        <form action="{{ route('login') }}" method="post" class="">
            @csrf
        <div class="px-8 py-6 ">
          <label class="block font-semibold"> Email </label>
          <input type="email" name="email" id="email" placeholder="email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
          <label class="block mt-3 font-semibold"> Password </label>
          <input type="password" name="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <div class="flex justify-between items-baseline">
              <button type="submit" class="mt-4 bg-purple-500 text-white py-2 px-6 rounded-md hover:bg-purple-600 ">Login</button>
              <a href="{{ route('registrasi.index') }}" class="text-sm hover:underline">belum punya akun?</a>
            </div>
        </div>
        
    </form>
    </div>
  </div>
    
    
</body>
</html>

