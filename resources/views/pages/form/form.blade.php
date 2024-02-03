@extends('layout.form')
@section('content')

    <section class="final-form-container">
        <div class="final-form-header">
            <iconify-icon icon="ph:arrow-circle-left-light"></iconify-icon>
            <h3 class="header-content-form">
                Kabupaten/Kota Tapanuli Utara
                <br>
                Kecamatan Sipahutar
                <br>
                Desa Aek Nauli I
                <br>
                TPS 01
            </h3>
        </div>
        <livewire:form-caleg tps="{{$tps->id}}"></livewire:form-caleg>
    </section>
    <style>

    </style>
@endsection
