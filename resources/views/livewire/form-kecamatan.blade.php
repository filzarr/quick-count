<div class="content-form">
    @foreach ($data as $item)
        <livewire:button-form text="{{$item->kecamatan}}" link="/form/{{$kota}}/{{$item->slug}}"></livewire:button-form>
    @endforeach
</div>