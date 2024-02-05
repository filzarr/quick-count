@extends('layout.form')
@section('content')
    <section class="main-content-form">
        <div class="flex justify-between items-center">
            <a href="/form">
                <iconify-icon icon="iconoir:arrow-left-circle" class="text-4xl"></iconify-icon>
            </a>
            <div class="">
                <h3 class="header-content-form">Kabupaten/Kota {{$data->Kota}}</h3>
            </div>
        </div>
        <livewire:form-kecamatan kotaid="{{$data->id}}"  kota="{{$kota}}" ></livewire:form-kecamatan>
    </section>
@endsection
