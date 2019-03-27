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
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url('index.php/user/add') ?>">Input User</a>
                    <br><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Username</td>
                                <td>Level</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($user as $u){ ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $u->username ?></td>
                                <td><?php if($u->level==1){echo "Admin";}else if($u->level==2){echo "Operator"; } ?></td>
                                <td style="text-align:center;">
                                    <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pilih
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo base_url()."index.php/user/edit/".$u->id_user ?>">Edit</a>
                                        <a class="dropdown-item" href="<?php echo base_url()."index.php/user/editPw/".$u->id_user ?>">Ganti Password</a>
                                        <a class="dropdown-item" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')" href="<?php echo base_url()."index.php/user/delete/".$u->id_user ?>">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>