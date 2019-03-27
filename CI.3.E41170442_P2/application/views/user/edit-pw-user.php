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
                    <form method="POST" action="<?php echo base_url('index.php/user/input_act') ?>">
                        <div class="form-row">
                            <?php foreach($user as $u){ ?>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Username</label>
                                <input type="username" class="form-control" id="username" name="username" value="<?php echo $u->username ?>" readonly>
                            </div>
                            <?php } ?>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password Lama</label>
                                <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password Baru</label>
                                <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Re-Password Baru</label>
                                <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Ulangi Masukkan Password">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>