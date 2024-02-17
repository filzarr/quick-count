<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <table style="word-wrap:break-word;">
        <thead>



            <tr>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:500" colspan="6">Rekap Data Input DPR RI Sumut Dapil 3</th>
                

            </tr>
            <tr>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:500">No.</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:500">TPS</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:500">Desa / Kelurahan
                </th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:500">Kecamatan</th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:500">Kabupaten / Kota
                </th>
                <th style="word-wrap:break-word;word-wrap:break-word;text-align:center; font-weight:500">Waktu Input
                </th>

            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{ $loop->iteration }}.
                    </td>

                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{ $item->nomortps }}
                    </td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{ $item->desa }}
                    </td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{ $item->kecamatan }}
                    </td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{ $item->Kota }}
                    </td>
                    <td style="word-wrap:break-word;word-wrap:break-word;text-align:center;">
                        {{ $item->created_at }} WIB
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
