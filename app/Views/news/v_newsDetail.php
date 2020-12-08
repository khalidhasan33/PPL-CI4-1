<?= $this->extend('layout/template') ?>
 
<?= $this->section('content') ?>
        <?php foreach ($news as $k) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col"><h3 class="mt-1 text-center"> <?php echo $k->newsTitle; ?></h3></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <?= $scr= $k->newsThumbnail; ?>
                        <img src="<?php echo base_url('image/news/'.$scr); ?>" alt="thumbnail" class="thumbnail-big">
                        <p></p>
                        <p class="text-justify"><?= $k->newsContents; ?></p>
                        <p><?= $k->newsDate; ?></p>
                        <p><?= $k->newsWriter; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <a class="btn btn-secondary" href="/v_news" role="button">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
<?= $this->endSection() ?>
