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

                <figure class="highcharts-figure">
                    <div id="grafik_yearly"></div>
                    <p class="highcharts-description">
                        <!-- A basic column chart compares rainfall values between four cities.
                        Tokyo has the overall highest amount of rainfall, followed by New York.
                        The chart is making use of the axis crosshair feature, to highlight
                        months as they are hovered over. -->
                    </p>
                </figure>
              <!-- content end is here -->

        </div>
    </div>
</div>
<!-- /.data-fluid -->

</div>
<!-- End of Main Content -->

<script src="assets/highcharts/highcharts.js"></script>
<script src="assets/highcharts/data.js"></script>
<script src="assets/highcharts/drilldown.js"></script>
<script src="assets/highcharts/exporting.js"></script>
<script src="assets/highcharts/export-data.js"></script>
<script src="assets/highcharts/accessibility.js"></script>


<!-- total data per tahun -->
<?php foreach($order_2018 as $data_2018); ?>
<?php foreach($order_2019 as $data_2019); ?>
<?php foreach($order_2020 as $data_2020); ?>

<!-- total data per bulan tahun 2018 -->
<?php foreach($orderJan18 as $dataJan2018); ?>
<?php foreach($orderFeb18 as $dataFeb2018); ?>
<?php foreach($orderMar18 as $dataMar2018); ?>
<?php foreach($orderApr18 as $dataApr2018); ?>
<?php foreach($orderMei18 as $dataMei2018); ?>
<?php foreach($orderJun18 as $dataJun2018); ?>
<?php foreach($orderJul18 as $dataJul2018); ?>
<?php foreach($orderAgt18 as $dataAgt2018); ?>
<?php foreach($orderSep18 as $dataSep2018); ?>
<?php foreach($orderOkt18 as $dataOkt2018); ?>
<?php foreach($orderNov18 as $dataNov2018); ?>
<?php foreach($orderDsb18 as $dataDsb2018); ?>

<!-- total data per bulan tahun 2019 -->
<?php foreach($orderJan19 as $dataJan2019); ?>
<?php foreach($orderFeb19 as $dataFeb2019); ?>
<?php foreach($orderMar19 as $dataMar2019); ?>
<?php foreach($orderApr19 as $dataApr2019); ?>
<?php foreach($orderMei19 as $dataMei2019); ?>
<?php foreach($orderJun19 as $dataJun2019); ?>
<?php foreach($orderJul19 as $dataJul2019); ?>
<?php foreach($orderAgt19 as $dataAgt2019); ?>
<?php foreach($orderSep19 as $dataSep2019); ?>
<?php foreach($orderOkt19 as $dataOkt2019); ?>
<?php foreach($orderNov19 as $dataNov2019); ?>
<?php foreach($orderDsb19 as $dataDsb2019); ?>

<!-- total data per bulan tahun 2020 -->
<?php foreach($orderJan20 as $dataJan2020); ?>
<?php foreach($orderFeb20 as $dataFeb2020); ?>
<?php foreach($orderMar20 as $dataMar2020); ?>
<?php foreach($orderApr20 as $dataApr2020); ?>
<?php foreach($orderMei20 as $dataMei2020); ?>
<?php foreach($orderJun20 as $dataJun2020); ?>
<?php foreach($orderJul20 as $dataJul2020); ?>
<?php foreach($orderAgt20 as $dataAgt2020); ?>
<?php foreach($orderSep20 as $dataSep2020); ?>
<?php foreach($orderOkt20 as $dataOkt2020); ?>
<?php foreach($orderNov20 as $dataNov2020); ?>
<?php foreach($orderDsb20 as $dataDsb2020); ?>

<script>
// Create the chart
Highcharts.chart('grafik_yearly', {
    chart: {
        type: 'line'
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
            text: 'Total (order)'
        }

    },
    legend: {
        enabled: true
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
            name: "Grafik Order Tahunan",
            colorByPoint: true,
            data: [
               
                {
                    name: "2018",
                    y: <?php echo $data_2018->order_2018;?>,
                    drilldown: "2018"
                },
                {
                    name: "2019",
                    y: <?php echo $data_2019->order_2019;?>,
                    drilldown: "2019"
                },
                {
                    name: "2020",
                    y: <?php echo $data_2020->order_2020;?>,
                    drilldown: "2020"
                },
                
            ]
        }
    ],
    drilldown: {
        series: [
          
            {
                name: "2018",
                id: "2018",
                 data: [
                    [
                        "Januari",
                         <?php echo $dataJan2018->orderJan18;?>,
                    ],
                    [
                        "Februari",
                        <?php echo $dataFeb2018->orderFeb18;?>,
                    ],
                    [
                        "Maret",
                     <?php echo $dataMar2018->orderMar18;?>,
                    ],
                    [
                        "April",
                        <?php echo $dataApr2018->orderApr18;?>,
                    ],
                    [
                        "Mei",
                        <?php echo $dataMei2018->orderMei18;?>,
                    ],
                    [
                        "Juni",
                     <?php echo $dataJun2018->orderJun18;?>,
                    ],
                    [
                        "Juli",
                         <?php echo $dataJul2018->orderJul18;?>,
                    ],
                    [
                        "Agustus",
                         <?php echo $dataAgt2018->orderAgt18;?>,
                    ],
                    [
                        "September",
                     <?php echo $dataSep2018->orderSep18;?>,
                    ],
                    [
                        "Oktober",
                         <?php echo $dataOkt2018->orderOkt18;?>,
                    ],
                    [
                        "November",
                       <?php echo $dataNov2018->orderNov18;?>,
                    ],
                    [
                        "Desember",
                      <?php echo $dataDsb2018->orderDsb18;?>
                    ],
                ]
            },
            {
                name: "2019",
                id: "2019",
                data: [
                    [
                        "Januari",
                         <?php echo $dataJan2019->orderJan19;?>,
                    ],
                    [
                        "Februari",
                        <?php echo $dataFeb2019->orderFeb19;?>,
                    ],
                    [
                        "Maret",
                     <?php echo $dataMar2019->orderMar19;?>,
                    ],
                    [
                        "April",
                        <?php echo $dataApr2019->orderApr19;?>,
                    ],
                    [
                        "Mei",
                        <?php echo $dataMei2019->orderMei19;?>,
                    ],
                    [
                        "Juni",
                     <?php echo $dataJun2019->orderJun19;?>,
                    ],
                    [
                        "Juli",
                         <?php echo $dataJul2019->orderJul19;?>,
                    ],
                    [
                        "Agustus",
                         <?php echo $dataAgt2019->orderAgt19;?>,
                    ],
                    [
                        "September",
                     <?php echo $dataSep2019->orderSep19;?>,
                    ],
                    [
                        "Oktober",
                         <?php echo $dataOkt2019->orderOkt19;?>,
                    ],
                    [
                        "November",
                       <?php echo $dataNov2019->orderNov19;?>,
                    ],
                    [
                        "Desember",
                      <?php echo $dataDsb2019->orderDsb19;?>
                    ],
                ]
            },
            {
                name: "2020",
                id: "2020",
                data: [
                    [
                        "Januari",
                         <?php echo $dataJan2020->orderJan20;?>,
                    ],
                    [
                        "Februari",
                        <?php echo $dataFeb2020->orderFeb20;?>,
                    ],
                    [
                        "Maret",
                     <?php echo $dataMar2020->orderMar20;?>,
                    ],
                    [
                        "April",
                        <?php echo $dataApr2020->orderApr20;?>,
                    ],
                    [
                        "Mei",
                        <?php echo $dataMei2020->orderMei20;?>,
                    ],
                    [
                        "Juni",
                     <?php echo $dataJun2020->orderJun20;?>,
                    ],
                    [
                        "Juli",
                         <?php echo $dataJul2020->orderJul20;?>,
                    ],
                    [
                        "Agustus",
                        <?php echo $dataAgt2020->orderAgt20;?>,
                    ],
                    [
                        "September",
                     <?php echo $dataSep2020->orderSep20;?>,
                    ],
                    [
                        "Oktober",
                         <?php echo $dataOkt2020->orderOkt20;?>,
                    ],
                    [
                        "November",
                       <?php echo $dataNov2020->orderNov20;?>,
                    ],
                    [
                        "Desember",
                     <?php echo $dataDsb2020->orderDsb20;?>
                    ],
                ]
            }
        ]
    }
});
</script>