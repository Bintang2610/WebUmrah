import ApexCharts from 'apexcharts';

document.addEventListener("DOMContentLoaded", function () {
    const charts = [
        { id: "chart", type: "datawl", title: "Data Peserta Wisata Luar Negeri" },
        { id: "chart2", type: "datajh", title: "Data Peserta Jamaah Haji" },
        { id: "chart3", type: "datawd", title: "Data Peserta Wisata Domestik" },
        { id: "chart4", type: "dataju", title: "Data Peserta Jamaah Umrah" }
    ];

    charts.forEach(({ id, title }) => {
        // Ubah teks title sesuai ID chart
        document.getElementById(`title-${id}`).innerText = title;

        // Buat opsi chart
        let options = {
            chart: { type: 'bar', height: 350 },
            series: [{
                name: 'Jumlah Data',
                data: [100, 200, 300, 400, 500]
            }],
            xaxis: { categories: ['2020', '2021', '2022', '2023', '2024'] }
        };

        // Render chart jika elemen ditemukan
        let chartElement = document.querySelector(`#${id}`);
        if (chartElement) {
            let chart = new ApexCharts(chartElement, options);
            chart.render();
        }
    });
});
