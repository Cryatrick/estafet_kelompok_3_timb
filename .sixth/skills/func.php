
//dibuat oleh kevin pratama 2532056
<?php
function tampilMahasiswa($pdo) {
    $stmt = $pdo->query("SELECT * FROM mahasiswa ORDER BY id DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function uploadFoto($file) {
    $namaFile = $file['name'];
    $tmpName  = $file['tmp_name'];
    $folder   = "uploads/" . $namaFile;
    
    if (move_uploaded_file($tmpName, $folder)) {
        return $namaFile;
    }
    return false;
}