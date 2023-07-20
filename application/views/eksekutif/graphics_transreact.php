<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    
    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
             <!-- content start is here -->

                    <div class="form-group row">
                        <label for="gender" class="col-sm-1 col-form-label">Filter </label>
                        <div class="col-sm-2">
                            <select name="gender" id="gender" class="form-control">
                                <!-- <option value=""> Select Years </option> -->
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                
                                <option value="2018">2018</option>
                            </select>
                        </div>
                    </div>

                    <figure class="highcharts-figure">
                        <div id="grafik_tranfusion"></div>
                        <p class="highcharts-description">
                            <!-- Chart showing browser market shares. Clicking on individual columns
                            brings up more detailed data. This chart makes use of the drilldown
                            feature in Highcharts to easily switch between datasets. -->
                        </p>
                    </figure>

              <!-- content end is here -->

        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<script src="assets/highcharts/highcharts.js"></script>
<script src="assets/highcharts/data.js"></script>
<script src="assets/highcharts/drilldown.js"></script>
<script src="assets/highcharts/exporting.js"></script>
<script src="assets/highcharts/export-data.js"></script>
<script src="assets/highcharts/accessibility.js"></script>

 <!-- total tranfusi per bulan -->
<?php foreach($Jan as $totalJan); ?>
<?php foreach($Feb as $totalFeb); ?>
<?php foreach($Mar as $totalMar); ?>
<?php foreach($Apr as $totalApr); ?>
<?php foreach($Mei as $totalMei); ?>
<?php foreach($Jun as $totalJun); ?>
<?php foreach($Jul as $totalJul); ?>
<?php foreach($Agt as $totalAgt); ?>
<?php foreach($Sep as $totalSep); ?>
<?php foreach($Okt as $totalOkt); ?>
<?php foreach($Nov as $totalNov); ?>
<?php foreach($Dsb as $totalDsb); ?>

<!-- data drilldown hasil reaksi tranfusi -->
<?php foreach($Jan1 as $totalJan1); ?>
<?php foreach($Jan2 as $totalJan2); ?>
<?php foreach($Jan3 as $totalJan3); ?>
<?php foreach($Jan4 as $totalJan4); ?>
<?php foreach($Jan5 as $totalJan5); ?>
<?php foreach($Feb1 as $totalFeb1); ?>
<?php foreach($Feb2 as $totalFeb2); ?>
<?php foreach($Feb3 as $totalFeb3); ?>
<?php foreach($Feb4 as $totalFeb4); ?>
<?php foreach($Feb5 as $totalFeb5); ?>
<?php foreach($Mar1 as $totalMar1); ?>
<?php foreach($Mar2 as $totalMar2); ?>
<?php foreach($Mar3 as $totalMar3); ?>
<?php foreach($Mar4 as $totalMar4); ?>
<?php foreach($Mar5 as $totalMar5); ?>
<?php foreach($Apr1 as $totalApr1); ?>
<?php foreach($Apr2 as $totalApr2); ?>
<?php foreach($Apr3 as $totalApr3); ?>
<?php foreach($Apr4 as $totalApr4); ?>
<?php foreach($Apr5 as $totalApr5); ?>
<?php foreach($Mei1 as $totalMei1); ?>
<?php foreach($Mei2 as $totalMei2); ?>
<?php foreach($Mei3 as $totalMei3); ?>
<?php foreach($Mei4 as $totalMei4); ?>
<?php foreach($Mei5 as $totalMei5); ?>
<?php foreach($Jun1 as $totalJun1); ?>
<?php foreach($Jun2 as $totalJun2); ?>
<?php foreach($Jun3 as $totalJun3); ?>
<?php foreach($Jun4 as $totalJun4); ?>
<?php foreach($Jun5 as $totalJun5); ?>
<?php foreach($Jul1 as $totalJul1); ?>
<?php foreach($Jul2 as $totalJul2); ?>
<?php foreach($Jul3 as $totalJul3); ?>
<?php foreach($Jul4 as $totalJul4); ?>
<?php foreach($Jul5 as $totalJul5); ?>
<?php foreach($Agt1 as $totalAgt1); ?>
<?php foreach($Agt2 as $totalAgt2); ?>
<?php foreach($Agt3 as $totalAgt3); ?>
<?php foreach($Agt4 as $totalAgt4); ?>
<?php foreach($Agt5 as $totalAgt5); ?>
<?php foreach($Sep1 as $totalSep1); ?>
<?php foreach($Sep2 as $totalSep2); ?>
<?php foreach($Sep3 as $totalSep3); ?>
<?php foreach($Sep4 as $totalSep4); ?>
<?php foreach($Sep5 as $totalSep5); ?>
<?php foreach($Okt1 as $totalOkt1); ?>
<?php foreach($Okt2 as $totalOkt2); ?>
<?php foreach($Okt3 as $totalOkt3); ?>
<?php foreach($Okt4 as $totalOkt4); ?>
<?php foreach($Okt5 as $totalOkt5); ?>
<?php foreach($Nov1 as $totalNov1); ?>
<?php foreach($Nov2 as $totalNov2); ?>
<?php foreach($Nov3 as $totalNov3); ?>
<?php foreach($Nov4 as $totalNov4); ?>
<?php foreach($Nov5 as $totalNov5); ?>
<?php foreach($Dsb1 as $totalDsb1); ?>
<?php foreach($Dsb2 as $totalDsb2); ?>
<?php foreach($Dsb3 as $totalDsb3); ?>
<?php foreach($Dsb4 as $totalDsb4); ?>
<?php foreach($Dsb5 as $totalDsb5); ?>



<script>
// Create the chart
Highcharts.chart('grafik_tranfusion', {
    chart: {
        type: 'bar'
    },
    title: {
        text: '<?= $title; ?>'
    },
    subtitle: {
        text:  'source  :  RSI Bank Darah Surabaya'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total (orang)'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:1f} pasien'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}</b> total<br/>'
    },

    series: [
        {
            name: "Bulan",
            colorByPoint: true,
            data: [
                {
                    name: "Januari",
                    y: <?php echo $totalJan->Jan;?>,
                    drilldown: "Januari"
                },
                {
                    name: "Februari",
                    y: <?php echo $totalFeb->Feb;?>,
                    drilldown: "Februari"
                },
                {
                    name: "Maret",
                    y: <?php echo $totalMar->Mar;?>,
                    drilldown: "Maret"
                },
                {
                    name: "April",
                    y: <?php echo $totalApr->Apr;?>,
                    drilldown: "April"
                },
                {
                    name: "Mei",
                    y: <?php echo $totalMei->Mei;?>,
                    drilldown: "Mei"
                },
                {
                    name: "Juni",
                    y: <?php echo $totalJun->Jun;?>,
                    drilldown: "Juni"
                },
               {
                    name: "Juli",
                    y: <?php echo $totalJul->Jul;?>,
                    drilldown: "Juli"
                },
                {
                    name: "Agustus",
                    y: <?php echo $totalAgt->Agt;?>,
                    drilldown: "Agustus"
                },
                {
                    name: "September",
                    y: <?php echo $totalSep->Sep;?>,
                    drilldown: "September"
                },
                {
                    name: "Oktober",
                    y: <?php echo $totalOkt->Okt;?>,
                    drilldown: "Oktober"
                },
                {
                    name: "November",
                    y: <?php echo $totalNov->Nov;?>,
                    drilldown: "November"
                },
                {
                    name: "Desember",
                    y: <?php echo $totalDsb->Dsb;?>,
                    drilldown: "Desember"
                },
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Januari",
                id: "Januari",
                data: [
                    [
                        "low(hipotensi)",
                        <?php echo $totalJan1->Jan1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalJan2->Jan2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalJan3->Jan3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalJan4->Jan4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalJan5->Jan5;?>,
                    ],
                ]
            },
            {
                name: "Februari",
                id: "Februari",
                data: [
                    [
                        "low(hipotensi)",
                        <?php echo $totalFeb1->Feb1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalFeb2->Feb2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalFeb3->Feb3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalFeb4->Feb4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalFeb5->Feb5;?>,
                    ],
                ]
            },
            {
                name: "Maret",
                id: "Maret",
                data: [
                    [
                        "low(hipotensi)",
                        <?php echo $totalMar1->Mar1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalMar2->Mar2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalMar3->Mar3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalMar4->Mar4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalMar5->Mar5;?>,
                    ],
                ]
            },
            {
                name: "April",
                id: "April",
                data: [
                    [
                        "low(hipotensi)",
                        <?php echo $totalApr1->Apr1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalApr2->Apr2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalApr3->Apr3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalApr4->Apr4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalApr5->Apr5;?>,
                    ],
                ]
            },
            {
                name: "Mei",
                id: "Mei",
                data: [
                     [
                        "low(hipotensi)",
                        <?php echo $totalMei1->Mei1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalMei2->Mei2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalMei3->Mei3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalMei4->Mei4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalMei5->Mei5;?>,
                    ],
                ]
            },
            {
                name: "Juni",
                id: "Juni",
                data: [
                   [
                        "low(hipotensi)",
                        <?php echo $totalJun1->Jun1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalJun2->Jun2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalJun3->Jun3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalJun4->Jun4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalJun5->Jun5;?>,
                    ],
                ]
            },
             {
                name: "Juli",
                id: "Juli",
                data: [
                   [
                        "low(hipotensi)",
                        <?php echo $totalJul1->Jul1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalJul2->Jul2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalJul3->Jul3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalJul4->Jul4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalJul5->Jul5;?>,
                    ],
                ]
            },
             {
                name: "Agustus",
                id: "Agustus",
                data: [
                   [
                        "low(hipotensi)",
                        <?php echo $totalAgt1->Agt1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalAgt2->Agt2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalAgt3->Agt3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalAgt4->Agt4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalAgt5->Agt5;?>,
                    ],
                ]
            },
             {
                name: "September",
                id: "September",
                data: [
                   [
                        "low(hipotensi)",
                        <?php echo $totalSep1->Sep1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalSep2->Sep2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalSep3->Sep3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalSep4->Sep4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalSep5->Sep5;?>,
                    ],
                ]
            },
             {
                name: "Oktober",
                id: "Oktober",
                data: [
                   [
                        "low(hipotensi)",
                        <?php echo $totalOkt1->Okt1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalOkt2->Okt2;?>,
                    ],
                    [
                        "pra-hipertension",
                        <?php echo $totalOkt3->Okt3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalOkt4->Okt4;?>,
                    ],
                    [
                        "hipertension level 2",
                        <?php echo $totalOkt5->Okt5;?>,
                    ],
                ]
            },
             {
                name: "November",
                id: "November",
                data: [
                    [
                        "low(hipotensi)",
                        <?php echo $totalNov1->Nov1;?>,
                    ],
                    [
                        "normal",
                       <?php echo $totalNov2->Nov2;?>
                    ],
                    [
                        "pra-hipertension",
                       <?php echo $totalNov3->Nov3;?>
                    ],
                    [
                        "hipertension level 1",
                       <?php echo $totalNov4->Nov4;?>
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalNov5->Nov5;?>
                    ],
                ]
            },
                {
                name: "Desember",
                id: "Desember",
                data: [
                    [
                        "low(hipotensi)",
                        <?php echo $totalDsb1->Dsb1;?>,
                    ],
                    [
                        "normal",
                        <?php echo $totalDsb2->Dsb2;?>,
                    ],
                    [
                        "pra-hipertension",
                       <?php echo $totalDsb3->Dsb3;?>,
                    ],
                    [
                        "hipertension level 1",
                        <?php echo $totalDsb4->Dsb4;?>,
                    ],
                
                    [
                        "hipertension level 2",
                        <?php echo $totalDsb5->Dsb5;?>,
                    ],
                ]
            }
        ]
    }
});
</script>
