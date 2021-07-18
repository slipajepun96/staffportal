

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

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{route('forgot-password')}}" method="POST">
                @csrf
                <input type="text" name="email" id="email" class="rounded text-sm p-2 w-full mb-2 shadow appearance-none" placeholder="Masukkan emel untuk set semula kata laluan">
                <button type="submit" class="bg-blue-500 hover:bg-blue-300 text-white p-2 rounded text-sm shadow appearance-none">Set Semula Kata Laluan &rarr;</button>
            </form>
    </div>
</div>

</body>
</html>