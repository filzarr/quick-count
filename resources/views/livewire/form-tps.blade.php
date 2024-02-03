<div class="content-form">
    @foreach ($data as $item)
        <livewire:button-form text="{{ $item->nomortps }}" link="/form/{{$kota}}/{{$kecamatan}}/{{$desa}}/{{ $item->slug }}"></livewire:button-form>
    @endforeach
</div>
