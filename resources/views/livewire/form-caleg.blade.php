<div>
    <form wire:submit.prevent="submit" class="final-form-content">

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
        <div class=""><button class="btn-submit">Submit</button></div>
    </form>

</div>
