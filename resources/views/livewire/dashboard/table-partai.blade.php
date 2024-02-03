<section class="rekapitulasi__calon mt-20">
    @foreach ($data as $item)
        <table class="  w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <livewire:dashboard.total-suara-partai  partai="{{$item->partai}}" idepartai="{{$item->partai_id}}" category="{{$this->category}}" category_id="{{$this->category_id}}"></livewire:dashboard.total-suara-partai>

                </tr>
            </thead>
        </table>

        <div class="relative table-count overflow-x-auto ">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs  text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 pt-8 pb-3">
                            Calon Legistlatif
                        </th>
                        @foreach ($datalokasi as $item)
                            <th scope="col" class="px-6 pt-8 pb-3">
                                {{ $item->nama }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($caleg as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row"
                                class="px-6 py-4 font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $item->nama }}</td>
                            @foreach ($datalokasi as $itemlokasi)
                                <livewire:dashboard.table-count-caleg lokasi="{{ $itemlokasi->id }}"
                                    categorylokasi="{{ $this->category_total }}" caleg_id="{{$item->angka}}"></livewire:dashboard.table-count-caleg>
                            @endforeach
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    @endforeach

</section>
