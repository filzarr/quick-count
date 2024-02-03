@extends('layout.form')
@section('content')
    <section class="main-content-form">
        <h3 class="header-content-form">Kota / Kabupaten</h3>
        <livewire:form-kecamatan kotaid="{{$data->id}}"  kota="{{$kota}}" ></livewire:form-kecamatan>
    </section>
@endsection
