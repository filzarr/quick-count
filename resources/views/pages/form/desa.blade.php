@extends('layout.form')
@section('content')
    <section class="main-content-form">
        <h3 class="header-content-form">Kota / Kabupaten</h3>
        <livewire:form-desa kecamatanid="{{$data->id}}" kota="{{$request->kota}}" kecamatan="{{$request->kecamatan}}"></livewire:form-desa>
    </section>
@endsection
