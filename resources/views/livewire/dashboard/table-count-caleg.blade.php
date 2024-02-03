<td scope="col" style="text-align: center;" class="px-6 py-3">
    @foreach ($total as $item)
        @if ($item->suara)
            {{ $item->suara }}
        @else
            0
        @endif
    @endforeach
</td>
