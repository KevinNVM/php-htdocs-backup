<?php 

    $body = htmlspecialchars($notif->notif_body);
    #h1
    $body = str_replace(['[h1]', '[H1]'], '<h1 class="d-inline">', $body);
    $body = str_replace(['[/h1]', '[/H1]'], '</h1>', $body);
    #h2
    $body = str_replace(['[h2]', '[H2]'], '<h2 class="d-inline">', $body);
    $body = str_replace(['[/h2]', '[/H2]'], '</h2>', $body);
    #h3
    $body = str_replace(['[h3]', '[H3]'], '<h3 class="d-inline">', $body);
    $body = str_replace(['[/h3]', '[/H3]'], '</h3>', $body);
    #b
    $body = str_replace(['[b]', '[B]'], '<strong>', $body);
    $body = str_replace(['[/b]', '[/B]'], '</strong>', $body);
    #p
    $body = str_replace(['[p]', '[P]'], '<p>', $body);
    $body = str_replace(['[/p]', '[/P]'], '</p>', $body);
    #u
    $body = str_replace(['[ul]', '[UL]'], '<span class="text-decoration-underline">', $body);
    $body = str_replace(['[/ul]', '[/UL]'], '</span>', $body);
    #i
    $body = str_replace(['[i]', '[I]'], '<span class="fst-italic">', $body);
    $body = str_replace(['[/i]', '[/I]'], '</span>', $body);
    #sm
    $body = str_replace(['[sm]', '[SM]'], '<small>', $body);
    $body = str_replace(['[/sm]', '[/SM]'], '</small>', $body);
    #br
    $body = str_replace(['[br]', '[BR]'], '<br>', $body);
    #hr
    $body = str_replace(['[hr]', '[HR]'], '<hr>', $body);
    #link
    $body = str_replace(array('[link {', '[LINK {'), '<a href="', $body);
    $body = str_replace(array('[link{', '[LINK{'), '<a href="', $body);
    $body = str_replace(array('}]', '} ]'), '">', $body);
    $body = str_replace(array('[/link]', '[/LINK]'), '</a>', $body);
    #muted
    $body = str_replace(['[m]', '[M]'], '<span class="text-muted">', $body);
    $body = str_replace(['[/m]', '[M]'], '</span>', $body);




?>

<?= $this->extend('template/main') ;?>

<?= $this->section('content') ;?>
<?= $this->include('template/navbar') ;?>
<a href="<?= session()->get('_ci_previous_url') ?>" class="btn btn-primary btn-rounded btn-floating my-3 mx-3"><i
        class="fas fa-arrow-left fa-lg"></i></a>
<div class="container">
    <div class="p-2 rounded-3" aria-label="notification title">
        <h1 class="text-truncate" title="Title: <?= $notif->notif_head ?>"><?= $notif->notif_head ?></h1>
    </div>
    <section id="message">
        <div class="border p-2 rounded-3" aria-label="notification message">
            <?= $body ?>
        </div>
        <small class="text-muted d-block">
            <?= $notif->created_at ?><br>
            <?= $time ?>
        </small>
    </section>
</div>
<?= $this->endSection() ;?>