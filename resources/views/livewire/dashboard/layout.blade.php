<section class="container">
    <section class="container__wrapper">
        <livewire:dashboard.filter></livewire:dashboard.filter>

        <section class="rekapitulasi">


            <livewire:dashboard.diagram></livewire:dashboard.diagram>

            <header class="rekapitulasi__header mt-5">
                <h3>REKAPITULASI HASIL PEMILU LEGISLATIF DPR RI 2024</h3>
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
                <?php
                $i = 0;
                ?>
                @foreach ($this->data as $partai)
                    <section class="rekapitulasi__calon mt-5 lg:mt-20">
                        <table class="  w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" colspan="100%" id="" rowspan="2" class="  px-6 py-3">
                                        Partai&nbsp;:&nbsp;{{ $partai->partai }}
                                        <br>
                                        Suara&nbsp;:&nbsp;<input
                                            style="background-color: transparent;font-size:12px;padding:0;border:0;"
                                            class="total-suara-partai" type="text" disabled></input>
                                        <input style="" class="hidden suara-partai" onchange="myFunction()"
                                            type="integer" value="{{ $partai->suarapartai }}"></input>
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <div class="relative table-count overflow-x-scroll ">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs  text-gray-700 uppercase  dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 pt-8 pb-3 text-xs lg:text-sm">
                                            Calon Legistlatif
                                        </th>
                                        @foreach ($partai->calegs[0]->lokasi as $lokasi)
                                            <th class="px-6 pt-8 pb-3 text-xs lg:text-sm" style="text-align: center;"
                                                wire:click="openfile({{ $lokasi->tps_id }}, '{{ $lokasi->lokasi }}')">
                                                {{ $lokasi->lokasi }}
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $j = 0;
                                    ?>
                                    @foreach ($partai->calegs as $caleg)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td scope="row"
                                                class="px-6 py-4 font-normal text-xs lg:text-base nama-caleg text-gray-900 whitespace-nowrap dark:text-white">
                                                {{ $caleg->namacaleg }}</td>
                                            @foreach ($caleg->lokasi as $lokasi)
                                                @if ($this->kat == 'desa')
                                                    <td scope="col" style="text-align: center;"
                                                        class="suara-caleg-{{ $j }} text-xs lg:text-base px-6 py-3 suara-{{ $i }}">
                                                        {{ $lokasi->suara }}
                                                    </td>
                                                @else
                                                    <td scope="col" style="text-align: center;"
                                                        class="suara-caleg-{{ $j }}  text-xs lg:text-base text-start px-6 py-3 suara-{{ $i }}">
                                                        {{ $lokasi->suara }}
                                                    </td>
                                                @endif
                                            @endforeach
                                        </tr>
                                        <?php
                                        $j++;
                                        ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <?php
                    $i++;
                    ?>
                @endforeach
            </div>
            @if ($this->show)
                @if (is_null($this->datainput))
                    <header class="rekapitulasi__header mt-5">
                        <h3>Data Tidak Ada</h3>
                    </header>
                @else
                    <header class="rekapitulasi__header mt-5">
                        <h3>{{ $this->tps }}</h3>
                    </header>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-3 lg:gap-10  ">
                        <header class="lg:col-span-2">
                            <h3 class="header-content-form text-left">Data Penginput</h3>
                        </header>
                        <div>
                            <label for="first_name"
                                class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Nama:</label>
                            <input type="text" id="first_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan Nama Anda" disabled value="{{ $this->datainput->nama }}">

                        </div>
                        <div class="">
                            <label for="phone-input"
                                class="block mb-2 text-xs font-medium text-gray-900 dark:text-white">Nomor
                                HP/WA:</label>
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                                        <path
                                            d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                                    </svg>
                                </div>
                                <input type="text" id="phone-input" value="{{ $this->datainput->noHp }}"
                                    aria-describedby="helper-text-explanation"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="08**-****-****" disabled>

                            </div>

                        </div>
                    </div>
                    <table class="table-content mt-5">

                        <tbody class="table-content-body">


                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3 border-t-2 border-collapse text-md"
                                    colspan="100%" style="text-align: left">A. Data Pemilih
                                </td>
                            </tr>
                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3 font-normal  border-b-2" colspan="5"
                                    width="80%" style="text-align: left">Jumlah pemilih dalam Daftar Pemilih Tetap
                                    (DPT)
                                    :
                                </td>
                                <td class="table-content-body__item" colspan="1">
                                    <div class="table-input">
                                        <input type="number"value="{{ $this->pemilih->suara }}" class=" focus:ring-0"
                                            class="border-transparent  focus:ring-0" disabled>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3 border-b-2 border-t-2 border-collapse text-md"
                                    colspan="100%" style="text-align: left">B. Pengguna Hak Pilih
                                </td>
                            </tr>
                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3  font-normal" colspan="5" width="80%"
                                    style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Tetap (DPT)
                                    :
                                </td>
                                <td class="table-content-body__item" colspan="1">
                                    <div class="table-input">
                                        <input type="number" class=" focus:ring-0"value="{{ $this->dpt->suara }}"
                                            class="border-transparent  focus:ring-0" disabled>
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3 font-normal  " colspan="5" width="80%"
                                    style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Tambahan
                                    (DPTb)
                                    : </td>
                                <td class="table-content-body__item" colspan="1">
                                    <div class="table-input">
                                        <input type="number" class=" focus:ring-0" disabled
                                            value="{{ $this->dptb->suara }}"
                                            class="border-transparent  focus:ring-0">
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3  font-normal" colspan="5" width="80%"
                                    style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Khusus
                                    (DPK) :
                                </td>
                                <td class="table-content-body__item" colspan="1">
                                    <div class="table-input">
                                        <input type="number" class=" focus:ring-0" disabled
                                            value="{{ $this->dpk->suara }}" class="border-transparent  focus:ring-0">
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-content-body-row border-b-2  border-t-2  border-black/10">
                                <td width="100%" class="table-foot-item text-xs lg:text-base ">Jumlah pengguna hak
                                    pilih
                                    (DPT + DPTb + DPK)</td>
                                <td class="table-foot-item" width="100%" colspan="100%"
                                    style="text-align: center">
                                    {{ $this->dpk->suara + $this->dptb->suara + $this->dpt->suara }}</td>

                            </tr>
                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3 border-b-2 border-t-2 border-collapse text-md"
                                    colspan="100%" style="text-align: left">Data Suara Sah dan Tidak Sah
                                </td>
                            </tr>
                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3 font-normal" colspan="5" width="80%"
                                    style="text-align: left">
                                    Jumlah Suara Sah :</td>
                                <td class="table-content-body__item" colspan="1">
                                    <div class="table-input">
                                        <input type="number" disabled value="{{ $this->suarasah->suara }}"
                                            class=" focus:ring-0" class="border-transparent  focus:ring-0">
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-content-body-row">
                                <td class="table-content-body__item pl-3 font-normal  " colspan="5" width="80%"
                                    style="text-align: left">
                                    Jumlah Suara Tidak Sah :</td>
                                <td class="table-content-body__item" colspan="1">
                                    <div class="table-input">
                                        <input type="number" disabled value="{{ $this->suaratidaksah->suara }}"
                                            class=" focus:ring-0" class="border-transparent  focus:ring-0">
                                    </div>
                                </td>
                            </tr>
                            <tr class="table-content-body-row border-b-2  border-t-2  border-black/10">
                                <td width="100%" class="table-foot-item text-xs lg:text-base ">Jumlah seluruh suara
                                    sah
                                    + suara tidak sah : </td>
                                <td class="table-foot-item" width="100%" colspan="100%"
                                    style="text-align: center">
                                    {{ $this->suaratidaksah->suara + $this->suarasah->suara }}</td>

                            </tr>
                        </tbody>

                    </table>
                    <header class="rekapitulasi__header mt-5">
                        <h3>{{ $this->tps }}</h3>
                    </header>
                    <div class="grid grid-cols-1 gap-10 mt-5">
                        @foreach ($this->lampiran as $item)
                            <a href="{{ url('/storage/lampiran/' . $item->file) }}" target="_blank"><img
                                    src="{{ url('/storage/lampiran/' . $item->file) }}" alt=""></a>
                        @endforeach
                    </div>
                @endif
            @else
            @endif

        </section>
    </section>
</section>
<style>
    .table-input input {
        border-bottom: 0;
    }
</style>
