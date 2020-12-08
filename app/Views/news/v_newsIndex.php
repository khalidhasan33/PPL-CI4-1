<?= $this->extend('layout/template') ?>
 
<?= $this->section('content') ?>
<div class="container">
            <h3 class="mt-3">News Today</h3>
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
                <?php 
                    if(session()->get('role')=="admin"){
                    ?>
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search news.." name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                        </div>
                    </form>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                        <table class="table striped">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Writer</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $number = 1;
                                foreach ($news as $k) : 
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $number; ?></th>
                                        <td>
                                            <?= $scr= $k->newsThumbnail; ?>
                                            <img src="<?php echo base_url('image/news/'.$scr); ?>" alt="thumbnail" class="thumbnail">
                                        </td>
                                        <td><?= $k->newsTitle; ?></td>
                                        <td><?= $k->newsWriter; ?></td>
                                        <td><?= $k->newsDate; ?></td>
                                        <td>
                                            <a href="/v_news/<?= $k->newsId;?>" class="btn btn-success">Detail</a>
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
                    <?php 
                    if(session()->get('role')=="admin"){
                    ?>
                        <a class="btn btn-primary" href="/v_newsAdd" role="button">Add News</a>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>