<div class="content">
    <button class="btn" id="bulan">Bulan</button>
    <button class="btn" id="tahun">Tahun</button>
    <canvas id="myChart" width="400" height="190"></canvas>
</div>

<script>
$(document).ready(function() {
    var totalData;
    var title;
    var i;
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Surat Masuk', 'Surat Keluar', 'Pengumuman'],
            datasets: [{
                label: [],
                data: [],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
        }
    });



    $.ajax({
        url: "<?= base_url() ?>admin/count",
        type: "post",
        success: function(data) {
            totalData = JSON.parse(data);
            myChart.data.datasets[0].label.push("Total Data Bulan <?= date("F") ?> Tahun <?= date("Y") ?>");
            for (i in totalData) {
                myChart.data.datasets[0].data.push(totalData[i]);
            }
            // chart.update();
            myChart.update();
        }
    });
    $('#bulan').click(function() {
        totalData = undefined; // unset
        delete(totalData);
        $.ajax({
            url: "<?= base_url() ?>admin/count",
            type: "post",
            success: function(data) {
                totalData = JSON.parse(data);
                myChart.data.datasets[0].label.pop();
                for (i in totalData) {
                    myChart.data.datasets[0].data.pop();
                };

                myChart.update();

                myChart.data.datasets[0].label.push("Total Data Bulan <?= date("F") ?> Tahun <?= date("Y") ?>");
                for (i in totalData) {
                    myChart.data.datasets[0].data.push(totalData[i]);
                }
                // chart.update();
                myChart.update();
            }
        });
    });

    $('#tahun').click(function() {
        totalData = undefined; // unset
        delete(totalData);
        $.ajax({
            url: "<?= base_url() ?>admin/count_year",
            type: "post",
            success: function(data) {
                totalData = JSON.parse(data);
                myChart.data.datasets[0].label.pop();
                for (i in totalData) {
                    myChart.data.datasets[0].data.pop();

                };

                myChart.update();

                myChart.data.datasets[0].label.push("Total Data Tahun <?= date("Y") ?>");
                for (i in totalData) {
                    myChart.data.datasets[0].data.push(totalData[i]);
                };

                myChart.update();
            }
        });
    });

})
</script>