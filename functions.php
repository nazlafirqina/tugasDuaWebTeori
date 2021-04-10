<?php 

$conn = mysqli_connect("localhost", "root", "", "person_041");


function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows; 

}
function tambah($data){ 
    global $conn;
    $idPerson =htmlspecialchars($data["idPerson"]);
    $nama =htmlspecialchars($data["nama"]);
    $gender =htmlspecialchars($data["gender"]);
    $kotaLahir = htmlspecialchars($data["kotaLahir"]);
    $tanggalLahir =htmlspecialchars($data["tanggalLahir"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kota = htmlspecialchars($data["kota"]);
   
    //  upload gambar 
    $gambar = upload();
    if (!$gambar){
        return false;

    }
    $query = "INSERT INTO person_41 VALUES
    ('$idPerson', '$nama', '$gender', '$kotaLahir', '$tanggalLahir', '$alamat', '$kota')
    ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}
function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
 
    // cek apakah tidak ada gambar yang diupload 
    if($error === 4){
         echo " <script> 
             alert('pilih gambar terlebih dahulu');
             </script>";
         return false;
    }
 
    // Mengecek yang diupload gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg','png'];
    $ekstensiGambar =explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
 
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)){
         echo " <script> 
         alert('Yang anda upload bukanlah gambar');
         </script>";
         return false;
    }
 
    // cek apakah ukuran gambarnya terlalu besar
    if($ukuranFile > 1000000){
         echo " <script> 
         alert('Ukuran Gambar Terlalu Besar');
         </script>";
         return false;
 
    }
    // lolos pengecekan, gambar siap diupload
    // generate nama baru untuk gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName,'img/'.$namaFileBaru);
    return $namaFileBaru;
 
 }

?>