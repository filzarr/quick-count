<section class="container w-full">
    <section class="container__wrapper">
        <section class="filter z-20 ">
            <div class="col-span-4 flex justify-end">
                <button class=" underline text-blue-500" wire:click="resetSelect">reset</button>
            </div>
            <select id="countries" wire:model="kotaid"  wire:change="tes"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="0" selected>Pilih Kota/Kabupaten</option>
                @foreach ($this->kota as $item)
                    <option value="{{ $item->id }}">{{ $item->Kota }}</option>
                @endforeach
            </select>

            <select id="kecamatan" wire:model="kecamatanid" {{ $kotaid < 1 ? 'disabled' : '' }}  wire:change="tes"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Kecamatan</option>
                @if ($this->kecamatan)
                    @foreach ($this->kecamatan as $item)
                        <option value="{{ $item->id }}">{{ $item->kecamatan }}</option>
                    @endforeach
                @endif

            </select>
            <select id="desa" wire:model="desaid" {{ $kecamatanid < 1 || $kotaid < 1 ? 'disabled' : '' }}  wire:change="tes"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Desa/Kelurahan</option>
                @if ($this->desa)

                    @foreach ($this->desa as $item)
                        <option value="{{ $item->id }}">{{ $item->desa }}</option>
                    @endforeach
                @endif
            </select>
            <div class=" flex justify-end  items-center">
                <a href="/dashboard"><button
                        class=" font-semibold text-gray-800 hover:underline hover:text-blue-500">Rekap Suara</button></a>
            </div>
        </section>
        <div class="rekapitulasi">
            <header class="rekapitulasi__header mt-5">
                <h3>REKAPITULASI INPUT DATA TPS</h3>
            </header>
            <div wire:loading class="w-full h-full fixed top-0 left-0 bg-white opacity-75 z-50">
                <div class="flex justify-center items-center mt-[50vh]">
                    <div class="fas fa-circle-notch fa-spin fa-5x text-violet-600">
                        <div class="text-center">
                            <div role="status">
                                <svg aria-hidden="true"
                                    class="inline w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="currentColor" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentFill" />
                                </svg>
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="" wire:loading.remove>

                    <section class="rekapitulasi__calon mt-5 lg:mt-20">

                        <div class="relative table-count overflow-x-scroll ">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs  text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th  width="5%" class="p-1 text-center text-xs lg:text-sm">
                                            No.
                                        </th>

                                        <th class=" text-xs lg:text-sm" style="text-align: center;">
                                            Nomor TPS
                                        </th>
                                        <th class=" text-xs lg:text-sm" style="text-align: center;">
                                            Desa
                                        </th>
                                        <th class=" text-xs lg:text-sm" style="text-align: center;">
                                            Kecamatan
                                        </th>
                                        <th class=" text-xs lg:text-sm" style="text-align: center;">
                                            Kota
                                        </th>
                                        <th class=" text-xs lg:text-sm" style="text-align: center;">
                                            Waktu Input
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">{{$loop->iteration}}</td>
                                            <td class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">{{$item->nomortps}}</td>
                                            <td class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">{{$item->desa}}</td>
                                            <td class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">{{$item->kecamatan}}</td>
                                            <td class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">{{$item->Kota}}</td>
                                            <td class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">{{$item->created_at}} WIB</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <div class="flex justify-end mt-10 gap-10">{{ $data->links('pagination::tailwind') }}</div>
                        </div>
                    </section>

            </div>
        </div>



    </section>
</section>
<style>
    .table-input input {
        border-bottom: 0;
    }
</style>
