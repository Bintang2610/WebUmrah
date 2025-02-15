import ApexCharts from 'apexcharts';

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".chart-container").forEach(chartDiv => {
        let chartType = chartDiv.dataset.type;
        if (chartType === "line") {
            var options = {
                chart: {
                    type: 'line',
                    height: 300
                },
                series: [{
                    name: 'JH Data',
                    data: [5, 15, 25, 35]
                }],
                xaxis: {
                    categories: ['X', 'Y', 'Z', 'W']
                }
            };

            var chart = new ApexCharts(chartDiv, options);
            chart.render();
        }
    });
});
