<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($data as $partai)
        <table style="word-wrap:break-word;">
            <thead>
                @php
                    $a = count($partai->calegs[0]->lokasi);
                @endphp
                <tr>
                    <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:700"
                        colspan="{{$a+1}}">
                        Data Rekapitulasi Suara DPR RI 2024 Dapil Sumut 3
                    </th>
                </tr>
                @if ($namakota)
                    <tr>
                        <th style="word-wrap:break-word;word-wrap:break-word;text-align:start; font-weight:700">
                            Kota :
                        </th>
                        <th style="word-wrap:break-word;word-wrap:break-word;text-align:start;">
                            {{$namakota->Kota}}
                        </th>

                    </tr>
                @endif
                @if ($namakecamatan)
                    <tr>
                        <th style="word-wrap:break-word;word-wrap:break-word;text-align:start; font-weight:700">
                            Kecamatan :
                        </th>
                        <th style="word-wrap:break-word;word-wrap:break-word;text-align:start">
                            {{$namakecamatan->kecamatan}}
                        </th>

                    </tr>
                @endif
                @if ($namadesa)
                    <tr>
                        <th style="word-wrap:break-word;word-wrap:break-word;text-align:start; font-weight:700">
                            Kecamatan :
                        </th>
                        <th style="word-wrap:break-word;word-wrap:break-word;text-align:start">
                            {{$namadesa->desa}}
                        </th>

                    </tr>
                @endif

                <tr>
                    <th style="word-wrap:break-word;word-wrap:break-word;text-align:start; font-weight:500">Nama Calon
                        Legistlatif</th>
                    @foreach ($partai->calegs[0]->lokasi as $lokasi)
                        <th style="word-wrap:break-word;word-wrap:break-word;text-align:center;font-weight:500">
                            {{ $lokasi->lokasi }}
                        </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($partai->calegs as $caleg)
                    <tr>
                        <td style="word-wrap:break-word;word-wrap:break-word;text-align:start;">{{ $caleg->namacaleg }}
                        </td>
                        @foreach ($caleg->lokasi as $lokasi)
                            <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                                {{ $lokasi->suara }}
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endforeach
</body>

</html>
