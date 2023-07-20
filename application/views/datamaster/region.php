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

            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newCategory">Add New Data</a>

            <table class=" table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Region Name</th>
                        <th scope="col">Area</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($region as $cp) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $cp['region_name']; ?></td>
                            <td><?= $cp['area']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning fas fa-edit" data-toggle="modal" data-target="#editKategori">&nbsp;edit</a>
                                <a class="badge badge-danger fas fa-trash-alt" href="<?= base_url('datamaster/deleteRegion/' . $cp['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;delete</a>
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
<div class="modal fade bd-example-modal-lg" id="newCategory" tabindex="-1" role="dialog" aria-labelledby="newCategoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newCategoryLabel">Add New Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('datamaster/region'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="region" name="region_name" placeholder="region name. . . ?" value="<?= set_value('region_name'); ?>">
                        <?= form_error('region_name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-5">
                            <select name="area" id="area" class="form-control">
                                <option value=""> Select Area </option>
                                <option value="Surabaya Pusat">Surabaya Pusat</option>
                                <option value="Surabaya Timur">Surabaya Timur</option>
                                <option value="Surabaya Barat">Surabaya Barat</option>
                                <option value="Surabaya Utara">Surabaya Utara</option>
                                <option value="Surabaya Selatan">Surabaya Selatan</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Add</button>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- editModal -->
<div class="modal fade bd-example-modal-lg" id="editKategori" tabindex="-1" role="dialog" aria-labelledby="editKategoriLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editKategoriLabel">Edit Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('datamaster/region_name'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="region" name="region_name" placeholder="" value="<?= set_value('region_name'); ?>">
                        <?= form_error('region', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>

            </form>
        </div>
    </div>
</div>