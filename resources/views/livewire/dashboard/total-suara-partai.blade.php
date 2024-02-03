<th scope="col" colspan="100%" id="" rowspan="2" class="px-6 py-3">
    Partai&nbsp;:&nbsp;{{ $this->partai }}
    <br>
    Suara&nbsp;:&nbsp;<input style="background-color: transparent;font-size:12px;padding:0;border:0;"  class="total-suara-partai" onchange="tes()" type="text" disabled value="{{ $totalpartai->suara +$totalpartaicaleg->suara }}"></input>
</th>