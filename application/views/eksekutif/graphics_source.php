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


<!-- total source -->
<?php foreach($PMI_total as $PMI); ?>
<?php foreach($Hospital_total as $Hospital); ?>
<?php foreach($Donor_total as $Donor); ?>

<!-- total source PMI -->
<?php foreach($PMI_A as $dataPMI_A); ?>
<?php foreach($PMI_B as $dataPMI_B); ?>
<?php foreach($PMI_O as $dataPMI_O); ?>
<?php foreach($PMI_AB as $dataPMI_AB); ?>

<!-- total source Hospital -->
<?php foreach($Hospital_A as $dataHospital_A); ?>
<?php foreach($Hospital_B as $dataHospital_B); ?>
<?php foreach($Hospital_O as $dataHospital_O); ?>
<?php foreach($Hospital_AB as $dataHospital_AB); ?>

<!-- total source Donor -->
<?php foreach($Donor_A as $dataDonor_A); ?>
<?php foreach($Donor_B as $dataDonor_B); ?>
<?php foreach($Donor_O as $dataDonor_O); ?>
<?php foreach($Donor_AB as $dataDonor_AB); ?>




<!-- detail drill down tipe darah -->

<script>
// Create the chart
Highcharts.chart('grafik_stok', {
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
            name: "Source",
            colorByPoint: true,
            data: [
                 {
                    name: "PMI",
                    y: <?php echo $PMI->PMI_total;?>,
                    drilldown: "PMI"
                },
                {
                    name: "Hospital",
                    y: <?php echo $Hospital->Hospital_total;?>,
                    drilldown: "Hospital"
                },
                {
                    name: "Donor",
                    y: <?php echo $Donor->Donor_total;?>,
                    drilldown: "Donor"
                },
               
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "PMI",
                id: "PMI",
                data: [
                   [
                        "Gol A",
                       <?php echo $dataPMI_A->PMI_A;?>,
                    ],
                    [
                        "Gol B",
                         <?php echo $dataPMI_B->PMI_B;?>,
                    ],
                    [
                        "Gol O",
                      <?php echo $dataPMI_O->PMI_O;?>,
                    ],
                    [
                        "Gol AB",
                      <?php echo $dataPMI_AB->PMI_AB;?>,
                    ],
            
                ]
            },
            {
                name: "Hospital",
                id: "Hospital",
                data: [
                   [
                        "Gol A",
                       <?php echo $dataHospital_A->Hospital_A;?>,
                    ],
                    [
                        "Gol B",
                         <?php echo $dataHospital_B->Hospital_B;?>,
                    ],
                    [
                        "Gol O",
                      <?php echo $dataHospital_O->Hospital_O;?>,
                    ],
                    [
                        "Gol AB",
                      <?php echo $dataHospital_AB->Hospital_AB;?>,
                    ],
                ]
            },
             {
                name: "Donor",
                id: "Donor",
                data: [
                   [
                        "Gol A",
                       <?php echo $dataDonor_A->Donor_A;?>,
                    ],
                    [
                        "Gol B",
                         <?php echo $dataDonor_B->Donor_B;?>,
                    ],
                    [
                        "Gol O",
                      <?php echo $dataDonor_O->Donor_O;?>,
                    ],
                    [
                        "Gol AB",
                      <?php echo $dataDonor_AB->Donor_AB;?>,
                    ],
            
                ]
            },
            
           
        ]
    }
});
</script>