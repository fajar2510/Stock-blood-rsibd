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
                        <th scope="col">Level Pressure</th>
                        <th scope="col" width="15%">Details Information</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($blood_pressure as $bp) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $bp['level']; ?></td>
                            <td><?= $bp['details']; ?></td>
                            <td>
                                <a href="" class="badge badge-success fas fa-edit">&nbsp;edit</a>
                                <a class="badge badge-danger fas fa-trash-alt" href="<?= base_url('datamaster/deletePressure/' . $bp['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;delete</a>
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
            <form action="<?= base_url('datamaster/pressure'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="level">Level Pressure</label>
                        <input type="text" class="form-control form-control-user" id="level" name="level" placeholder="low/normal/high. . ." value="<?= set_value('level'); ?>">
                        <?= form_error('level', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                   
                    <div class="form-group">
                        <label for="details">Details Information</label>
                        <textarea class="form-control" id="details" name="details" rows="3"></textarea>
                        <?= form_error('details', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
               
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Add Data</button>
                </div>

            </form>
        </div>
    </div>
</div>