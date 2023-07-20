<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?= $this->session->flashdata('message'); ?>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <!--  Content tab profile start -->
            <div class="card mb-3 col-lg-8">
                <div class="row no-gutters">
                    <div class="col-md-3">
                        <img src="<?= base_url('assets/img/profile/') .
                        $user['image']; ?>" class="card-img" alt="My Profile Photos">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><b><?= $user['name']; ?></b></h5>
                            <p class="card-text"><b> E-mail     |</b><i> <?= $user['email']; ?></i></p>
                             <p class="card-text"><b> Role     |</b><i> <?= $user['role']; ?></i></p>
                            <p class="card-text"><b> Bio        |</b><i> <?= $user['bio']; ?></i></p>
                            <p class="card-text"><small class="text-muted">Member since
                                    <?= date('d F Y', $user['date_created']);  ?></small></p>
                        </div>
                    </div>
                 </div>
            </div>
            <!--  Content tab profile end -->
            </div>
        </div>
    </div>
</div>
<!-- End of Main Content -->