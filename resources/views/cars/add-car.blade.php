@extends('layout.system-layout')

@section('content')
<div class="bg-gray-300 p-3">
    <h1 class="text-2xl font-bold">Senarai Kenderaan</h1>
    <h5 class="text-lg font-bold">Kenderaan Bagi Ibu Pejabat</h5>
</div>



<div class="m-3">
    <a href="" class="bg-green-700 hover:bg-green-600 text-white p-2 rounded">&#43; Kenderaan Baharu</a>
</div>
<div class="m-3">
    <table class="border-collapse border border-blue-900 w-full">
        <thead>
            <tr class="bg-blue-200">
                <th width="5%" class="border border-blue-900">Bil.</th>
                <th width="30%" class="border border-blue-900">No. Pendaftaran Kenderaan</th>
                <th width="50%" class="border border-blue-900">Model Kenderaan</th>
                <th width="20%" class="border border-blue-900">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                @foreach($cars as $car)
                <td class="border border-blue-900">{{$car->id}}</td>
                <td class="border border-blue-900">{{$car->registration_no}}</td>
                <td class="border border-blue-900"> {{$car->model}}</td>
                <td class="border border-blue-900">Tindakan</td>
                @endforeach
            </tr>
        </tbody>
    </table>
</div>
@endsection