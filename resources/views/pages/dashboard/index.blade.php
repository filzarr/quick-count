@extends('layout.main')
@section('content')
    <livewire:dashboard.layout></livewire:dashboard.layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ttl = document.querySelectorAll(".total-suara-partai")
        const ctx = document.getElementById('rekapitulasi__chart');
        var datas = [];
        var totalsuarapartai = document.querySelectorAll('.total-suara-partai');
        var suarapartai = document.querySelectorAll('.suara-partai');

        for (let i = 0; i < totalsuarapartai.length; i++) {
            var kelas = ".suara-";
            var classsuara = kelas.concat(i);
            var totalsuara = 0;
            var suaracaleg = document.querySelectorAll(classsuara);

            for (let j = 0; j < suaracaleg.length; j++) {
                var suaracalegdetail = suaracaleg[j].textContent || suaracaleg[j].innerText;
                totalsuara += parseInt(suaracalegdetail) || 0; // Pastikan nilai yang di-parse valid
            }
            // Tambahkan total suara ke nilai partai
            totalsuarapartai[i].value = parseInt(suarapartai[i].value) + totalsuara;
        }
        for (let index = 0; index < ttl.length; index++) {
            var a = ttl[index].value;
            datas[index] = a;
        }

        var b = new Chart(ctx, {
            type: 'bar',
            data: {

                labels: [
                    @foreach ($data as $item)
                        "{{ $item->partai }}",
                    @endforeach
                ],
                datasets: [{
                    label: "Jumlah Suara ",
                    data: datas,
                    backgroundColor: [
                        'rgb(0, 255, 0)',
                        'rgb(255, 0, 0)',
                        'rgb(205, 0, 0)',
                        'rgb(255, 255, 0)',
                        'rgb(39, 64, 139)',
                        'rgb(180, 35, 39)',
                        'rgb(252, 252, 0)',
                        'rgb(0, 0, 0)',
                        'rgb(43, 45, 140)',
                        'rgb(0, 128, 0)',
                        'rgb(231, 27, 37)',
                        'rgb(0, 0, 255)',
                        'rgb(255, 204, 41)',
                        'rgb(25, 25, 112)',
                        'rgb(0, 98, 61)',
                        'rgb(247, 25, 0)',
                    ],
                }]
            },

        });
        window.addEventListener('contentChanged', event => {
            console.log("aaaa");
            var newData = [];

            for (let i = 0; i < totalsuarapartai.length; i++) {
                var kelas = ".suara-";
                var classsuara = kelas.concat(i);
                var totalsuara = 0;
                var suaracaleg = document.querySelectorAll(classsuara);

                for (let j = 0; j < suaracaleg.length; j++) {
                    var suaracalegdetail = suaracaleg[j].textContent || suaracaleg[j].innerText;
                    totalsuara += parseInt(suaracalegdetail) || 0; // Pastikan nilai yang di-parse valid
                }

                // Tambahkan total suara ke nilai partai
                totalsuarapartai[i].value = parseInt(suarapartai[i].value) + totalsuara;

                // Tambahkan total suara ke array newData untuk Chart.js
                newData.push(totalsuara);
            }

            // Pastikan objek Chart.js telah didefinisikan dan dapat diakses
            if (typeof b !== 'undefined') {
                // Perbarui data di Chart.js
                b.data.datasets[0].data = newData;
                b.update();
            } else {
                console.error('Objek Chart.js tidak ditemukan.');
            }
        });
        document.addEventListener('livewire:load', function() {

        })

        // setInterval(() => {


        //     for (let index = 0; index < ttl.length; index++) {
        //         var a = ttl[index].value;
        //         datas[index] = a;
        //     }
        //     b.render();
        // }, 300);
    </script>
@endsection
