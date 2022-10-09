<?php 
$conn = mysqli_connect("localhost","root","","db_hotel");
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

    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $nomer = htmlspecialchars($data["nomer"]);
    $biaya = htmlspecialchars($data["biaya"]);
    $inap = htmlspecialchars($data["lama_inap"]);
    $total = htmlspecialchars($data["total"]);

    global $conn;

    $query = "INSERT INTO data_pelanggan(nama,alamat,tanggal,jenis,nomer,biaya,lama_inap,total) VALUES ('$nama','$alamat','$tanggal','$jenis','$nomer','$biaya','$inap','$total')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $nomer = htmlspecialchars($data["nomer"]);
    $biaya = htmlspecialchars($data["biaya"]);
    $inap = htmlspecialchars($data["lama_inap"]);
    $total = htmlspecialchars($data["total"]);

    $query = "UPDATE data_pelanggan SET 
            nama = '$nama', 
            alamat = '$alamat', 
            tanggal = '$tanggal', 
            jenis = '$jenis', 
            nomer = '$nomer',
            biaya = '$biaya',
            lama_inap = '$inap',
            total = '$total' 
            WHERE id = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM data_pelanggan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

?>