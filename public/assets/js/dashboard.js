
let ctx1 = document.getElementById("line-chart").getContext("2d");

new Chart(ctx1, {
    type: "line",
    data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
                label: "Level 1",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 2,
                pointBackgroundColor: "#cb0c9f",
                borderColor: "#cb0c9f",
                borderWidth: 3,
                data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                maxBarThickness: 6
            },
            {
                label: "Level 2",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 2,
                pointBackgroundColor: "#3A416F",
                borderColor: "#3A416F",
                borderWidth: 3,
                data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
                maxBarThickness: 6
            },
            {
                label: "Level 3",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 2,
                pointBackgroundColor: "#17c1e8",
                borderColor: "#17c1e8",
                borderWidth: 3,
                data: [40, 80, 70, 90, 30, 90, 140, 130, 200],
                maxBarThickness: 6
            },
            {
                label: "Level 4",
                tension: 0.4,
                borderWidth: 0,
                pointRadius: 2,
                pointBackgroundColor: "linear-gradient(310deg,#89660b,#a77a23)",
                borderColor: "linear-gradient(310deg,#89660b,#a77a23)",
                borderWidth: 3,
                data: [30, 10, 70, 20, 50, 90, 80, 0, 100],
                maxBarThickness: 6
            },
        ],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: false,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    padding: 10,
                    color: '#b2b9bf',
                    font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: true,
                    drawOnChartArea: true,
                    drawTicks: true,
                    borderDash: [5, 5]
                },
                ticks: {
                    display: true,
                    color: '#b2b9bf',
                    padding: 10,
                    font: {
                        size: 11,
                        family: "Open Sans",
                        style: 'normal',
                        lineHeight: 2
                    },
                }
            },
        },
    },
});



var ctx2 = document.getElementById("chart-doughnut").getContext("2d");

// Doughnut chart
new Chart(ctx2, {
    type: "doughnut",
    data: {
        labels: ['Level 1', 'Level 2', 'Level 3', 'Level 4'],
        datasets: [{
            label: "Projects",
            weight: 9,
            cutout: 60,
            tension: 0.9,
            pointRadius: 2,
            borderWidth: 2,
            backgroundColor: ['#2152ff', '#3A416F', '#f53939', '#a8b8d8'],
            data: [15, 20, 22, 70],
            fill: false
        }],
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                display: false,
            }
        },
        interaction: {
            intersect: false,
            mode: 'index',
        },
        scales: {
            y: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                },
                ticks: {
                    display: false
                }
            },
            x: {
                grid: {
                    drawBorder: false,
                    display: false,
                    drawOnChartArea: false,
                    drawTicks: false,
                },
                ticks: {
                    display: false,
                }
            },
        },
    },
});

let buttonCommon = {
    exportOptions: {
        format: {
            body: function ( data, row, column, node ) {
                return column === 5 ?
                    data.replace( /[$,]/g, '' ) :
                    data;
            }
        }
    }
};
const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
    searchable: true,
    fixedHeight: true,
    buttons: [
        $.extend( true, {}, buttonCommon, {
            extend: 'copyHtml5'
        } ),
        $.extend( true, {}, buttonCommon, {
            extend: 'excelHtml5'
        } ),
        $.extend( true, {}, buttonCommon, {
            extend: 'pdfHtml5'
        } )
    ]
});