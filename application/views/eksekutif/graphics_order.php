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
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                
                               
                            </select>
                        </div>
                    </div>

                    <figure class="highcharts-figure">
                        <div id="grafik_order"></div>
                            
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


<!-- total status order darah per bulan -->
<?php foreach($orderJan as $totalorderJan); ?>
<?php foreach($orderFeb as $totalorderFeb); ?>
<?php foreach($orderMar as $totalorderMar); ?>
<?php foreach($orderApr as $totalorderApr); ?>
<?php foreach($orderMei as $totalorderMei); ?>
<?php foreach($orderJun as $totalorderJun); ?>
<?php foreach($orderJul as $totalorderJul); ?>
<?php foreach($orderAgt as $totalorderAgt); ?>
<?php foreach($orderSep as $totalorderSep); ?>
<?php foreach($orderOkt as $totalorderOkt); ?>
<?php foreach($orderNov as $totalorderNov); ?>
<?php foreach($orderDsb as $totalorderDsb); ?>

<!-- data drilldown status penerimaan -->
<?php foreach($Jan1 as $totalJan1); ?>
<?php foreach($Jan2 as $totalJan2); ?>
<?php foreach($Jan3 as $totalJan3); ?>
<?php foreach($Feb1 as $totalFeb1); ?>
<?php foreach($Feb2 as $totalFeb2); ?>
<?php foreach($Feb3 as $totalFeb3); ?>
<?php foreach($Mar1 as $totalMar1); ?>
<?php foreach($Mar2 as $totalMar2); ?>
<?php foreach($Mar3 as $totalMar3); ?>
<?php foreach($Apr1 as $totalApr1); ?>
<?php foreach($Apr2 as $totalApr2); ?>
<?php foreach($Apr3 as $totalApr3); ?>
<?php foreach($Mei1 as $totalMei1); ?>
<?php foreach($Mei2 as $totalMei2); ?>
<?php foreach($Mei3 as $totalMei3); ?>
<?php foreach($Jun1 as $totalJun1); ?>
<?php foreach($Jun2 as $totalJun2); ?>
<?php foreach($Jun3 as $totalJun3); ?>
<?php foreach($Jul1 as $totalJul1); ?>
<?php foreach($Jul2 as $totalJul2); ?>
<?php foreach($Jul3 as $totalJul3); ?>
<?php foreach($Agt1 as $totalAgt1); ?>
<?php foreach($Agt2 as $totalAgt2); ?>
<?php foreach($Agt3 as $totalAgt3); ?>
<?php foreach($Sep1 as $totalSep1); ?>
<?php foreach($Sep2 as $totalSep2); ?>
<?php foreach($Sep3 as $totalSep3); ?>
<?php foreach($Okt1 as $totalOkt1); ?>
<?php foreach($Okt2 as $totalOkt2); ?>
<?php foreach($Okt3 as $totalOkt3); ?>
<?php foreach($Nov1 as $totalNov1); ?>
<?php foreach($Nov2 as $totalNov2); ?>
<?php foreach($Nov3 as $totalNov3); ?>
<?php foreach($Dsb1 as $totalDsb1); ?>
<?php foreach($Dsb2 as $totalDsb2); ?>
<?php foreach($Dsb3 as $totalDsb3); ?>



<script>
// Create the chart
Highcharts.chart('grafik_order', {
    chart: {
        type: 'column'
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
            text: 'Total (Package)'
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
                format: '{point.y:1f} order'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}</b>  total<br/>'
    },

   series: [
         {
            name: "Bulan",
            colorByPoint: true,
            data: [
                {
                    name: "Januari",
                    y: <?php echo $totalorderJan->orderJan;?>,
                    drilldown: "Januari"
                },
                {
                    name: "Februari",
                    y: <?php echo $totalorderFeb->orderFeb;?>,
                    drilldown: "Februari"
                },
                {
                    name: "Maret",
                    y: <?php echo $totalorderMar->orderMar;?>,
                    drilldown: "Maret"
                },
                {
                    name: "April",
                    y: <?php echo $totalorderApr->orderApr;?>,
                    drilldown: "April"
                },
                {
                    name: "Mei",
                    y: <?php echo $totalorderMei->orderMei;?>,
                    drilldown: "Mei"
                },
                {
                    name: "Juni",
                    y: <?php echo $totalorderJun->orderJun;?>,
                    drilldown: "Juni"
                },
               {
                    name: "Juli",
                    y: <?php echo $totalorderJul->orderJul;?>,
                    drilldown: "Juli"
                },
                {
                    name: "Agustus",
                    y: <?php echo $totalorderAgt->orderAgt;?>,
                    drilldown: "Agustus"
                },
                {
                    name: "September",
                    y: <?php echo $totalorderSep->orderSep;?>,
                    drilldown: "September"
                },
                {
                    name: "Oktober",
                    y: <?php echo $totalorderOkt->orderOkt;?>,
                    drilldown: "Oktober"
                },
                {
                    name: "November",
                    y: <?php echo $totalorderNov->orderNov;?>,
                    drilldown: "November"
                },
                {
                    name: "Desember",
                    y: <?php echo $totalorderDsb->orderDsb;?>,
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
                        "Proses",
                         <?php echo $totalJan1->Jan1;?>,
                    ],
                    [
                        "Diterima",
                        <?php echo $totalJan2->Jan2;?>,
                    ],
                    [
                        "Dibatalkan",
                     <?php echo $totalJan3->Jan3;?>,
                    ],
            
                ]
            },
            {
                name: "Februari",
                id: "Februari",
                data: [
                    [
                        "Proses",
                       <?php echo $totalFeb1->Feb1;?>,
                    ],
                    [
                        "Diterima",
                        <?php echo $totalFeb2->Feb2;?>,
                    ],
                    [
                        "Dibatalkan",
                      <?php echo $totalFeb3->Feb3;?>,
                    ],
                ]
            },
            {
                name: "Maret",
                id: "Maret",
                data: [
                    [
                        "Proses",
                        <?php echo $totalMar1->Mar1;?>,
                    ],
                    [
                        "Diterima",
                         <?php echo $totalMar2->Mar2;?>,
                    ],
                    [
                        "Dibatalkan",
                      <?php echo $totalMar3->Mar3;?>,
                    ],
                ]
            },
            {
                name: "April",
                id: "April",
                data: [
                   [
                        "Proses",
                        <?php echo $totalApr1->Apr1;?>,
                    ],
                    [
                        "Diterima",
                        <?php echo $totalApr2->Apr2;?>,
                    ],
                    [
                        "Dibatalkan",
                      <?php echo $totalApr3->Apr3;?>,
                    ],
                ]
            },
            {
                name: "Mei",
                id: "Mei",
                data: [
                   [
                        "Proses",
                        <?php echo $totalMei1->Mei1;?>,
                    ],
                    [
                        "Diterima",
                        <?php echo $totalMei2->Mei2;?>,
                    ],
                    [
                        "Dibatalkan",
                      <?php echo $totalMei3->Mei3;?>,,
                    ],
                ]
            },
            {
                name: "Juni",
                id: "Juni",
                data: [
                   [
                        "Proses",
                        <?php echo $totalJun1->Jun1;?>,
                    ],
                    [
                        "Diterima",
                        <?php echo $totalJun2->Jun2;?>,
                    ],
                    [
                        "Dibatalkan",
                     <?php echo $totalJun3->Jun3;?>,
                    ],
                ]
            },
             {
                name: "Juli",
                id: "Juli",
                data: [
                [
                        "Proses",
                        <?php echo $totalJul1->Jul1;?>,
                    ],
                    [
                        "Diterima",
                        <?php echo $totalJul2->Jul2;?>,
                    ],
                    [
                        "Dibatalkan",
                      <?php echo $totalJul3->Jul3;?>,
                    ],
                ]
            },
             {
                name: "Agustus",
                id: "Agustus",
                data: [
                   [
                        "Proses",
                         <?php echo $totalAgt1->Agt1;?>,
                    ],
                    [
                        "Diterima",
                        <?php echo $totalAgt2->Agt2;?>,
                    ],
                    [
                        "Dibatalkan",
                      <?php echo $totalAgt3->Agt3;?>,
                    ],
                ]
            },
             {
                name: "September",
                id: "September",
                data: [
                 [
                        "Proses",
                        <?php echo $totalSep1->Sep1;?>,
                    ],
                    [
                        "Diterima",
                        <?php echo $totalSep2->Sep2;?>,
                    ],
                    [
                        "Dibatalkan",
                        <?php echo $totalSep3->Sep3;?>,
                    ],
                ]
            },
             {
                name: "Oktober",
                id: "Oktober",
                data: [
                 [
                        "Proses",
                        <?php echo $totalOkt1->Okt1;?>,
                    ],
                    [
                        "Diterima",
                         <?php echo $totalOkt2->Okt2;?>,
                    ],
                    [
                        "Dibatalkan",
                     <?php echo $totalOkt3->Okt3;?>,
                    ],
                ]
            },
             {
                name: "November",
                id: "November",
                data: [
                   [
                        "Proses",
                        <?php echo $totalNov1->Nov1;?>
                    ],
                    [
                        "Diterima",
                        <?php echo $totalNov2->Nov2;?>
                    ],
                    [
                        "Dibatalkan",
                      <?php echo $totalNov3->Nov3;?>
                    ],
                ]
            },
             {
                name: "Desember",
                id: "Desember",
                data:[
                   [
                          "Proses",
                       <?php echo $totalDsb1->Dsb1;?>,
                    ],
                    [
                        "Diterima",
                         <?php echo $totalDsb2->Dsb2;?>,
                    ],
                    [
                        "Dibatalkan",
                      <?php echo $totalDsb3->Dsb3;?>,
                    ],
                ]
            }
        ]
    }
});
</script>