
//dibuat kevin pratama 2532056
<?php
require_once 'conn.php';
require_once 'func.php';

if (isset($_POST['simpan'])) {
    $foto = uploadFoto($_FILES['mahasiswa_pasphoto']);
    
    $sql = "INSERT INTO mahasiswa (mahasiswa_npm, mahasiswa_nama, mahasiswa_prodi, 
            mahasiswa_pasphoto, mahasiswa_ipk, mahasiswa_tempatlahir, mahasiswa_tanggallahir) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
            
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['mahasiswa_npm'],
        $_POST['mahasiswa_nama'],
        $_POST['mahasiswa_prodi'],
        $foto,
        $_POST['mahasiswa_ipk'],
        $_POST['mahasiswa_tempatlahir'],
        $_POST['mahasiswa_tanggallahir']
    ]);
    
    header("Location: index.php?page=home&status=sukses");
}

if (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    
    $stmt = $pdo->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->execute([$id]);
    
    header("Location: index.php?page=home&status=terhapus");
}