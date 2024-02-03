@extends('layout.form')
@section('content')
    <section class="main-content-form">
        <h3 class="header-content-form">Kota / Kabupaten</h3>
     
            <livewire:form-tps  desaid="{{$data->id}}"  kota="{{$request->kota}}" kecamatan="{{$request->kecamatan}}" desa="{{$request->desa}}"></livewire:form-tps>

    </section>
@endsection
