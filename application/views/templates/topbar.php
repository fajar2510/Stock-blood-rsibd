<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column" style="background:url('assets/img/home/blood.jpg');  background-size:cover">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>



            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>

            </form>


            <script type="text/javascript">
                function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
                    var waktu = new Date(); //membuat object date berdasarkan waktu saat 
                    var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
                    var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
                    var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
                    document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
                }
            </script>
            <!-- /*Menampilkan Waktu*/ -->
            <center>

                <marquee direction="up" scrollamount="2" align="left" behavior="alternate" width="90%">
                    <marquee direction="right">

                        <?php
                        $tanggal= mktime(date("m"),date("d"),date("Y"));
                        echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
                        date_default_timezone_set('Asia/Jakarta');
                        $jam=date("H:i:s");
                        echo "| Pukul : <b>". $jam." "."</b>";
                        $a = date ("H");
                        if (($a>=6) && ($a<=11)){
                        echo "<b>, Selamat Pagi !!</b>";
                        }
                        else if(($a>11) && ($a<=15))
                        {
                        echo ", Selamat Siang !!";}
                        else if (($a>15) && ($a<=18)){
                        echo ", Selamat Sore !!";}
                        else { echo ", <b> Selamat Malam </b>";}
                        ?>
                    </marquee>
                </marquee>
            </center>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">


                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url("assets/img/profile/") . $user['image']; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('user'); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            My Profile
                        </a>
                         <a class="dropdown-item" href="<?= base_url('edit'); ?>">
                            <i class="fas fa-fw fa-user-edit mr-2 text-gray-400"></i>
                            Edit
                        </a>
                         <a class="dropdown-item" href="<?= base_url('changePassword'); ?>">
                            <i class="fas fa-fw fa-unlock-alt mr-2 text-gray-400"></i>
                            Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>



        </nav>
        <!-- End of Topbar -->