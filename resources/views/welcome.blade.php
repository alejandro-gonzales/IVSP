@extends('template.main.index')
@section('title', '2do Parcial')
@section('css')
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
@endSection
@section('content')
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
            <img src="assets/img/logoUpc.png" alt="logoUpc" srcset="">
        </div>
    </div>
    <div class="text-center">
        <a href="https://campus.cumbre.edu.bo/" class="btn-get-started scrollto">Plataforma Estudiantil UPC</a>
        <a href="https://cumbre.edu.bo/" class="btn-get-started scrollto">Web UPC</a>
    </div>
@endSection
@section('js')
    <script src="{{asset('assets/js/main.js')}}"></script>
@endSection