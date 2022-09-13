<?php 
 
$koneksi = mysqli_connect("localhost","root","","tiket_wisata_db");

if(isset($_POST['proses'])){
    
mysqli_query($koneksi, "insert into tiketwisata set
nama_lengkap = '$_POST[nama]',
nomor_identitas = '$_POST[identitas]',
no_hp = '$_POST[hp]',
tempat_wisata = '$_POST[tempatwisata]',
tanggal_kunjungan = '$_POST[tanggalkunjungan]',
pengunjung_dewasa = '$_POST[pengunjungdewasa]',
pengunjung_anak_anak = '$_POST[pengunjunganakanak]',
proses = '$_POST[proses]'");

echo "Berhasil Disimpan";
}


?>