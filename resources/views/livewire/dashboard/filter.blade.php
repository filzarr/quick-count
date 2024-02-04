<section class="filter z-20 ">
    <div class="col-span-4 flex justify-end">
        <button class=" underline text-blue-500" wire:click="resetSelect">reset</button>
    </div>
    <select id="countries" wire:model="idkota"  wire:change="kirimfilter('kota')"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="0" selected>Pilih Kota/Kabupaten</option>
        @foreach ($kota as $item)
            <option value="{{ $item->id }}">{{ $item->Kota }}</option>
        @endforeach
    </select>

    <select id="kecamatan" wire:model="idkecamatan"  {{ $idkota < 1 ? 'disabled' : '' }} wire:change="kirimfilter('kecamatan')"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih Kecamatan</option>
        @foreach ($kecamatan as $item)
            <option value="{{ $item->id }}">{{ $item->kecamatan }}</option>
        @endforeach
    </select>
    <select id="desa" wire:model="iddesa"  {{ $idkecamatan < 1 || $idkota < 1 ? 'disabled' : '' }} wire:change="kirimfilter('desa')"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Pilih Desa/Kelurahan</option>
        @foreach ($desa as $item)
            <option value="{{ $item->id }}">{{ $item->desa }}</option>
        @endforeach
    </select>
</section>

