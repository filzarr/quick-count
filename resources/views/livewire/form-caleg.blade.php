<div>
    <form wire:submit.prevent="submit" class="final-form-content">
        <table class="table-content">

            <tbody class="table-content-body">


                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 border-t-2 border-collapse text-md" colspan="100%"
                        style="text-align: left">A. Data Pemilih
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 font-normal  border-b-2" colspan="5" width="80%"
                        style="text-align: left">Jumlah pemilih dalam Daftar Pemilih Tetap (DPT) :
                    </td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <button type="button" wire:click="$set('pemilih', {{ (int) $this->pemilih + 1 }} )">
                                <iconify-icon icon="gala:add"></iconify-icon>
                            </button>
                            <input type="number"value="{{ $this->pemilih }}" class=" focus:ring-0" wire:model="pemilih"
                                class="border-transparent  focus:ring-0">
                            @error('pemilih')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror

                            <button type="button"
                                wire:click="$set('pemilih', {{ $this->pemilih > 0 ? (int) $this->pemilih - 1 : 0 }} )">
                                <iconify-icon icon="bi:dash-circle"></iconify-icon>
                            </button>


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
                        style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Tetap (DPT) :
                    </td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <button type="button" wire:click="$set('dpt', {{ (int) $this->dpt + 1 }} )">
                                <iconify-icon icon="gala:add"></iconify-icon>
                            </button>
                            <input type="number" class=" focus:ring-0" value="{{ $this->dpt }}" wire:model="dpt"
                                class="border-transparent  focus:ring-0">
                            @error('dpt')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror

                            <button type="button"
                                wire:click="$set('dpt', {{ $this->dpt > 0 ? (int) $this->dpt - 1 : 0 }} )">
                                <iconify-icon icon="bi:dash-circle"></iconify-icon>
                            </button>

                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 font-normal " colspan="5" width="80%"
                        style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Tambahan (DPTb) : </td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <button type="button" wire:click="$set('dptb', {{ (int) $this->dptb + 1 }} )">
                                <iconify-icon icon="gala:add"></iconify-icon>
                            </button>
                            <input type="number" class=" focus:ring-0" value="{{ $this->dptb }}" wire:model="dptb"
                                class="border-transparent  focus:ring-0">
                            @error('dptb')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <button type="button"
                                wire:click="$set('dptb', {{ $this->dptb > 0 ? (int) $this->dptb - 1 : 0 }} )">
                                <iconify-icon icon="bi:dash-circle"></iconify-icon>
                            </button>


                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 font-normal " colspan="5" width="80%"
                        style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Khusus (DPK) :
                    </td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <button type="button" wire:click="$set('dpk', {{ (int) $this->dpk + 1 }} )">
                                <iconify-icon icon="gala:add"></iconify-icon>
                            </button>
                            <input type="number"value="0" class=" focus:ring-0" value="{{ $this->dpk }}"
                                wire:model="dpk" class="border-transparent  focus:ring-0">
                            @error('dpk')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <button type="button"
                                wire:click="$set('dpk', {{ $this->dpk > 0 ? (int) $this->dpk - 1 : 0 }} )">
                                <iconify-icon icon="bi:dash-circle"></iconify-icon>
                            </button>


                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row border-b-2  border-t-2  border-black/10">
                    <td width="100%" class="table-foot-item text-[10px] lg:text-base">Jumlah pengguna hak pilih (DPT +
                        DPTb + DPK)</td>
                    <td class="table-foot-item" width="100%" colspan="100%" style="text-align: center">
                        {{ $this->totalpenggunahakpilih }}</td>

                </tr>

            </tbody>

        </table>
        <select id="countries" wire:model="partai" wire:change="changepartai"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option disabled>Pilih Partai</option>
            @foreach ($datapartai as $item)
                <option value="{{ $item->id }}" selected disabled>Partai {{ $item->partai }}</option>
            @endforeach
        </select>
        <div class="input-count-partai">
            <p>Suara Partai</p>
            <div class="input-count-partai__input">
                <button type="button" wire:click="increasepartai">
                    <iconify-icon icon="gala:add"></iconify-icon>
                </button>
                <input type="number" value="{{ $countpartai }}" wire:model="countpartai" class="  focus:ring-0">
                @error('countpartai')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                @if ($this->countpartai > 0)
                    <button type="button" wire:click="decreasepartai">
                        <iconify-icon icon="bi:dash-circle"></iconify-icon>
                    </button>
                @else
                    <button type="button" wire:click="decreasepartai" disabled>
                        <iconify-icon icon="bi:dash-circle"></iconify-icon>
                    </button>
                @endif
            </div>
        </div>
        <table class="table-content">
            <thead class="table-content-header">
                <tr class="table-content-header-row">
                    <th class="table-content-header__item" width="10%">No.</th>
                    <th class="table-content-header__item" style="text-align: left">Nama Calon</th>
                    <th class="table-content-header__item" width="18%">Suara</th>
                </tr>
            </thead>
            <tbody class="table-content-body">
                <?php
                $i = 0;
                ?>
                @foreach ($caleg as $item)
                    <tr class="table-content-body-row" wire:key="caleg-{{ $i }}">
                        <td class="table-content-body__item" style="text-align: center">{{ $loop->iteration }}</td>
                        <td class="table-content-body__item" style="text-align: left">{{ $item->namacaleg }}</td>
                        <td class="table-content-body__item">
                            <div class="table-input">
                                <button type="button"
                                    wire:click="$set('calegs.{{ $i }}', {{ (int) $calegs[$i] + 1 }} )">
                                    <iconify-icon icon="gala:add"></iconify-icon>
                                </button>
                                <input type="number" wire:model="calegs.{{ $i }}" value="0"
                                    class=" focus:ring-0" class="border-transparent  focus:ring-0">
                                @error('calegs.' . $i)
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror

                                <button type="button"
                                    wire:click="$set('calegs.{{ $i }}', {{ $calegs[$i] > 0 ? (int) $calegs[$i] - 1 : 0 }} )">
                                    <iconify-icon icon="bi:dash-circle"></iconify-icon>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @php
                        $this->inputcalegs[$i] = $item->id;
                    @endphp
                    <?php
                    $i++;
                    ?>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2" class="table-foot-item text-[10px] lg:text-base">Total Suara (suara partai +
                        suara caleg)</td>
                    <td class="table-foot-item">{{ $countall }}</td>
                </tr>
            </tfoot>
        </table>
        <table class="table-content">

            <tbody class="table-content-body">

                <tr class="table-content-body-row">
                    <td class="table-content-body__item  pl-3 border-b-2 border-t-2 border-collapse text-md"
                        colspan="100%" style="text-align: left">Data Suara Sah dan Tidak Sah
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 font-normal" colspan="5" width="80%"
                        style="text-align: left">
                        Jumlah Suara Sah :</td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <button type="button" wire:click="$set('suarasah', {{ (int) $this->suarasah + 1 }} )">
                                <iconify-icon icon="gala:add"></iconify-icon>
                            </button>
                            <input type="number" value="{{ $this->suarasah }}" wire:model="suarasah"
                                class=" focus:ring-0" class="border-transparent  focus:ring-0">
                            @error('suarasah')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <button type="button"
                                wire:click="$set('suarasah', {{ $this->suarasah > 0 ? (int) $this->suarasah - 1 : 0 }} )">
                                <iconify-icon icon="bi:dash-circle"></iconify-icon>
                            </button>

                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 font-normal " colspan="5" width="80%"
                        style="text-align: left">
                        Jumlah Suara Tidak Sah :</td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <button type="button"
                                wire:click="$set('suaratidaksah', {{ (int) $this->suaratidaksah + 1 }} )">
                                <iconify-icon icon="gala:add"></iconify-icon>
                            </button>
                            <input type="number" value="{{ $this->suaratidaksah }}" wire:model="suaratidaksah"
                                class=" focus:ring-0" class="border-transparent  focus:ring-0">
                            @error('suaratidaksah')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <button type="button"
                                wire:click="$set('suaratidaksah', {{ $this->suaratidaksah > 0 ? (int) $this->suaratidaksah - 1 : 0 }} )">
                                <iconify-icon icon="bi:dash-circle"></iconify-icon>
                            </button>

                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row border-b-2  border-t-2  border-black/10">
                    <td width="100%" class="table-foot-item text-[10px] lg:text-base ">Jumlah seluruh suara sah +
                        suara
                        tidak sah : </td>
                    <td class="table-foot-item" value="{{ $this->totalsuarasahtidak }}"
                        wire:model="totalsuarasahtidak" width="100%" colspan="100%" style="text-align: center">
                        {{ $this->totalsuarasahtidak }}</td>

                </tr>
            </tbody>

        </table>
        <div class="grid grid-cols-1 gap-3 pt-10">
            <header class="  text-center">
                <p class="text-lg font-semibold">Upload Foto Formulir Model C. Hasil-DPR Partai Golkar
                </p>
            </header>
            <div class=" grid gap-0">

                <input type="file" wire:model.lazy="lampiran1"
                    class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="small_size" ></input>
                @error('lampiran1')
                    <span class=" text-sm  text-red-500">*{{ $message }}</span>
                @enderror
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 1 PNG, JPG or Webp
                    (MAX. 5Mb).</p>
            </div>


            <div class="">
                <button wire:loading wire:target="lampiran1"
                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    <svg aria-hidden="true" class="inline w-4 h-4 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                    </svg>
                    <span class="sr-only">Loading...</span>
                </button>
                <button wire:loading.remove wire:target="lampiran1" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                    class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    
                    Submit
                </button>
                <div id="popup-modal" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="popup-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <div class="mb-5">
                                    <h3 class=" text-lg font-normal text-gray-500 dark:text-gray-400">Apakah Anda Yakin
                                        ingin mensubmit data?</h3>
                                    <span class="mb-5 text-xs font-normal text-gray-500 dark:text-gray-400">periksa
                                        kembali data anda sebelum melakukan submit</span>
                                </div>
                                <button data-modal-hide="popup-modal" type="submit"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2"
                                    wire:loading.attr="disabled">
                                    <span wire:loading.remove>Ya, Saya Yakin!</span>
                                    <span wire:loading>
                                        <!-- Tambahkan ikon atau pesan loading di sini -->
                                    </span>
                                </button>
                                <button data-modal-hide="popup-modal" type="button"
                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>

</div>
