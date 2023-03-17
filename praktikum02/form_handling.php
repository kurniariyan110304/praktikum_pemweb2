<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa STT NF</h1>
    <form action="belajar_post.php" method = "POST">
        <!-- tipe text -->
        <label for="">Nama Mahasiswa</label><br>
        <input type="text" name="nama"><br><br>
        <!-- tipe radio -->
        <label for="">Jenis Kelamin</label><br>
        <input type="radio" name="jenkel" value="laki-laki">
            <label for="">Laki-laki</label>
        <input type="radio" name="jenkel" value="perempuan">
            <label for="">Perempuan</label><br><br>
        <!-- tipe checkbox -->
        <label for="">Mata Kuliah</label><br>
        <input type="checkbox" name="mata_kuliah" value="Basis Data">
            <label for="">Basis Data</label><br>
        <input type="checkbox" name="mata_kuliah" value="Bahasa Inggris">
            <label for="">Bahasa Inggris</label><br><br>
        <!-- tipe number -->
        <label for="">Nomor Telepon</label><br>
        <input type="number" name="nomor_telepon"><br><br>
        <!-- tipe select -->
        <label for="">Prodi</label><br>
        <select name="prodi" id="">
            <option value="">--Pilih Prodi--</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Bisnis Digital">Bisnis Digital</option>
        </select><br><br>
        <!-- tipe button -->
        <button type="submit">Kirim</button>
        <button type="button">Contoh</button>
        <button type="reset">Hapus</button>
    </form>
</body>
</html>