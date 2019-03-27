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
                    <?php
                    foreach($berita as $b){
                        echo "<h1>".$b->judul_berita."</h1><br>";
                        echo "<p>".$b->konten_berita."<br>
                        Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet 
                        Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet 
                        Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet 
                        Lorem ipsum dolor sit amet Lorem ipsum dolor sit ametLorem ipsum dolor sit amet </p><br>";
                        echo "<b>Penulis : ".$b->username."</b>";
                    ?>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

</div>