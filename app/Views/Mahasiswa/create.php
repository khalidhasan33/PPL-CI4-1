<?= $this->extend('layout/template') ?>
 
<?= $this->section('content') ?>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <h2 class="my-3">Form Tambah Data Mahasiswa</h2>
                        <form action="/save" method="post">
                        <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="id">ID Mahasiswa</label>
                                <input name='id' type="text" class="form-control" placeholder="NIM" required>
                            </div>
                            <div class="form-group">
                                <label for="id">Nama Mahasiswa</label>
                                <input name='nama_mahasiswa' type="text" class="form-control" placeholder="Nama Mahasiswa" required>
                            </div>
                            <div class="form-group">
                                <label for="id">Nama Prodi</label>
                                <input name='nama_prodi' type="text" class="form-control" placeholder="Nama Prodi" required>
                            </div>
                            <div class="form-group">
                                <label for="id">Tahun Masuk</label>
                                <input name='tahun' type="text" class="form-control" placeholder="Tahun Masuk" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
<?= $this->endSection() ?>