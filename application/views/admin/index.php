<?php
    $data_pengumuman = [];
    $data_surat_masuk = [];
    $data_surat_keluar = [];
    for($i=1; $i < count($pengumuman); $i++){
        array_push($data_pengumuman, $pengumuman[$i]);
    }
    for($i=1; $i < count($surat_masuk); $i++){
        array_push($data_surat_masuk, $surat_masuk[$i]);
    }
    for($i=1; $i < count($surat_keluar); $i++){
        array_push($data_surat_keluar, $surat_keluar[$i]);
    }
    $pengumuman = implode(", ", $data_pengumuman);
    $surat_masuk = implode(", ", $data_surat_masuk);
    $surat_keluar = implode(", ", $data_surat_keluar);
?>

<!-- container -->
<div class="container-fluid">

    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1"><?= $title ?></h2>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <!-- row opened -->
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Pengumuman</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div id="pengumuman" class="sales-bar mt-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Surat Masuk</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div id="surat_masuk" class="sales-bar mt-4"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-header bg-transparent pd-b-0 pd-t-20 bd-b-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Surat Keluar</h4>
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div id="surat_keluar" class="sales-bar mt-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- row closed -->
<!-- JQuery min js -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!--Internal  index js -->
<script src="<?= base_url() ?>assets/js/index.js"></script>
<script>
$(document).ready(function() {

    var optionsBar = {
        chart: {
            height: 249,
            type: 'bar',
            toolbar: {
                show: false,
            },
            fontFamily: 'Nunito, sans-serif',
            // dropShadow: {
            //   enabled: true,
            //   top: 1,
            //   left: 1,
            //   blur: 2,
            //   opacity: 0.2,
            // }
        },
        colors: ["#036fe7", '#f93a5a', '#f7a556'],
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                },
                columnWidth: '42%',
                endingShape: 'rounded',
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            endingShape: 'rounded',
            colors: ['transparent'],
        },
        responsive: [{
            breakpoint: 576,
            options: {
                stroke: {
                    show: true,
                    width: 1,
                    endingShape: 'rounded',
                    colors: ['transparent'],
                },
            },


        }],
        series: [ {
            name: 'Pengumuman',
            data: [<?= $pengumuman ?>]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
        },
        fill: {
            opacity: 1
        },
        legend: {
            show: false,
            floating: true,
            position: 'top',
            horizontalAlign: 'left',


        },

        tooltip: {
            // y: {
            //     formatter: function(val) {
            //         return "$ " + val + " thousands"
            //     }
            // }
        }
    }
    new ApexCharts(document.querySelector('#pengumuman'), optionsBar).render();

    var optionsBar = {
        chart: {
            height: 249,
            type: 'bar',
            toolbar: {
                show: false,
            },
            fontFamily: 'Nunito, sans-serif',
            // dropShadow: {
            //   enabled: true,
            //   top: 1,
            //   left: 1,
            //   blur: 2,
            //   opacity: 0.2,
            // }
        },
        colors: ['#f93a5a'],
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                },
                columnWidth: '42%',
                endingShape: 'rounded',
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            endingShape: 'rounded',
            colors: ['transparent'],
        },
        responsive: [{
            breakpoint: 576,
            options: {
                stroke: {
                    show: true,
                    width: 1,
                    endingShape: 'rounded',
                    colors: ['transparent'],
                },
            },


        }],
        series: [ {
            name: 'Surat Masuk',
            data: [<?= $surat_masuk ?>]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
        },
        fill: {
            opacity: 1
        },
        legend: {
            show: false,
            floating: true,
            position: 'top',
            horizontalAlign: 'left',


        },

        tooltip: {
            // y: {
            //     formatter: function(val) {
            //         return "$ " + val + " thousands"
            //     }
            // }
        }
    }
    new ApexCharts(document.querySelector('#surat_masuk'), optionsBar).render();

    var optionsBar = {
        chart: {
            height: 249,
            type: 'bar',
            toolbar: {
                show: false,
            },
            fontFamily: 'Nunito, sans-serif',
            // dropShadow: {
            //   enabled: true,
            //   top: 1,
            //   left: 1,
            //   blur: 2,
            //   opacity: 0.2,
            // }
        },
        colors: ['#f7a556'],
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: false
                },
                columnWidth: '42%',
                endingShape: 'rounded',
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            show: true,
            width: 2,
            endingShape: 'rounded',
            colors: ['transparent'],
        },
        responsive: [{
            breakpoint: 576,
            options: {
                stroke: {
                    show: true,
                    width: 1,
                    endingShape: 'rounded',
                    colors: ['transparent'],
                },
            },


        }],
        series: [ {
            name: 'Surat Keluar',
            data: [<?= $surat_keluar ?>]
        }],
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
        },
        fill: {
            opacity: 1
        },
        legend: {
            show: false,
            floating: true,
            position: 'top',
            horizontalAlign: 'left',


        },

        tooltip: {
            // y: {
            //     formatter: function(val) {
            //         return "$ " + val + " thousands"
            //     }
            // }
        }
    }
    new ApexCharts(document.querySelector('#surat_keluar'), optionsBar).render();

    


})
</script>