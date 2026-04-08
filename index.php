<?php

$host = "localhost";
$db = "nama_database_kalian";
$user = "root";
$pass = "" ;

try {
    $pdo = new PDO ("mysql:host=$host;dbname =$db", $user , $pass);
    $pdo->setAttribute(PDO:ATTR_ERRMODE, PDO:ERRMODE_EXCEPTION);
 } catch (PDOException $e)  {
    die("koneksi gagal:" . $e->getMessage());
 }
?>
 
<?php
require_once 'config.php'; 

$query = mysqli_query($conn, "SELECT * FROM users");
echo "Selamat datang di " . $base_url;
?>

echo "<table border='1' cellpadding='10' cellspacing='0'>
</table>
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>;
echo "<table border='1' cellpadding='10' cellspacing='0'>
        <tr>
            <th>ID</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>";

if (isset(POST[
    spyload =[
    
            mahasiswa_npm => "$POST_npm"
            mahasiswa_nama => "$POST_nama"
            mahasiswa_prodi => "$POST_prodi"
    ]  
    simpanDatabase($pdo, mahasiswa', spyload)
    header("location")

if (isset($_GET['status'] && $_GET['status'] == 'sukses')

try {
    $stmt = $pdo->query("SELECT * FROM mahasiswa ORDER BY id desc");
    $daftar_mahasiswa = $stmt
}
    
    



    

