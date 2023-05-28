<form method="POST">
    <label>Siapa Nama Anda : </label>
        <input type="text" name="nama" placeholder="Masukan Nama Anda">
    <button type="Submit">Kirim</button>
</form>

<?php

// require __DIR__ . '/vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    echo "Nama Anda Adalah <b>$nama</b>";
}

?>
