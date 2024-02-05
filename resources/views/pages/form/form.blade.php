@extends('layout.form')
@section('content')
    <section class="final-form-container">
        <div class="flex justify-between items-center">
            <a href="/form/{{ $request->kota }}/{{ $request->kecamatan }}">
                <iconify-icon icon="iconoir:arrow-left-circle" class="text-4xl"></iconify-icon>
            </a>
            <div class="">
                <h3 class="header-content-form">Kabupaten/Kota {{ $kota->Kota }}</h3>
                <h3 class="header-content-form">Kecamatan {{ $kecamatan->kecamatan }}</h3>
                <h3 class="header-content-form">Desa/Kelurahan {{ $data->desa }}</h3>
                <h3 class="header-content-form">{{ $tps->nomortps }}</h3>

            </div>
        </div>
        <livewire:form-caleg tps="{{ $tps->id }}"></livewire:form-caleg>
    </section>
    <style>

    </style>
@endsection

