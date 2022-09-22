<div class="mb-4">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link <?php echo ($tabs === 'list') ? ('active') : ('') ?>" aria-current="page" href="/comics">All Comics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($tabs === 'details') ? ('active') : ('disabled') ?>" href="/comics">Comic Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($tabs === 'new') ? ('active') : ('') ?>" href="/comics/create">Add New Comics</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($tabs === 'update') ? ('active') : ('disabled') ?>" href="">Update Comic</a>
        </li>
    </ul>
</div>