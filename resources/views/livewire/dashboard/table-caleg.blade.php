<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

    @foreach ($data as $item)
        <livewire:dashboard.table-count-caleg lokasi="{{$item->id}}" catgorylokasi="{{$this->categorytotal}}"></livewire:dashboard.table-count-caleg>
    @endforeach
    
</tr>
