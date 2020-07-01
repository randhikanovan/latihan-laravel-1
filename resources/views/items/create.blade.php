@extends('adminlte.master')

@section('content')
    <h2>Ini Halaman Create</h2>
@endsection

@push('script')
    <script>
        var wrapper = document.getElementsByClassName("wrappers");
        var items = ["ini", "contoh"];
    
        console.log("ini items: ", items)
    </script>
@endpush
