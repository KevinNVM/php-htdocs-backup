<div class="mb-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link <?php echo ($tabs === 'list') ? ('active') : ('') ?>" aria-current="page"
                href="/persons">Show All</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($tabs === 'detail') ? ('active') : ('disabled') ?>" href="/persons">Person's
                Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($tabs === 'add') ? ('active') : ('') ?>" href="/persons/create">Add New
                Person's</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($tabs === 'update') ? ('active') : ('disabled') ?>" href="">Update
                Person's</a>
        </li>
    </ul>
</div>