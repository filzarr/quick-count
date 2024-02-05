@extends('layout.form')
@section('content')
    <section class="main-content-form">
        <div class="flex justify-between items-center">
            <a href="/form/{{$request->kota}}">
                <iconify-icon icon="iconoir:arrow-left-circle" class="text-4xl"></iconify-icon>
            </a>
            <div class="">
                <h3 class="header-content-form">Kabupaten/Kota {{$kota->Kota}}</h3>
                <h3 class="header-content-form">Kecamatan {{$data->kecamatan}}</h3>
            </div>
        </div>
        <livewire:form-desa kecamatanid="{{$data->id}}" kota="{{$request->kota}}" kecamatan="{{$request->kecamatan}}"></livewire:form-desa>
    </section>
@endsection
