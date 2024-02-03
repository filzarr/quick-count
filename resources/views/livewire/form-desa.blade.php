<div class="content-form">
    @foreach ($data as $item)
        <livewire:button-form text="{{$item->desa}}" link="/form/{{$kota}}/{{$kecamatan}}/{{$item->slug}}"></livewire:button-form>
    @endforeach
</div>