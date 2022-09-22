<?php 
$start = hrtime(true);
if (empty($_GET['search_query'])) {
    $result = query("SELECT * FROM tb_toko_online_product");
} else {
    $sq = htmlspecialchars($_GET['search_query']);
    $result = query("SELECT * FROM tb_toko_online_product INNER JOIN tb_toko_online_category ON tb_toko_online_product.category_id = tb_toko_online_category.category_id 
    WHERE product_name LIKE '%$sq%' OR 
    product_desc LIKE '%$sq%' OR
    category_name LIKE '%$sq%' ");
    $_SESSION['sq'] = $sq;
}
$end = hrtime(true);
$eta = $end - $start;
// convert nanoseconds to seconds
$eta /= 1e+9;
$eta .= ' seconds';

?>

<div class="row g-2 g-lg-4">
    <small class="text-muted">Showing About <?= count($result) ?> results (<?= $eta ?>)</small>
    <?php $key = 1; foreach ($result as $row): ?>
    <div class="col-md-4 col-sm-6">
        <a href="/toko_online/product/<?= slugify($row['product_name']) ?>" class="card">
            <div class="card shadow">
                <img src="<?= baseurl ?>/src/img/<?= $row['product_img_1'] ?>" class="card-img-top rounded-3 p-1">
                <div class="card-body">
                    <h5 class="card-title text-truncate" title="<?= $row['product_name'] ?>">
                        <?= $row['product_name'] ?>
                    </h5>
                    <p class="card-text text-truncate d-block fs-6">
                        <?= substr(htmlspecialchars($row['product_desc']), 0, 20) . '...' ?>
                    </p>
                    <p class="card-text">Stock : <?= $row['product_stock'] ?></p>
                    <small class="text-white d-block"><?= $row['product_rating'] / 10 ?> <i
                            class="bi bi-star-half"></i></small>
                    <h5 class="card-text"><?= 'Rp ' . number_format($row['product_price'],0,",",".") ?></h5>
                </div>
            </div>
        </a>
    </div>
    <?php $key++; endforeach; ?>
    <?php if(count($result) === 0): ?>
    <div class="container text-center text-mute mt-5">
        <h3>No Products Were Found 😕</h3>
        <p>You Searched For "<?= $sq ?>"</p>
    </div>
    <script>
    $('form').focus();
    </script>
    <?php endif; ?>
</div>