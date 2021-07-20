@extends('layout.system-layout')

@section('content')
<div class="bg-gray-300 p-3">
    <h1 class="text-2xl font-bold">Senarai Kenderaan</h1>
</div>



<div class="m-3">
    <a href="" class="bg-green-700 hover:bg-green-500 text-white p-2 rounded">&#43; Kenderaan Baharu</a>
</div>
<div class="m-3">
    <table class="border-collapse border border-green-900 w-full">
        <thead>
            <tr class="bg-green-700 text-white p-3 rounded">
                <th width="5%" class="border border-blue-900 p-3">Bil.</th>
                <th width="10%" class="border border-blue-900">No. Pendaftaran Kenderaan</th>
                <th width="30%" class="border border-blue-900">Model Kenderaan</th>
                <th width="30%" class="border border-blue-900">Pejabat / Ladang</th>
                <th width="25%" class="border border-blue-900">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
                <tr class="h-30 border border-black hover:bg-gray-200 text-center min-h-full" style="">
                    <td class="border border-gray-300 p-3 px-5">{{$car->id}}</td>
                    <td class="border border-gray-300 p-3 px-5">{{$car->registration_no}}</td>
                    <td class="border border-gray-300 p-3 px-5"> {{$car->model}}</td>
                    <td class="border border-gray-300 p-3 px-5"> {{$car->estate->estate_name}}</td>
                    <td class="border border-gray-300 p-3 px-5">
                            <a href="{{route('cars-view',$car->id)}}">
                            <button class=" modal-open bg-green-500 hover:bg-green-300 text-gray-800 font-bold py-2 px-4 rounded" type="button"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </button>
                            </a>
                            <a href="#">
                                <button class="bg-yellow-500 hover:bg-yellow-300 text-gray-800 font-bold py-2 px-4 rounded"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </button>
                            </a>
                            <a href="#">
                                <button class="bg-red-500 hover:bg-red-300 text-gray-800 font-bold py-2 px-4 rounded"> 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </a>
                    </td>                
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$cars->links()}}
</div>


@endsection