<?= $this->extend('layout/template') ?>
 
<?= $this->section('content') ?>
        <div class="container">
            <h3 class="mt-3">List Mahasiswa</h3>
            <?php if(session()->getFlashdata('pesan sukses')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashData('pesan sukses'); ?>
                </div>
            <?php endif; ?>
            <?php if(session()->getFlashdata('pesan gagal')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashData('pesan gagal'); ?>
                </div>
            <?php endif; ?>
            <?php if(session()->getFlashdata('pesan gagal search')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashData('pesan gagal search'); ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search mahasiswa.." name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <table class="table striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Program Studi</th>
                                    <th scope="col">Tahun Masuk</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $number = 1;
                                foreach ($mahasiswa as $k) : 
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $number; ?></th>
                                        <td><?= $k->nama_mahasiswa; ?></td>
                                        <td><?= $k->nama_prodi; ?></td>
                                        <td><?= $k->tahun_masuk; ?></td>
                                        <td>
                                            <a href="/<?= $k->id;?>" class="btn btn-success">Detail</a>
                                        </td>
                                    </tr>
                                <?php 
                                $number++;
                                endforeach; 
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <a class="btn btn-primary" href="/create" role="button">Tambah Mahasiswa</a>
                    </div>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>
