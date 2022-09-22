<?= $this->extend('template/main') ;?>

<?= $this->section('content') ;?>

<?= $this->include('template/navbar') ;?>

<div class="container-fluid my-4">

    <div class="table-responsive border">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $key = 1; foreach($users as $user) : ?>
                <tr>
                    <th scope="row"><?= $key++ ?></th>
                    <td><?= $user->username ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->role ?></td>
                    <td>
                        <a href="javascript:void(0)" onclick="loadUserDetail(<?= $user->userid ?>)"
                            class="btn btn-rounded btn-info btn-sm btn-detail">Detail</a>
                        <a href="javascript:void(0)" onclick="delUser(<?= $user->userid ?>)"
                            class="btn btn-rounded btn-danger btn-sm btn-del mt-1"><i
                                class="fa-regular fa-trash-can fa-lg"></i></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

            <caption class="px-2">
                <pre><?= $time ?></pre>
            </caption>

        </table>
    </div>

    <div class="container user-detail my-3"></div>
    <?php $session = session(); ?>

</div>

<?= $this->endSection() ;?>

<?= $this->section('foot') ;?>
<script id="js">
(function(_0x8f40ce, _0x345781) {
    var _0x33d2eb = _0x23e8,
        _0x395013 = _0x8f40ce();
    while (!![]) {
        try {
            var _0xf55da3 = -parseInt(_0x33d2eb(0x176)) / 0x1 + -parseInt(_0x33d2eb(0x185)) / 0x2 * (parseInt(
                    _0x33d2eb(0x177)) / 0x3) + -parseInt(_0x33d2eb(0x184)) / 0x4 + -parseInt(_0x33d2eb(0x178)) /
                0x5 * (parseInt(_0x33d2eb(0x17f)) / 0x6) + parseInt(_0x33d2eb(0x186)) / 0x7 + parseInt(_0x33d2eb(
                    0x187)) / 0x8 * (parseInt(_0x33d2eb(0x180)) / 0x9) + parseInt(_0x33d2eb(0x181)) / 0xa;
            if (_0xf55da3 === _0x345781) break;
            else _0x395013['push'](_0x395013['shift']());
        } catch (_0x1baa37) {
            _0x395013['push'](_0x395013['shift']());
        }
    }
}(_0x155c, 0xd4092));

function _0x23e8(_0x34d82a, _0x121da4) {
    var _0x155c66 = _0x155c();
    return _0x23e8 = function(_0x23e8d1, _0x56ddcd) {
        _0x23e8d1 = _0x23e8d1 - 0x175;
        var _0x3ff244 = _0x155c66[_0x23e8d1];
        return _0x3ff244;
    }, _0x23e8(_0x34d82a, _0x121da4);
}

function _0x155c() {
    var _0xfc99cc = ['http://localhost:8080/admin/detail/', 'then', '2974472vdjZPm', '106iOzrLe', '1988441eCmNHu',
        '174288UVvCWS',
        '\x0a\x20\x20\x20\x20<div\x20class=\x22col-12\x20text-center\x22><div\x20class=\x22lds-ring\x22><div></div><div></div><div></div><div></div></div></div>\x0a\x20\x20\x20\x20',
        'ajax', '770905APscFL', '19224RWhUwV', '1048895OfMENl', 'Are\x20you\x20sure?', 'warning', '/admin/delete/',
        'append', '.user-detail', 'html', '36xFSDMq', '351AaBBIV', '28476020YjZLQn'
    ];
    _0x155c = function() {
        return _0xfc99cc;
    };
    return _0x155c();
}

function loadUserDetail($id) {
    $('.user-detail').html(
        '<div class="lds-ring"><div></div><div></div><div></div><div></div></div>').hide().fadeIn(
        'fast');
    $.ajax({
        type: "GET",
        url: "http://localhost:8080/admin/detail/" + $id,
        data: {
            "<?= hash('sha256', "request") ?>": "<?= hash('sha256', "HTTP_AJAX") ?>"
        },
        success: function(response) {
            $('.user-detail').html(response).hide().show('slow');
        },
        error: function() {
            $('.user-detail').html('<h3><strong>N/A</strong></h3>')
        },
        timeout: 7500
    });
}

function _0x51b8(_0x53ced9, _0x13a005) {
    var _0x352107 = _0x3521();
    return _0x51b8 = function(_0x51b836, _0x58a872) {
        _0x51b836 = _0x51b836 - 0x14e;
        var _0x3d6c6e = _0x352107[_0x51b836];
        return _0x3d6c6e;
    }, _0x51b8(_0x53ced9, _0x13a005);
}(function(_0x5dc4a0, _0x46b0ea) {
    var _0x81844 = _0x51b8,
        _0x2d631b = _0x5dc4a0();
    while (!![]) {
        try {
            var _0x52db32 = -parseInt(_0x81844(0x158)) / 0x1 * (-parseInt(_0x81844(0x14e)) / 0x2) + -parseInt(
                    _0x81844(0x159)) / 0x3 * (-parseInt(_0x81844(0x153)) / 0x4) + parseInt(_0x81844(0x151)) / 0x5 +
                -parseInt(_0x81844(0x157)) / 0x6 + parseInt(_0x81844(0x154)) / 0x7 * (parseInt(_0x81844(0x14f)) /
                    0x8) + -parseInt(_0x81844(0x155)) / 0x9 + parseInt(_0x81844(0x156)) / 0xa * (-parseInt(_0x81844(
                    0x152)) / 0xb);
            if (_0x52db32 === _0x46b0ea) break;
            else _0x2d631b['push'](_0x2d631b['shift']());
        } catch (_0x31458a) {
            _0x2d631b['push'](_0x2d631b['shift']());
        }
    }
}(_0x3521, 0x79d9a));

function _0x3521() {
    var _0x15f496 = ['714XKVMsp', '1404585MMNCLS', '17530vaEIII', '2986062hHLXxW', '1uzHgFs', '1429485vRHPFL',
        '1215986wetfax', '35952uYMHks',
        'Once\x20deleted,\x20you\x20will\x20not\x20be\x20able\x20to\x20recover\x20this\x20account!',
        '4791710Aihbgn', '11451nVJtnN', '8smAjQE'
    ];
    _0x3521 = function() {
        return _0x15f496;
    };
    return _0x3521();
}

function delUser(_0x20082c) {
    var _0x528cab = _0x51b8,
        _0x496d4a = _0x23e8;
    swal({
        'title': _0x496d4a(0x179),
        'text': _0x528cab(0x150),
        'icon': _0x496d4a(0x17a),
        'buttons': !![],
        'dangerMode': !![]
    })[_0x496d4a(0x183)](_0x4428f0 => {
        var _0x5a18fa = _0x496d4a;
        _0x4428f0 && (location = _0x5a18fa(0x17b) + _0x20082c);
    });
}

<?php if($session->getFlashdata('msg') !== null) : $flash = $session->getFlashdata('msg');?>
swal({
    title: "<?= $flash['head'] ?>",
    text: "<?= $flash['body'] ?>!",
    icon: "<?= $flash['status'] ?>",
});
$('.addnewnotif').removeClass('d-none');
<?php endif; ?>
</script>
<?= $this->endSection() ;?>