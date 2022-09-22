<ul class="list-none m-0 p-0 px-2">
    <?php 
    $result = query("SELECT category_name FROM tb_toko_online_category");
    $key = 1; 
    foreach($result as $rows): ?>
    <li>&raquo; <a class="links"
            href="/toko_online/category?view=<?= slugify($rows['category_name']) ?>"><?= $rows['category_name'] ?></a>
    </li>
    <?php $key++; endforeach; ?>
</ul>