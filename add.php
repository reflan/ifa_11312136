<?php 
    include "../connection.php";

    $mhsNpm       = $_POST['mhsNpm'];
    $mhsNama   = $_POST['mhsNama'];
    $mhsAlamat       = $_POST['mhsAlamat'];
    $mhsFakultas       = $_POST['mhsFakultas'];
    $MhsProdi       = $_POST['MhsProdi'];
    
    // isi query untuk cek data mahasiswa by npm
    $sql1 = "";
    $check = $connect->query($sql1);
    $reason = "";
    $success = true;

    if($check->num_rows > 0){
        $success = false;
        $reason = "npm sudah ada";
    }else{
        // query untuk insert data
        $sql2 = "";
        
        $result = $connect->query($sql2);

        if(!$result){
            $success = false;
            $reason = "Gagal add Mahasiswa";
        }
    }

    echo json_encode(array(
        "success" => $success,
        "reason" =>$reason,
    ));
