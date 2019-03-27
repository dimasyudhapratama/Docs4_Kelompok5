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
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Username</label>
                                <input type="username" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Level</label>
                                <select name="level" id="level" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Operator</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Re-Password</label>
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