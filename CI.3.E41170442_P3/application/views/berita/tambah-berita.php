<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Berita</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo base_url('index.php/berita/add_act') ?>">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Penulis</label>
                                <select name="penulis" id="penulis" class="form-control">
                                    <option value="">--Pilih--</option>
                                    <?php foreach($user_penulis as $u){ ?>
                                    <option value="<?php echo $u->id_user ?>"><?php echo $u->username ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Judul Berita</label>
                                <input type="username" class="form-control" id="judul" name="judul" placeholder="Ketikkan Judul">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Konten</label>
                                <textarea class="form-control" name="konten" id="konten"></textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>