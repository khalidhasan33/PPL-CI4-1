<?= $this->extend('layout/template') ?>
 
<?= $this->section('content') ?>
        <?php foreach ($mahasiswa as $k) : ?>
        <div class="container">
            <h3 class="mt-3">Detail</h3>
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><h3 class="mt-1">Mahasiswa <?php echo $k->nama_mahasiswa; ?></h3></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <h5>NIM</h5>
                        <p><?php echo $k->id; ?></p>
                        <h5>Nama</h5>
                        <p><?= $k->nama_mahasiswa; ?></p>
                        <h5>Program Studi</h5>
                        <p><?= $k->nama_prodi; ?></p>
                        <h5>Tahun Masuk</h5>
                        <p><?= $k->tahun_masuk; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <a class="btn btn-secondary" href="/" role="button">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
<?= $this->endSection() ?>
