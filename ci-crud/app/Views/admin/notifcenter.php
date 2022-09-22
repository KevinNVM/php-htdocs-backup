<?= $this->extend('template/main') ;?>
<?= $this->section('content') ;?>

<?= $this->include('template/navbar') ;?>
<div class="container my-4">
    <div class="row d-flex justify-content-center">
        <div class="col sticky-top">
            <a class="btn btn-primary btn-rounded my-1 ms-2" data-mdb-toggle="collapse" href="#addnewcontainer"
                role="button" aria-expanded="false" aria-controls="addnewcontainer">
                <i class="fas fa-plus"></i> Add New
            </a>
            <button class="btn btn-danger btn-rounded btn-del-all my-1 ms-2">
                <i class="fas fa-trash"></i> Empty Notifications
            </button>
        </div>
        <?php #d(\Config\Services::validation()->hasError('notif_body'), \Config\Services::validation()->hasError('notif_body')); ?>
        <div class="col-12 border rounded-1 mt-4 px-4 pb-3 pt-2 collapse" id="addnewcontainer">
            <form action="<?= base_url('admin/notifications_center/new') ?>" method="POST">
                <h5>New Notification</h5>
                <div class="row row-cols-1">
                    <div class="col mb-4">
                        <div class="form-outline">
                            <input type="text" id="title"
                                class="form-control <?= ($validation->hasError('notif_head'))?'is-invalid':'' ?>"
                                data-mdb-showcounter="true" maxlength="50" name="notif_head"
                                value="<?= old('notif_head') ?>" />
                            <label class="form-label" for="title">Title</label>
                            <div class="invalid-feedback"><?= $validation->getError('notif_head') ?></div>
                            <div class="form-helper"></div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="form-outline">
                            <textarea name="notif_body" id="msg" cols="30" rows="12"
                                class="form-control <?= ($validation->hasError('notif_body'))?'is-invalid':'' ?> pt-1"
                                data-mdb-showcounter="true" maxlength="1000"
                                placeholder="You can use html tag to customize the messages"><?= old('notif_body') ?></textarea>
                            <label class="form-label" for="title">Messages</label>
                            <div class="invalid-feedback"><?= $validation->getError('notif_body') ?></div>
                            <div class="form-helper"></div>
                        </div>
                        <a class="btn btn-primary my-2" data-mdb-toggle="collapse" href="#htmlhint" role="button"
                            aria-expanded="false" aria-controls="htmlhint">
                            <i class="fa-solid fa-circle-info fa-lg"></i> HTML Tag Usage
                        </a>
                        <div class="collapse mt-3 p-2 border rounded shadow text-muted" id="htmlhint">
                            <h5>HTML Tag Usage</h5>
                            <p>
                                Available Tag : <br>
                                <br>
                                # Font Sizing <br>
                                &raquo; [h1][/h1] ex: [h1]Hello World[/h1] <br>
                                &raquo; [h2][/h2] <br>
                                &raquo; [h3][/h3] <br>
                                &raquo; [sm][/sm] <br>
                                <br>

                                # Font Decoration <br>
                                &raquo; [b][/b] ex: [b]Hello World[/b] <br>
                                &raquo; [i][/i] <br>
                                &raquo; [ul][/ul] <br>
                                &raquo; [m][/m] <br>
                                <br>

                                # Break Line / New Line <br>
                                &raquo; [br] ex: Hello [br] World <br><br>

                                # Link <br>
                                &raquo; [link {url}][/link] ex: [link {https://youtube.com}]Youtube[/link]
                            </p>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-secondary btn-rounded">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 border mt-4 notif-table-container">
            <div class="table-responsive my-2">
                <table class="table table-bordered table-sm bg-transparent align-middle">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Messages</th>
                            <th scope="col">Author</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $key=1; foreach ($notifs as $notif) : ?>
                        <tr>
                            <th scope="row"><?= $key++ ?></th>
                            <td>
                                <pre class="bg-transparent fs-6"
                                    style="width: 8rem;"><?= htmlspecialchars($notif->notif_head) ?></pre>
                            </td>
                            <td class="m-0 p-0">
                                <div class="m-0 p-0" style="width: 16rem;">
                                    <textarea class="form-control w-100 bg-transparent" rows="8" cols="200"
                                        style="cursor: text;" disabled><?= $notif->notif_body ?></textarea>
                                </div>
                            </td>
                            <td><?= $notif->created_at ?></td>
                            <td><?= $notif->created_by ?></td>
                            <td>
                                <button type="button" class="btn btn-floating btn-danger"
                                    onclick="del(<?= $notif->notif_id ?>)"><i
                                        class="fas fa-trash-alt fa-lg"></i></button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                    <caption>
                        There's <span id="count"><?= count($notifs) ?></span> Notifications (<?= $time ?>)
                    </caption>

                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ;?>

<?= $this->section('foot') ;?>
<script defer>
function del(id) {
    swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this notification",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((res) => {
            if (res) {
                location = '<?= base_url('admin/notif/del') ?>/' + id;
            } else {
                swal("Delete Cancelled");
            }
        });
}
$(document).ready(function() {

    $('.btn-del-all').click(function() {
        if ($('span#count').html() != "0") {
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover all of the deleted notifications!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        swal({
                                title: "ARE YOU REALLY REALLY SURE?",
                                text: "This Action Cannot Be Undone.",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    location = '<?= base_url('admin/notif/deleteall') ?>';
                                } else {
                                    swal("Action Cancelled");
                                }
                            });
                    } else {
                        swal("Action Cancelled");
                    }
                });
        } else {
            swal("There is nothing to delete");
        }
    });


    <?php if($session->getFlashdata('msg')!==null) : $flash = $session->getFlashdata('msg');?>
    swal({
        title: "<?= $flash['head'] ?>",
        text: "<?= $flash['body'] ?>!",
        icon: "<?= $flash['status'] ?>",
    });
    <?php endif; ?>



});
</script>
<?= $this->endSection() ;?>