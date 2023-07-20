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

            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newPackage">Add New Data</a>

            <table class=" table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Room Name</th>
                        <th scope="col">Function</th>
                        <th scope="col">Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($specific_room as $p) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $p['room_name']; ?></td>
                            <td><?= $p['function']; ?></td>
                            <td><?= $p['type']; ?></td>
                            <td>
                                <a href="" class="badge badge-success fas fa-edit">&nbsp;edit</a>
                                <a class="badge badge-danger fas fa-trash-alt" href="<?= base_url('datamaster/deleteRoom/' . $p['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;delete</a>
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
<div class="modal fade bd-example-modal-lg" id="newPackage" tabindex="-1" role="dialog" aria-labelledby="newPackageLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newPackageLabel">Add New Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('datamaster/specific_room'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="room_name" name="room_name" placeholder="Room name" value="<?= set_value('room_name'); ?>">
                        <?= form_error('room_name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="function" name="function" placeholder="Function" value="<?= set_value('function'); ?>">
                        <?= form_error('function', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"  id="type" name="type" placeholder="Type" value="<?= set_value('type'); ?>">
                        <?= form_error('type', '<small class="text-danger pl-3">', '</small>'); ?>
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