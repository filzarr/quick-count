<div>
    <form wire:submit.prevent="submit" class="final-form-content" enctype="multipart/form-data">
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

                <input type="file" wire:model="lampiran1"
                    class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="small_size" type="file">
                @error('lampiran1')
                    <span class=" text-sm  text-red-500">*{{ $message }}</span>
                @enderror
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 1 PNG, JPG or Webp
                    (MAX. 5Mb).</p>
            </div>


            <div class=""><button class="btn-submit">Submit</button></div>
    </form>

</div>
