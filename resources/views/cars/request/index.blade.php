@extends('layout.system-layout')

@section('content')
<div class="bg-gray-300 p-3">
    <h1 class="text-2xl font-bold">Senarai Permohonan Penggunaan Kenderaan</h1>
</div>

<script>
    function deactivateConfirmation()
    {
        confirm("Anda pasti? \n Ini tidak boleh diundur")
    }

</script>

<div class="m-3">
    <a href="{{route('cars-request-request-use')}}" class="bg-green-700 hover:bg-green-500 text-white p-2 rounded">&#43; Permohonan Penggunaan Kenderaan Baharu</a>
</div>

@if (session('status'))
    <div class="bg-red-300 text-red-900 p-2 rounded shadow m-3">
        {{ session('status') }}
    </div>
@endif

<div class="m-3">
    <table class="border-collapse border border-green-900 w-full">
        <thead>
            <tr class="bg-green-700 text-white p-3 rounded">
                <th width="5%" class="border border-blue-900 p-3">ID</th>
                <th width="10%" class="border border-blue-900">No. Pendaftaran Kenderaan</th>
                <th width="30%" class="border border-blue-900">Model Kenderaan</th>
                <th width="30%" class="border border-blue-900">Pejabat / Ladang</th>
                <th width="25%" class="border border-blue-900">Tindakan</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

  
</div>


@endsection