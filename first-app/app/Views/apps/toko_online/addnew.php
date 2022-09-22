<?= $this->extend('template/head') ?>

<?= $this->section('head') ?>
<link rel="stylesheet" href="<?= baseurl ?>/src/css/main.css">
<link rel="stylesheet" href="<?= baseurl ?>/src/css/toko_online.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?= $this->endSection() ?>

<?= $this->extend('template/main') ?>

<?= $this->section('body') ?>
<?php $this->include('apps/toko_online/functions'); ?>
<?php 
if (isset($_POST['upload'])) {
    if (addNew($_POST) > 0) {
        $_SESSION['flash'] = ['status' => 'success','head' => 'Success', 'msg' => 'Product Successfuly Added!'];
        echo '<script>location="'.baseurl.'/toko_online"</script>';
    } else {
        echo '<script>location="'.baseurl.'/toko_online/addnew"</script>';
    }
}
?>
<?= $this->include('apps/toko_online/navbar') ;?>

<div class="container-fluid mt-4">
    <form action="<?= baseurl ?>/toko_online/addnew" method="POST" enctype="multipart/form-data">
        <div class="container">
            <h2>Tambah Barang</h2>
            <div class="row d-flex justify-content-center mt-4">


                <div class="col-12 form-outline mx-2 mb-3">
                    <input name="product_name" id="product_name" type="text" class="form-control" maxlength="100"
                        value="<?= (isset($old['pname']))?isset($old['pname']):'' ?>" required>
                    <label for="product_name" class="form-label">Nama Barang (max:100)</label>
                </div>
                <?php 
$query = query("SELECT * FROM tb_toko_online_category ORDER BY  `category_id` DESC");
                ?>

                <div class="col-12 mb-3 select-label">
                    <label class="form-label" for="kategori">Kategori</label>
                    <select class="form-select" id="kategori" name="product_category" required>
                        <option value="" selected disabled>Pilih Kategori</option>
                        <?php foreach($query as $row): ?>
                        <option value="<?= $row['category_id'] ?>">&raquo; <?= $row['category_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col form-outline mx-2 mb-3">
                    <input name="product_price" id="product_price"
                        value="<?= (isset($old['pprice']))?isset($old['pprice']):'' ?>" type="tel" class="form-control"
                        required>
                    <label for="product_price" class="form-label">Harga</label>
                </div>

                <div class="col form-outline mx-2 mb-3">
                    <input id="product_stock" name="product_stock" type="number" class="form-control" maxlength="4"
                        value="<?= (isset($old['pstock']))?isset($old['pstock']):'' ?>" required>
                    <label for="product_stock" class="form-label">Stok</label>
                </div>

                <div class="col-12 form-outline mx-2 mb-3">
                    <textarea name="product_desc" id="product_desc" class="form-control" rows="4" maxlength="2000"
                        value="<?= (isset($old['pdesc']))?isset($old['pdesc']):'' ?>" required></textarea>
                    <label for="product_desc" class="form-label">Deskripsi (max:2000)</label>
                </div>

                <div class="row row-cols-1">
                    <div class="col img-1 mx-2 mb-3">
                        <label class="form-label" for="customFile">Gambar Barang 1<span class="text-danger"
                                title="Required">*</span></label>
                        <input type="file" class="form-control img-1" accept="image/*" type='file' id="imgInp"
                            name="product_img_1" required />
                        <button type="button" class="btn btn-primary preview-img-1 d-none mt-2" data-mdb-toggle="modal"
                            data-mdb-target="#modalPreview1">
                            Preview
                        </button>
                        <div class="modal top fade" id="modalPreview1" tabindex="-1"
                            aria-labelledby="modalPreview1Label" aria-hidden="true" data-mdb-backdrop="true"
                            data-mdb-keyboard="true">
                            <div class="modal-dialog modal-fullscreen  modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalPreview1Label">Image Preview</h5>
                                        <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img class="w-100" id="blah" src="#" alt="please select an image" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col img-2 mx-2 mb-3 visually-hidden">
                        <label class="form-label" for="customFile">Gambar Barang 2</label>
                        <input type="file" class="form-control img-2" accept="image/*" type='file' id="image_2" />
                        <button type="button" class="btn btn-primary preview-img-2 d-none mt-2" data-mdb-toggle="modal"
                            data-mdb-target="#modalPreview2">
                            Preview
                        </button>
                        <div class="modal top fade" id="modalPreview2" tabindex="-1"
                            aria-labelledby="modalPreview2Label" aria-hidden="true" data-mdb-backdrop="true"
                            data-mdb-keyboard="true">
                            <div class="modal-dialog modal-fullscreen  modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalPreview2Label">Image 2 Preview</h5>
                                        <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img class="w-100" id="blah2" src="#" alt="please select an image" />
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-5 mb-5">
                    <button class="btn btn-primary w-100" name="upload">Upload</button>
                </div>



            </div>
            <h4><a href="<?= baseurl ?>/toko_online/category">Category List</a></h4>



        </div>
</div>
</form>
</div>


<br class="user-select-none">
<br class="user-select-none">
<br class="user-select-none">
<br class="user-select-none">
<?= $this->include('template/footer') ;?>
<?= $this->endSection() ?>


<?= $this->section('foot') ;?>
<script>
$(document).ready(function() {
    $('.nav-default').remove();
    $('nav').addClass('sticky-top');


    if (innerWidth < 720) {
        console.log('x');
    } else {
        $('#search-input').on('click', function() {
            $('#search-input').css('width', '500')
        });
        $('.btn-outline-success').click(function() {
            $('#search-input').css('width', '230')
        });
    }

    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

    image_2.onchange = evt => {
        const [file] = image_2.files
        if (file) {
            blah2.src = URL.createObjectURL(file)
        }
    }



    $('#imgInp').change(function() {
        $('.preview-img-1').removeClass('d-none');
        $('.img-2').removeClass('visually-hidden');
    });

    $('#image_2').change(function() {
        $('#image_2').attr('name', 'product_img_2');
        $('.preview-img-2').removeClass('d-none');
    });

    <?php if(isset($_SESSION['flash'])): ?>
    swal('<?= $_SESSION['flash']['head'] ?>', '<?= $_SESSION['flash']['msg'] ?>', ''
        <?= $_SESSION['flash']['status'] ?> '');
    <?php unset($_SESSION['flash']); endif; ?>

});
</script>
<?= $this->endSection() ;?>