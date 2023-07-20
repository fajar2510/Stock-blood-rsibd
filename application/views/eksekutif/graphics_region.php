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
                    <div id="grafik_region"></div>
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

<!-- total pasien per region -->
<?php foreach($s_pusat as $total_s_pusat); ?>
<?php foreach($s_timur as $total_s_timur); ?>
<?php foreach($s_barat as $total_s_barat); ?>
<?php foreach($s_utara as $total_s_utara); ?>
<?php foreach($s_selatan as $total_s_selatan); ?>
<?php foreach($other as $total_other); ?>

<!-- total pasien region Surabaya Pusat -->
<?php foreach($Tegalsari as $total_Tegalsari); ?>
<?php foreach($Simokerto as $total_Simokerto); ?>
<?php foreach($Genteng as $total_Genteng); ?>
<?php foreach($Bubutan as $total_Bubutan); ?>

<!-- total pasien region Surabaya Timur -->
<?php foreach($Gubeng as $total_Gubeng); ?>
<?php foreach($GunungAnyar as $total_GunungAnyar); ?>
<?php foreach($Sukolilo as $total_Sukolilo); ?>
<?php foreach($Tambaksari as $total_Tambaksari); ?>
<?php foreach($Mulyorejo as $total_Mulyorejo); ?>
<?php foreach($Rungkut as $total_Rungkut); ?>
<?php foreach($TenggilisMejoyo as $total_TenggilisMejoyo); ?>

<!-- total pasien region Surabaya Barat -->
<?php foreach($Benowo as $total_Benowo); ?>
<?php foreach($Pakal as $total_Pakal); ?>
<?php foreach($Asemrowo as $total_Asemrowo); ?>
<?php foreach($Sukomanunggal as $total_Sukomanunggal); ?>
<?php foreach($Tandes as $total_Tandes); ?>
<?php foreach($Sambikerep as $total_Sambikerep); ?>
<?php foreach($Lakarsantri as $total_Lakarsantri); ?>

<!-- total pasien region Surabaya Utara -->
<?php foreach($Bulak as $total_Bulak); ?>
<?php foreach($Kenjeran as $total_Kenjeran); ?>
<?php foreach($Semampir as $total_Semampir); ?>
<?php foreach($PabeanCantian as $total_PabeanCantian); ?>
<?php foreach($Krembangan as $total_Krembangan); ?>

<!-- total pasien region Surabaya Selatan -->
<?php foreach($Wonokromo as $total_Wonokromo); ?>
<?php foreach($Wonocolo as $total_Wonocolo); ?>
<?php foreach($Wiyung as $total_Wiyung); ?>
<?php foreach($KarangPilang as $total_KarangPilang); ?>
<?php foreach($Jambangan as $total_Jambangan); ?>
<?php foreach($Gayungan as $total_Gayungan); ?>
<?php foreach($DukuhPakis as $total_DukuhPakis); ?>
<?php foreach($Sawahan as $total_Sawahan); ?>

<!-- total pasien luar region Surabaya -->
<?php foreach($LuarSurabaya as $total_LuarSurabaya); ?>



<script>
// Create the chart
Highcharts.chart('grafik_region', {
    chart: {
        type: 'pie'
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
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true
            },
            showInLegend: true
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:s2f}</b>  total<br/>'
    },

    series: [
        {
            name: "Region",
            colorByPoint: true,
            data: [
                {
                    name: "Surabaya Pusat",
                    y: <?php echo $total_s_pusat->s_pusat;?>,
                    drilldown: "Surabaya Pusat"
                },
                {
                    name: "Surabaya Timur",
                    y: <?php echo $total_s_timur->s_timur;?>,
                    drilldown: "Surabaya Timur"
                },
                {
                    name: "Surabaya Barat",
                    y: <?php echo $total_s_barat->s_barat;?>,
                    drilldown: "Surabaya Barat"
                },
                {
                    name: "Surabaya Utara",
                    y: <?php echo $total_s_utara->s_utara;?>,
                    drilldown: "Surabaya Utara"
                },
                {
                    name: "Surabaya Selatan",
                    y: <?php echo $total_s_selatan->s_selatan;?>,
                    drilldown: "Surabaya Selatan"
                },
                {
                    name: "Other",
                    y: <?php echo $total_other->other;?>,
                    drilldown: "Other"
                },
             
            ]
        }
    ],
    drilldown: {
        series: [
            {
                name: "Surabaya Pusat",
                id: "Surabaya Pusat",
                data: [
                    [
                        "Tegalsari",
                        <?php echo $total_Tegalsari->Tegalsari;?>,
                    ],
                    [
                        "Simokerto",
                        <?php echo $total_Simokerto->Simokerto;?>,
                    ],
                    [
                        "Genteng",
                        <?php echo $total_Genteng->Genteng;?>,
                    ],
                    [
                        "Bubutan",
                        <?php echo $total_Bubutan->Bubutan;?>,
                    ],
                ]
            },
            {
                name: "Surabaya Timur",
                id: "Surabaya Timur",
                data: [
                   [
                        "Gubeng",
                        <?php echo $total_Gubeng->Gubeng;?>,
                    ],
                    [
                        "Gunung Anyar",
                        <?php echo $total_GunungAnyar->GunungAnyar;?>,
                    ],
                    [
                        "Sukolilo",
                        <?php echo $total_Sukolilo->Sukolilo;?>,
                    ],
                    [
                        "Tambaksari",
                        <?php echo $total_Tambaksari->Tambaksari;?>,
                    ],
                
                    [
                        "Mulyorejo",
                        <?php echo $total_Mulyorejo->Mulyorejo;?>,
                    ],
                    [
                        "Rungkut",
                        <?php echo $total_Rungkut->Rungkut;?>,
                    ],
                
                    [
                        "Tenggilis Mejoyo",
                        <?php echo $total_TenggilisMejoyo->TenggilisMejoyo;?>,
                    ],
                ]
            },
            {
                name: "Surabaya Barat",
                id: "Surabaya Barat",
                data: [
                   [
                        "Benowo",
                        <?php echo $total_Benowo->Benowo;?>,
                    ],
                    [
                        "Pakal",
                        <?php echo $total_Pakal->Pakal;?>,
                    ],
                    [
                        "Asemrowo",
                        <?php echo $total_Asemrowo->Asemrowo;?>,
                    ],
                    [
                        "Sukomanunggal",
                        <?php echo $total_Sukomanunggal->Sukomanunggal;?>,
                    ],
                
                    [
                        "Tandes",
                        <?php echo $total_Tandes->Tandes;?>,
                    ],
                    [
                        "Sambikerep",
                        <?php echo $total_Sambikerep->Sambikerep;?>,
                    ],
                
                    [
                        "Lakarsantri",
                        <?php echo $total_Lakarsantri->Lakarsantri;?>,
                    ],
                ]
            },
            {
                name: "Surabaya Utara",
                id: "Surabaya Utara",
                data: [
                   [
                        "Bulak",
                        <?php echo $total_Bulak->Bulak;?>,
                    ],
                    [
                        "Kenjeran",
                        <?php echo $total_Kenjeran->Kenjeran;?>,
                    ],
                    [
                        "Semampir",
                        <?php echo $total_Semampir->Semampir;?>,
                    ],
                    [
                        "Pabean Cantian",
                        <?php echo $total_PabeanCantian->PabeanCantian;?>,
                    ],
                
                    [
                        "Krembangan",
                        <?php echo $total_Krembangan->Krembangan;?>,
                    ],
                ]
            },
            {
                name: "Surabaya Selatan",
                id: "Surabaya Selatan",
                data: [
                    [
                        "Wonokromo",
                        <?php echo $total_Wonokromo->Wonokromo;?>,
                    ],
                    [
                        "Wonocolo",
                        <?php echo $total_Wonocolo->Wonocolo;?>,
                    ],
                    [
                        "Wiyung",
                        <?php echo $total_Wiyung->Wiyung;?>,
                    ],
                    [
                        "Karang Pilang",
                        <?php echo $total_KarangPilang->KarangPilang;?>,
                    ],
                
                    [
                        "Jambangan",
                        <?php echo $total_Jambangan->Jambangan;?>,
                    ],
                     [
                        "Gayungan",
                        <?php echo $total_Gayungan->Gayungan;?>,
                    ],
                    [
                        "Dukuh Pakis",
                        <?php echo $total_DukuhPakis->DukuhPakis;?>,
                    ],
                
                    [
                        "Sawahan",
                        <?php echo $total_Sawahan->Sawahan;?>,
                    ],
                ]
            },
            {
                name: "Other",
                id: "Other",
                data: [
                  [
                        "Luar daerah Surabaya",
                        <?php echo $total_LuarSurabaya->LuarSurabaya;?>,
                    ], 
                ]
            },
             
        ]
    }
});
</script>
