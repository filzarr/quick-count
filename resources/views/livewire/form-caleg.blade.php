<div>
    <form wire:submit.prevent="submit" class="final-form-content">
        <table class="table-content">
 
            <tbody class="table-content-body">


                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 border-t-2 border-collapse text-md" colspan="100%"
                        style="text-align: left" >A. Data Pemilih
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3  border-b-2" colspan="5" width="80%"
                        style="text-align: left" >Jumlah pemilih dalam Daftar Pemilih Tetap (DPT) : 
                    </td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <iconify-icon icon="gala:add"></iconify-icon>
                            <input type="number"value="{{$this->pemilih}}" class=" focus:ring-0" wire:model="pemilih"
                                class="border-transparent  focus:ring-0">
                            <iconify-icon icon="bi:dash-circle"></iconify-icon>
                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 border-b-2 border-t-2 border-collapse text-md" colspan="100%"
                        style="text-align: left">B. Pengguna Hak Pilih
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3  " colspan="5" width="80%"
                        style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Tetap (DPT) :
                    </td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <iconify-icon icon="gala:add"></iconify-icon>
                            <input type="number" class=" focus:ring-0" value="{{$this->dpt}}" wire:model="dpt"
                                class="border-transparent  focus:ring-0">
                            <iconify-icon icon="bi:dash-circle"></iconify-icon>
                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3  " colspan="5" width="80%"
                        style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Tambahan (DPTb) : </td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <iconify-icon icon="gala:add"></iconify-icon>
                            <input type="number" class=" focus:ring-0" value="{{$this->dptb}}" wire:model="dptb"
                                class="border-transparent  focus:ring-0">
                            <iconify-icon icon="bi:dash-circle"></iconify-icon>
                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3  " colspan="5" width="80%"
                        style="text-align: left">Jumlah pengguna hak pilih dalam Daftar Pemilih Khusus (DPK) :  
                    </td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <iconify-icon icon="gala:add"></iconify-icon>
                            <input type="number"value="0" class=" focus:ring-0" value="{{$this->dpk}}" wire:model="dpk"
                                class="border-transparent  focus:ring-0">
                            <iconify-icon icon="bi:dash-circle"></iconify-icon>
                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row border-b-2  border-t-2  border-black/10">
                    <td width="100%" class="table-foot-item text-xs lg:text-base ">Jumlah pengguna hak pilih (DPT + DPTb + DPK)</td>
                    <td class="table-foot-item"  width="100%" colspan="100%" style="text-align: center">{{$this->totalpenggunahakpilih}}</td>

                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 border-b-2 border-t-2 border-collapse text-md" colspan="100%"
                        style="text-align: left">Data Suara Sah dan Tidak Sah
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3 " colspan="5" width="80%" style="text-align: left">
                        Jumlah Suara Sah :</td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <iconify-icon icon="gala:add"></iconify-icon>
                            <input type="number" value="{{$this->suarasah}}" wire:model="suarasah" class=" focus:ring-0"
                                class="border-transparent  focus:ring-0">
                            <iconify-icon icon="bi:dash-circle"></iconify-icon>
                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row">
                    <td class="table-content-body__item pl-3  " colspan="5" width="80%" style="text-align: left">
                        Jumlah Suara Tidak Sah :</td>
                    <td class="table-content-body__item" colspan="1">
                        <div class="table-input">
                            <iconify-icon icon="gala:add"></iconify-icon>
                            <input type="number" value="{{$this->suaratidaksah}}" wire:model="suaratidaksah"  class=" focus:ring-0"
                                class="border-transparent  focus:ring-0">
                            <iconify-icon icon="bi:dash-circle"></iconify-icon>
                        </div>
                    </td>
                </tr>
                <tr class="table-content-body-row border-b-2  border-t-2  border-black/10">
                    <td width="100%" class="table-foot-item text-xs lg:text-base ">Jumlah seluruh suara sah + suara tidak sah : </td>
                    <td class="table-foot-item" value="{{$this->totalsuarasahtidak}}" wire:model="totalsuarasahtidak" width="100%" colspan="100%" style="text-align: center">{{$this->totalsuarasahtidak}}</td>

                </tr>
            </tbody>

        </table>
        <select id="countries" wire:model="partai" wire:change="changepartai"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected value="1" disabled>Pilih Partai</option>
            @foreach ($datapartai as $item)
                <option value="{{ $item->id }}">Partai {{ $item->partai }}</option>
            @endforeach
        </select>
        <div class="input-count-partai">
            <p>Suara Partai</p>
            <div class="input-count-partai__input">
                <button wire:click="increasepartai">
                    <iconify-icon icon="gala:add"></iconify-icon>
                </button>
                <input type="number" value="{{ $countpartai }}" wire:model="countpartai" class="  focus:ring-0">
                @if ($this->countpartai > 0)
                    <button wire:click="decreasepartai">
                        <iconify-icon icon="bi:dash-circle"></iconify-icon>
                    </button>
                @else
                    <button wire:click="decreasepartai" disabled>
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
                                <iconify-icon icon="gala:add"></iconify-icon>
                                <input type="number" wire:model="calegs.{{ $i }}" value="0"
                                    class=" focus:ring-0" class="border-transparent  focus:ring-0">
                                <iconify-icon icon="bi:dash-circle"></iconify-icon>
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
                    <td colspan="2" class="table-foot-item">Total Suara</td>
                    <td class="table-foot-item">{{ $countall }}</td>
                </tr>
            </tfoot>
        </table>
        <div class="grid grid-cols-1 gap-3 pt-10">
            <header class="  text-center">
                <p class="text-lg font-semibold">Upload Foto Formulir Model C. Hasil Salinan-DPR
                </p>
            </header>
            <div class=" grid gap-0">
                
                <input type="file" wire:model="lampiran1" class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 1 PNG, JPG or Webp (MAX. 5Mb).</p>
            </div>
            <div class=" grid gap-0">
                
                <input type="file" wire:model="lampiran2" class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 2 PNG, JPG or Webp (MAX. 5Mb).</p>
            </div>
            <div class=" grid gap-0">
                
                <input type="file" wire:model="lampiran3" class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 3 PNG, JPG or Webp (MAX. 5Mb).</p>
            </div>
            <div class=" grid gap-0">
                
                <input type="file" wire:model="lampiran4" class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 4 PNG, JPG or Webp (MAX. 5Mb).</p>
            </div>
            <div class=" grid gap-0">
                
                <input type="file" wire:model="lampiran5" class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 5 PNG, JPG or Webp (MAX. 5Mb).</p>
            </div>
            <div class=" grid gap-0">
                
                <input type="file" wire:model="lampiran6" class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 6 PNG, JPG or Webp (MAX. 5Mb).</p>
            </div>
            <div class=" grid gap-0">
                
                <input type="file" wire:model="lampiran7" class="block w-full mb-2 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                <p class="text-sm text-gray-500 dark:text-gray-300" id="file_input_help">Lampiran 7 PNG, JPG or Webp (MAX. 5Mb).</p>
            </div>

        <div class=""><button class="btn-submit">Submit</button></div>
    </form>

</div>
