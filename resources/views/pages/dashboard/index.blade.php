@extends('layout.main')
@section('content')
    <livewire:dashboard.layout></livewire:dashboard.layout>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ttl = document.querySelectorAll(".total-suara-partai")
        const ctx = document.getElementById('rekapitulasi__chart').getContext('2d');
        var datas = [];
        var datanamacaleg = [];
        var screenWidth = window.innerWidth;
        var totalsuarapartai = document.querySelectorAll('.total-suara-partai');
        var suarapartai = document.querySelectorAll('.suara-partai');
        var namacaleg = document.querySelectorAll('.nama-caleg');
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

        for (let i = 0; i < namacaleg.length; i++) {
            var value = namacaleg[i].innerText || namacaleg.textContent;
            datanamacaleg[i] = value;
        }
        for (let i = 0; i < 10; i++) {
            var classcaleg = '.suara-caleg-';
            var classall = classcaleg.concat(i);
            var a = document.querySelectorAll(classall);
            var total = 0;
            for (let j = 0; j < a.length; j++) {
                var value = a[j].textContent || a[j].innerText;
                total = total + parseInt(value);
            }
            datas[i] = total;
        }
        if (screenWidth < 900) {
            var b = new Chart(ctx, {
                type: 'bar',
                data: {

                    labels: datanamacaleg,
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
                options: {
                    maintainAspectRatio: false, // Disable aspect ratio to make the chart responsive
                    scales: {
                        x: {
                            ticks: {
                                fontSize: 5,
                                display: false
                            }
                        },

                        y: {
                            ticks: {
                                fontSize: 10,
                                beginAtZero: true
                            }
                        }
                    },


                }
            });
        } else {
            var b = new Chart(ctx, {
                type: 'bar',
                data: {

                    labels: datanamacaleg,
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
        }

        window.addEventListener('contentChanged', event => {
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
            var newData = [];

            for (let i = 0; i < 10; i++) {
                var classcaleg = '.suara-caleg-';
                var classall = classcaleg.concat(i);
                var a = document.querySelectorAll(classall);
                var total = 0;
                for (let j = 0; j < a.length; j++) {
                    var value = a[j].textContent || a[j].innerText;
                    total = total + parseInt(value);
                }
                newData[i] = total;
            }

            // Pastikan objek Chart.js telah didefinisikan dan dapat diakses
            if (typeof b !== 'undefined') {
                // Perbarui data di Chart.js
                b.data.datasets[0].data = newData;
                b.options.plugins.legend.display = window.innerWidth > 768;
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
