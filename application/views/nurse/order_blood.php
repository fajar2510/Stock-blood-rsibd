<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <p class="h3 mb-4 text-gray-800 text-xs"><?= $user['role']; ?> | <?= $user['name']; ?>  </p>
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newCategory" > Add New Data</a>

            <table class=" table table-hover">
                <thead>
                    <tr> 
                        <th scope="col">#</th> 
                        <th width="12%" scope="col">Date</th>
                        <!-- <th scope="col">Nurse</th> -->
                        <th width="15%" scope="col">Doctor</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col">Blood Type</th>
                        <th scope="col">Room</th>
                        <th scope="col">Source</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th width="8%" scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($blood_order as $bo) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $bo['date']; ?></td>
                            <td>dr. <?= $bo['name']; ?></td>
                            <td><?= $bo['group_name']; ?></td>
                            <td><?= $bo['category_name']; ?></td>
                            <td><?= $bo['room_name']; ?></td>
                            <td><?= $bo['source']; ?></td>
                            <td><?= $bo['total']; ?> pack</td>
                            <td><b><?= $bo['status']; ?></b></td>
                            <td>
                                <a class="badge badge-success " href="<?= base_url('order/accept/' . $bo['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;accept</a>
                                <a class="badge badge-warning " href="<?= base_url('order/cancel/' . $bo['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;cancel</a>
                                <!-- <a class="badge badge-info " href="<?= base_url('order/edit/' . $bo['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;edit</a> -->
                                <a class="badge badge-danger " href="<?= base_url('order/delete/' . $bo['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;delete</a>
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
                <h5 class="modal-title" id="newCategoryLabel">Add New Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('order'); ?>" method="post">
                <div class="modal-body">
                     <div class="form-group row">
                        <label for="doctor" class="col-sm-2 col-form-label">Doctor</label>
                        <div class="col-sm-5">
                            <select name="doctor" id="doctor" class="form-control">
                                <option value=""> Select Doctor </option>
                                <?php foreach ($doctor as $d) : ?>
                                    <option value="<?= $d['id']; ?>"> <?= $d['name']; ?> | <?= $d['specialist']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood_group" class="col-sm-2 col-form-label">Blood Group</label>
                        <div class="col-sm-5">
                            <select name="blood_group" id="blood_group" class="form-control">
                                <option value=""> Select Group </option> 
                                <?php foreach ($blood_group as $bg) : ?>
                                    <option value="<?= $bg['id']; ?>"> <?= $bg['group_name']; ?> | <?= $bg['information']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="blood_type" class="col-sm-2 col-form-label">Blood Type</label>
                        <div class="col-sm-5">
                            <select name="blood_type" id="blood_type" class="form-control">
                                <option value=""> Select Type </option>
                                <?php foreach ($blood_type as $bt) : ?>
                                    <option value="<?= $bt['id']; ?>"> <?= $bt['category_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>   
                    <div class="form-group row">
                        <label for="room" class="col-sm-2 col-form-label">Room</label>
                        <div class="col-sm-5">
                            <select name="room" id="room" class="form-control">
                                <option value=""> Select Rooom </option>
                                <?php foreach ($specific_room as $sr) : ?>
                                    <option value="<?= $sr['id']; ?>"> <?= $sr['room_name']; ?> | <?= $sr['type']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Source</label>
                        <div class="col-sm-5">
                            <select name="source" id="source" class="form-control">
                                <option value=""> Select Source </option>
                                <option value="PMI">PMI</option>
                                <option value="Hospital">Hospital</option>
                                <option value="Donor">Donor</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-sm-2 col-form-label">Total Pack </label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" min="1" id="total" placeholder="totalpack ... " name="total" value="<?= set_value('totalpack'); ?>">
                            <?= form_error('total', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
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
            <form action="<?= base_url('nurse/tranfusion'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="category" name="category_name" placeholder="" value="<?= set_value('category_name'); ?>">
                        <?= form_error('category_name', '<small class="text-danger pl-3">', '</small>'); ?>
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