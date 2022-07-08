<!-- <?php
//   if($this->session->userdata('ROLE')!='administrator'){
//     redirect(base_url().'index.php/welcome');
//   }
?> -->
<!-- <?php
//   if(!$this->session->has_userdata('USERNAME')){
//     redirect(base_url().'index.php/login');
//   }
?> -->
    <section id="service" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="services-left mt-45">
                        <h5>Kelola kecamatan</h5>
                        <br>
                        <a href="<?php echo base_url();?>index.php/kelola_kecamatan/form"><button type="button" class="btn btn-success">Tambah Kecamatan</button></a>
                        <br>
                        <br>
                    <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">ID</th>
                                <th scope="col">Kecamatan</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $number = 1;
                                foreach($list_kecamatan as $kecamatan) {
                            ?>

                            <tr>
                                <th scope="row"><?=$number?></th>
                                <td><?=$kecamatan->id?></td>
                                <td><?=$kecamatan->nama?></td>
                                <td>
                                    <a href="<?= base_url("index.php/kelola_kecamatan/edit?id=$kecamatan->id");?>">Edit</a> |
                                    <a href="<?= base_url("index.php/kelola_kecamatan/delete?id=$kecamatan->id");?>"
                                    onclick="if(!confirm('Anda Yakin Hapus kecamatan dengan ID <?=$kecamatan->nama?>?') {return false}">Delete</a>
                                </td>
                            </tr>
                            <?php
                                $number++;
                                }
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>