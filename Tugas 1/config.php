<?php 
$conn = mysqli_connect("localhost","root","","tugas_web");
function query($query){
    global $conn;
    // parameter pertama adalah koneksi, kedua adalah syntax query nya
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows [] = $row;
    }
    return $rows;
}

function InsertData($data){
    // ambil data dari tiap element dalam form
    // $nama - $email adalah scope variabel local
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $gender = htmlspecialchars($data["jk"]);
    $status = htmlspecialchars($data["status"]);
    $telfon = htmlspecialchars($data["telfon"]);
    $alamat = htmlspecialchars($data["alamat"]);
    //memasukan query
    // global conn adalah scope variabel global
    global $conn;
    // harus berurutan sesuai field pada table
    $query = "INSERT INTO mahasiswa(nim,nama,gender,status,telfon,alamat) VALUES ('$nim','$nama','$gender','$status','$telfon','$alamat')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];

    // Upload gambar
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $gender = htmlspecialchars($data["jk"]);
    $status = htmlspecialchars($data["status"]);
    $telfon = htmlspecialchars($data["telfon"]);
    $alamat = htmlspecialchars($data["alamat"]);

    // harus berurutan sesuai field pada table
    $query = "UPDATE mahasiswa SET 
            nim = '$nim', 
            nama = '$nama', 
            gender = '$gender', 
            status = '$status', 
            telfon = '$telfon',
            alamat = '$alamat' 
            WHERE id = $id ";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>