<div class="container">


    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/favicon/logo.png')?> " width="150px" height="50px">
                                    <h1 class="h4 text-gray-900 mb-4"> <b>Sistem Informasi Eksekutif</b>  <hr> Bank Darah RSI | Login</h1>
                                    
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>"> 
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-info btn-user btn-block">
                                        <h6><b style="font-family:'Roboto';font-size:20px;">L O G I N</b> </h6>
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                </div>
                                <!-- <div class="text-center">
                                    <a class="small" href="<?php echo base_url() ?>auth/registration">Create an Account!</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>