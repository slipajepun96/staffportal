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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="{{ asset('js/app.js')}}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>
<body class="bg-gradient-to-r from-green-700 to-blue-500">
<br><br>
<div class="p-6 max-w-md m-auto bg-white rounded-xl shadow-xl items-center space-x-4">
    <div class="text-xl font-medium text-black mb-3">
            Portal Kakitangan 
            <h1>PKPP Agro Sdn. Bhd.</h1>
            <hr>
    

    @yield('content')
</div>
</div>
    
</body>
</html>