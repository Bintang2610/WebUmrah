import ApexCharts from 'apexcharts';

document.addEventListener("DOMContentLoaded", function () {
    var options = {
        chart: { type: 'bar', height: 350 },
        series: [{
            name: 'Jumlah Data',
            data: [100, 200, 300, 400, 500] // Ganti dengan data dari Laravel jika perlu
        }],
        xaxis: { categories: ['2020', '2021', '2022', '2023', '2024'] }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
});
