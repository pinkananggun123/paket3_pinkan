<div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="border-color: #42A3A7;">
            <div class="card-header">

            <!-- garis tabel member dan tambah member -->
                <h5 class="card-title"><?php echo $judul ?></h5>
                <div class="card-tools">
                  <a href="<?php echo base_url('member/tambah')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Registrasi</a>
                </div>
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-md-12">
                    
                <!-- jika berhasil tambah data member -->
                    <?php if ($message = $this->session->flashdata('message')): ?>
                    <div class ="alert alert-success">
                    <strong>Berhasil</strong>
                    <p><?php echo $message ?></p>
                    </div>
                    <?php endif ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $index = 1; foreach ($member as $row): ?>
                                    <tr>
                                        <td><?php echo $index++ ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                        <td><?php echo $row['tlp'] ?></td>
                                        <td><?php echo $row['jenis_kelamin'] ?></td>
                                        <td>
                                            <a class="btn btn-warning" href="<?php echo base_url('member/ubah/') . $row['id_member'] ?>"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" onclick="return confirm('apakah anda yakin?')" href="<?php echo base_url('member/hapus/'). $row['id_member'] ?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        </div>
                     </div>

              
              </div>
            </div>
          </div>
        </div>