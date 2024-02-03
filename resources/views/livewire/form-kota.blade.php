<div class="content-form">
    @foreach ($data as $item)
        <livewire:button-form text="{{ $item->Kota }}" link="/form/{{ $item->slug }}"></livewire:button-form>
    @endforeach
</div>
