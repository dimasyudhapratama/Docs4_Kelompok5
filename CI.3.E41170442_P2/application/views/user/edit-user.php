<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('index.php/user/update') ?>">
                        <div class="form-row">
                            <input type="hidden" name="id" value="<?php echo $id_user; ?>">
                            <?php foreach($user as $u){ ?>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Username</label>
                                <input type="username" class="form-control" id="username" name="username" placeholder="Masukkan Username" value="<?php echo $u->username ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Level</label>
                                <select name="level" id="level" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="1" <?php if($u->level=='1'){echo "Selected";} ?>>Admin</option>
                                    <option value="2" <?php if($u->level=='2'){echo "Selected";} ?>>Operator</option>
                                </select>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>