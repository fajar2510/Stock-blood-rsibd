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

            <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#newCategory">Add New Data</a>

            <table class=" table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th width="12%" scope="col">Date</th>
                        <th width="12%" scope="col">Patient</th>
                        <th  width="16%" scope="col">Doctor</th>
                        <th scope="col">Group</th>
                        <th scope="col">Type</th>
                        <th scope="col">Result Pressure</th>
                        <th scope="col">Information</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($tranfusion as $t) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $t['date']; ?></td>
                            <td><?= $t['patient_name']; ?></td>
                            <td>dr. <?= $t['name']; ?></td>
                            <td><?= $t['group_name']; ?></td>
                            <td><?= $t['category_name']; ?></td>
                            <td><?= $t['level']; ?> | <?= $t['details']; ?></td>
                            <td><?= $t['historical']; ?></td>
                            
                            <td>
                                <a class="badge badge-warning fas fa-edit" data-toggle="modal" data-target="#editKategori">&nbsp;edit</a>
                                <a class="badge badge-danger fas fa-trash-alt" href="<?= base_url('tranfusion/deleteTranfusion/' . $t['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;delete</a>
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
           <form action="<?= base_url('tranfusion'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="patient_name" class="col-sm-2 col-form-label">Patient Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="name ... " name="patient_name" value="<?= set_value('name'); ?>">
                            <?= form_error('patient_name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                        <div class="col-sm-5">
                            <select name="gender" id="gender" class="form-control">
                                <option value=""> Select Gender </option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Age </label>
                        <div class="col-sm-5">
                            <input type="number" class="form-control" min="1" id="age" placeholder="age ... " name="age" value="<?= set_value('age'); ?>">
                            <?= form_error('age', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" placeholder="Jln./no.RT/RW ... " name="address" value="<?= set_value('address'); ?>">
                            <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="region" class="col-sm-2 col-form-label">Region</label>
                        <div class="col-sm-5">
                            <select name="region" id="region" class="form-control">
                                <option value=""> Select Region </option>
                                <?php foreach ($region as $re) : ?>
                                    <option value="<?= $re['id']; ?>"> <?= $re['region_name']; ?> | <?= $re['area']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="doctor_name" class="col-sm-2 col-form-label">Doctor</label>
                        <div class="col-sm-5">
                            <select name="doctor_name" id="doctor_name" class="form-control">
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
                        <label for="blood_pressure" class="col-sm-2 col-form-label">Blood Pressure</label>
                        <div class="col-sm-5">
                            <select name="blood_pressure" id="blood_pressure" class="form-control">
                                <option value=""> Select Result </option>
                                  <?php foreach ($blood_pressure as $bp) : ?>
                                    <option value="<?= $bp['id']; ?>"> <?= $bp['level']; ?> | <?= $bp['details']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="historical" class="col-sm-2 col-form-label">Information </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="historical" placeholder="diabet/stroke/highbloodpressure ... " name="historical" value="<?= set_value('historical'); ?>">
                            <?= form_error('historical', '<small class="text-danger pl-3">', '</small>'); ?>
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