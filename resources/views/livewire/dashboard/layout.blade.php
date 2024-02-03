<section class="container">
    <section class="container__wrapper">
        <livewire:dashboard.filter></livewire:dashboard.filter>

        <section class="rekapitulasi">
        
            <livewire:dashboard.diagram></livewire:dashboard.diagram>
            
            <header class="rekapitulasi__header">
                <h3>REKAPITULASI HASIL PEMILU LEGISLATIF DPR RI 2024</h3>
            </header>
            @foreach ($data as $item)
                <livewire:dashboard.table-partai :wire:key="$item->id" category_id='{{$this->idcategory}}'  category='{{$this->kat}}' partai="{{ $item->partai }}"
                    ide="{{ $item->ide }}"></livewire:dashboard.table-partai>
            @endforeach
        </section>
    </section>
</section>