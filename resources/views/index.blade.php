<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Portal</title>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    </style>

</head>
<body class="bg-gradient-to-r from-green-700 to-blue-500">
<br><br>
<div class="p-6 max-w-sm m-auto bg-white rounded-xl shadow-xl items-center space-x-4">
    <div class="text-xl font-medium text-black mb-3">
            Portal Kakitangan 
            <h1>PKPP Agro Sdn. Bhd.</h1>
            <br>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div class="mb-4">    
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
            Nama Pengguna    
            </label>       
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text" placeholder="Nama Pengguna">
        </div>    
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
              Kata Laluan
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="Kata Laluan">
        </div>
        <div class="mb-4 text-sm">
            <button class="bg-green-700 hover:bg-green-600 text-white p-2 rounded" type="submit">Log Masuk &rarr;</button>
            <a href="{{route('password-reset')}}" class="text-grey-700 hover:underline p-2" >Lupa Kata Laluan?</a>
        </div>
      </form>
    </div>
</div>

<div class=" mt-3 mb-6 p-3 max-w-sm m-auto bg-gray-800 text-white rounded-xl shadow-xl items-center space-x-4">
 Github Repository : <a href="https://github.com/slipajepun96/staffportal" class="underline">https://github.com/slipajepun96/staffportal</a>
</div>

</body>
</html>