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
                    <div id="grafik_stok"></div>
                    

                    <p class="highcharts-description"></p>
                </figure>      
              <!-- content end is here -->
        </div>
    </div>
</div>
</div>

<!-- SELECT SUM(total) AS total FROM `blood_order` WHERE MONTH(date) = '4' -->

<script src="assets/highcharts/highcharts.js"></script>
<script src="assets/highcharts/data.js"></script>
<script src="assets/highcharts/drilldown.js"></script>
<script src="assets/highcharts/exporting.js"></script>
<script src="assets/highcharts/export-data.js"></script>
<script src="assets/highcharts/accessibility.js"></script>

<!-- total stok darah golongan darah -->
<?php foreach($A as $golA); ?>
<?php foreach($B as $golB); ?>
<?php foreach($O as $golO); ?>
<?php foreach($AB as $golAB); ?>
<!-- detail drill down tipe darah -->
<?php foreach($tipeA1 as $A1); ?>
<?php foreach($tipeA2 as $A2); ?>
<?php foreach($tipeA3 as $A3); ?>
<?php foreach($tipeB1 as $B1); ?>
<?php foreach($tipeB2 as $B2); ?>
<?php foreach($tipeB3 as $B3); ?>
<?php foreach($tipeO1 as $O1); ?>
<?php foreach($tipeO2 as $O2); ?>
<?php foreach($tipeO3 as $O3); ?>
<?php foreach($tipeAB1 as $AB1); ?>
<?php foreach($tipeAB2 as $AB2); ?>
<?php foreach($tipeAB3 as $AB3); ?>
<script>
// Create the chart
Highcharts.chart('grafik_stok', {
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
            text: 'Total (Package)'
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
                format: '{point.y:1f} pack'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}</b>  total<br/>'
    },

   series: [
        {
            name: "Stok Darah",
            colorByPoint: true,
            data: [
                 {
                    name: "Gol A",
                    y: <?php echo $golA->A;?>,
                    drilldown: "Gol A"
                },
                {
                    name: "Gol B",
                    y: <?php echo $golB->B;?>,
                    drilldown: "Gol B"
                },
                {
                    name: "Gol O",
                    y: <?php echo $golO->O;?>,
                    drilldown: "Gol O"
                },
                {
                    name: "Gol AB",
                    y: <?php echo $golAB->AB;?>,
                    drilldown: "Gol AB"
                }
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Gol A",
                id: "Gol A",
                data: [
                   [
                        "PRC(PackedRedCell)",
                       <?php echo $A1->tipeA1;?>
                    ],
                    [
                        "WB(WholeBlood)",
                         <?php echo $A2->tipeA2;?>
                    ],
                    [
                        "TC(ThrombocyteConcent)",
                      <?php echo $A3->tipeA3;?>
                    ],
            
                ]
            },
            {
                name: "Gol B",
                id: "Gol B",
                data: [
                   [
                        "PRC(PackedRedCell)",
                       <?php echo $B1->tipeB1;?>
                    ],
                    [
                        "WB(WholeBlood)",
                         <?php echo $B2->tipeB2;?>
                    ],
                    [
                        "TC(ThrombocyteConcent)",
                      <?php echo $B3->tipeB3;?>
                    ],
            
                ]
            },
             {
                name: "Gol O",
                id: "Gol O",
                data: [
                   [
                        "PRC(PackedRedCell)",
                       <?php echo $O1->tipeO1;?>
                    ],
                    [
                        "WB(WholeBlood)",
                         <?php echo $O2->tipeO2;?>
                    ],
                    [
                        "TC(ThrombocyteConcent)",
                      <?php echo $O3->tipeO3;?>
                    ],
            
                ]
            },
            {
                name: "Gol AB",
                id: "Gol AB",
                data: [
                   [
                        "PRC(PackedRedCell)",
                       <?php echo $AB1->tipeAB1;?>
                    ],
                    [
                        "WB(WholeBlood)",
                       <?php echo $AB2->tipeAB2;?>
                    ],
                    [
                        "TC(ThrombocyteConcent)",
                     <?php echo $AB3->tipeAB3;?>
                    ],
                ]
            },
           
        ]
    }
});
</script>