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

            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newArticle">Add New Data</a>

            <table class=" table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Specialist</th>
                        <th scope="col">Age</th>
                        <th scope="col" width="25%">Work Unit Office</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($doctor as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $d['name']; ?></td>
                            <td><?= $d['specialist']; ?></td>
                            <td><?= $d['age']; ?></td>
                            <td><?= $d['work_unit_office']; ?></td>
                            <td> <img src="<?= base_url('assets/img/profile/') . $d['image']; ?>" alt="" width="90" height="60"></td>
                            <td>
                                <a href="" class="badge badge-success fas fa-edit">&nbsp;edit</a>
                                <a class="badge badge-danger fas fa-trash-alt" href="<?= base_url('datamaster/deleteDoctor/' . $d['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- MODAL -->


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="newArticle" tabindex="-1" role="dialog" aria-labelledby="newArticleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newArticleLabel">Add New Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('datamaster/doctor'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Name. . ." value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="specialist" name="specialist" placeholder="specialist. . ." value="<?= set_value('specialist'); ?>">
                        <?= form_error('specialist', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="contact" name="contact" placeholder="contact. . ." value="<?= set_value('contact'); ?>">
                        <?= form_error('contact', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="address. . ." value="<?= set_value('address'); ?>">
                        <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="age" name="age" placeholder="age. . ." value="<?= set_value('age'); ?>">
                        <?= form_error('age', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="work_unit_office" name="work_unit_office" placeholder="work_unit_office. . ." value="<?= set_value('work_unit_office'); ?>">
                        <?= form_error('work_unit_office', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                   
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Add Images</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>

            </form>
        </div>
    </div>
</div>