<?= $this->extend('layout/template') ?>
 
<?= $this->section('content') ?>
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="mb-4">
                    <form action="/news_save" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">News Title</label>
                        <input type="text" class="form-control" name="title" placeholder="" maxlength="75" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">News Contents</label>
                        <textarea class="form-control" name="content" rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Writer</label>
                        <input type="text" class="form-control" name="writer" placeholder="" maxlength="30" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlImage">Chose thumbnail</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" required>
                    </div>
                    <button type="submit" value="simpan" class="btn btn-primary btn-md text-white">SAVE</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
<?= $this->endSection() ?>
