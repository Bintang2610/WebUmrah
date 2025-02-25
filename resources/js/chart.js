import ApexCharts from 'apexcharts';

document.addEventListener("DOMContentLoaded", function () {
    // Ambil semua elemen chart
    let chartElements = document.querySelectorAll(".chart");

    chartElements.forEach(chartElement => {
        let chartId = chartElement.id;
        let chartType = chartElement.dataset.type;
        let titleElement = document.getElementById(`title-${chartId}`);

        // Tentukan pesan berdasarkan tipe data
        let titles = {
            "datawl": "Data Peserta Wisata Luar Negeri",
            "datajh": "Data Peserta Jamaah Haji",
            "datawd": "Data Peserta Wisata Domestik",
            "dataju": "Data Peserta Jamaah Umrah"
        };

        // Set pesan jika ID ditemukan
        if (titleElement && titles[chartType]) {
            titleElement.innerText = titles[chartType];
        }

        // Data dummy untuk setiap tipe
        let dataSeries = {
            "datawl": [100, 200, 300, 400, 500],
            "datajh": [150, 250, 350, 450, 550],
            "datawd": [200, 300, 400, 500, 600],
            "dataju": [120, 220, 320, 420, 520]
        };

        // Konfigurasi chart
        let options = {
            chart: { type: 'bar', height: 350 },
            series: [{
                name: 'Jumlah Data',
                data: dataSeries[chartType] || []
            }],
            xaxis: { categories: ['2020', '2021', '2022', '2023', '2024'] }
        };

        // Render chart
        let chart = new ApexCharts(chartElement, options);
        chart.render();
    });
});
