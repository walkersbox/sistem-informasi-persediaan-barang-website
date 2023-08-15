<?php 
include "models/m_databarang.php";

$brg = new Databarang($connection);
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Stok Barang</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th>No</th>
                                            <th>ID Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Stok</th>
                                            <th>Jenis</th>
                                            <th>Satuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php 
                                        $no = 1;
                                        $tampil = $brg->tampil();
                                        while($data = $tampil->fetch_object()) {
                                        ?>
                                        <tr align="center">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data->id_barang; ?></td>
                                            <td><?php echo $data->nama_barang; ?></td>
                                            <td><?php echo $data->stok; ?></td>
                                            <td><?php echo $data->jenis; ?></td>
                                            <td><?php echo $data->satuan; ?></td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-circle btn-sm">
                                                    <i class="fas fa-info-circle"></i>
                                                </a>
                                                <a href="#" class="btn btn-danger btn-circle btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php 
                                        }?>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End of Main Content -->

            
            