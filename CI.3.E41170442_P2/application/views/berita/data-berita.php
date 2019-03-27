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
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url('index.php/berita/add') ?>">Input Berita</a>
                    <br><br>
                    <table id="table" class="table table-bordered">
                        <thead>
                            <tr>
                                <td>No.</td>
                                <td>Penulis</td>
                                <td>Judul</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                            foreach($berita as $b){ ?>
                            <tr>
                                <td style="text-align:center;width:5%"><?php echo $no++ ?></td>
                                <td><?php echo $b->id_user ?></td>
                                <td><a href="<?php echo base_url().'index.php/berita/show/'.$b->id_berita ?>"><?php echo $b->judul_berita ?></a></td>
                                <td style="text-align:center;">
                                    <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pilih
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="<?php echo base_url()."index.php/berita/edit/".$b->id_berita ?>">Edit</a>
                                        <a class="dropdown-item" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')" href="<?php echo base_url()."index.php/berita/delete/".$b->id_berita ?>">Delete</a>
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
<!-- <script type="text/javascript">
    $(document).ready(function(){
        $('#table').DataTable();
    });
</script> -->