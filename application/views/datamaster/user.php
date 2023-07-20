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

            <a href="" class="btn btn-info mb-3 " data-toggle="modal" data-target="#newUser">&nbsp; Add Data</a>

            <table class=" table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody> 
                    <?php $i = 1; ?>
                    <?php foreach ($user_role as $ur) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $ur['name']; ?></td>
                            <td><?= $ur['email']; ?></td>
                            <td><?= $ur['role']; ?></td>
                            <td>
                                <a  class="badge badge-warning fas fa-ban" href="<?= base_url('datamaster/editUser/' . $ur['id']); ?>" >&nbsp;edit</a>
                                <a class="badge badge-danger fas fa-trash-alt" href="<?= base_url('datamaster/deleteUser/' . $ur['id']); ?>" onclick="return confirm('Are you sure ?')">&nbsp;delete</a>
                                <!-- <a class="badge badge-danger" href="<?= base_url('datamaster/deleteUser'); ?>" onclick="hapusModal('$ur['id']')" data-toggle="modal" data-target="#hapusModal">
                                    Hapus pake modal
                                </a> -->
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




<!-- adduserModal -->
<div class=" modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="newUserLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"> 
                <h5 class="modal-title" id="newUserLabel">Add New User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('datamaster/user'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="full name of user ... " name="name" value="<?= set_value('name'); ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" placeholder="email of user " name="email" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="password" value="<?= set_value('password1'); ?>">
                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col-sm-5">
                            <input type="password" class="form-control" id="password2" placeholder="repeat password" name="password2" value="<?= set_value('password2'); ?>">
                            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-5">
                            <select name="role" id="role" class="form-control">
                                <option value=""> Select Role </option>
                                <?php foreach ($role as $ru) : ?> 
                                    <option value="<?= $ru['id']; ?>"> <?= $ru['role']; ?></option>
                                <?php endforeach; ?>
                            </select>
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


<!-- edituserModal -->
<div class=" modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="editUserLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUserLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('datamaster/user'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="full name of user ... " name="name" value="<?= $user['name']; ?>">
                            <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" disabled placeholder="email of user " name="email" value="<?= $user['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-5">
                            <select name="role" id="role" class="form-control">
                                <option value=""> Select Role </option>
                                <?php foreach ($role as $ru) : ?> 
                                    <option value="<?= $ru['id']; ?>"> <?= $ru['role']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>


                    <!-- <div class=" form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-5">
                            <select name="role" id="role" class="form-control">
                                <option value=""> Select Role </option>
                                <?php
                                while ($role = mysqli_fetch_array($user)) {
                                    if ($data['id'] == $r['id']) {
                                        $s = "selected";
                                    } else {
                                        $s = "";
                                    }
                                    // echo "<option $s>".$r['id']."</option>";
                                    echo "<option value='$r[id]' $s>$r[role]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div> -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>




<!-- modalhapus -->
<!-- <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hapusModal">Are you sure ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Data will deleted permanently</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="<?= base_url('datamaster/deleteUser'); ?>">Delete</a>
            </div>
        </div>
    </div>
</div> -->