<?php
//! validasi

if(isset($_POST['data'])==""){
    echo "data kosong";
    //* Cek data jika data kosong
}                   
else{
    $input = $_POST['data'];
    $var = "/^[a-zA-Z]*$/";
    if(!preg_match($var,$input)){
        echo "Data tidak sesuai ketentuan, masukan hanya alphabet saja";
        //* validasi untuk alphabetnya
    }
    //* kondisi ketika data yang diinput benar
    else echo "Input kamu benar";
}
?>
/* Poin penting pada proses validasi ini ada pada file cek_alphabet.php. Perhatikan hal – hal berikut ini :
$var = "/^[a-zA-Z]*$/";
Pertama kita simpan dulu nilai variabel yang akan diperbolehkan didalam $var.
Selanjutnya data akan dicek pada percabangan IF menggunakan fungsi preg_match
if(!preg_match($var,$input)) */


/*
if(isset($_POST['data'])==""){
echo "data kosong";
//* Cek data jika data kosong
}
else{
if(cek_alphabet($_POST['data'])){
echo "Data tidak sesuai ketentuan, masukan hanya alphabet saja";
//* validasi untuk alphabetnya
}
//* kondisi ketika data yang diinput benar
else echo "Input kamu benar";
}

function cek_alphabet($nilai){
if(!preg_match("/^[a-zA-Z]*$/",$nilai)){
$hasil=true;
}else{
$hasil=false;
}
return $hasil;
}
*/

//*Membuat Function Untuk Mengecek Alphabet
Untuk Membatasi nilai input form hanya boleh diisi alphabet saja, Anda bisa juga
menggunakan/membuat sebuah function PHP yang bertugas
untuk mengecek nilai variabel Alphabet tersebut. Jadi tidak usah menulis fungsi preg_match berkali - kali ketika
membutuhkan
fungsi untuk melakukan pengecekan data, cukup menyelipkan fungsi didalam percabangan IF.*/