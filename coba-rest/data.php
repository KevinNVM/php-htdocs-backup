<?php 

require_once('conn.php');

$result = [
        'status' => 200,
        'message' => 'Welcome to my simple rest api',
];

if (empty($_GET)) {
    $query = mysqli_query($conn, "SELECT * FROM data");
        $res = [];
    while($row = mysqli_fetch_array($query)) {
        array_push($res, [
            'id' => $row['id'],
            'title' => $row['nama'],
            'img' => $row['img'],
            'summary' => $row['summary'],
            'released_at' => $row['released_at']
        ]);
    }

    echo json_encode(
        array('result' => array_merge($result, $res))
    );
} else {
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM data WHERE id=$id");
    // $res = [];
    // while($row = mysqli_fetch_array($query)) {
    //     array_push($res, array(
    //         'id' => $row['id'],
    //         'title' => $row['nama'],
    //         'img' => $row['img'],
    //         'summary' => $row['summary'],
    //         'released_at' => $row['released_at']
    //     ));
    // }

    // echo json_encode(
    //     array('result' => $res)
    // );

    $res = [];
    while ($row = $query->fetch_assoc()) {
        $result = [
            'id' => $row['id'],
            'nama' => $row['nama'],
            'img' => $row['img'],
            'summary' => $row['summary'],
            'relesead_at' => $row['released_at']
        ];
    }

    echo json_encode(['result' => array_merge($result, $res)]);
        
        
}