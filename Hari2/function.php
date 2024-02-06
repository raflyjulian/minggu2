<?php
//str_replace mengganti huruf
$str = "hello";
echo str_replace("e", "o", $str);

echo "<br>";
echo "<br>";

//date_creaete membuat/menambah tanggal
$date = date_create('2024-02-02');
date_modify($date, "+3 days");
echo "tanggal setelah di tambah 3 hari: " .date_format($date, 'Y-m-d');

echo "<br>";
echo "<br>";

//sum() menjumlahkan
function sum($x, $y){
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " .sum(5,10) ."<br>";
echo "7 + 10 = " .sum(7,10);

echo "<br>";
echo "<br>";

//strpos untuk menemukan posisi kemunculan pertama dari sebuah string di dalam

$pertama = "Saya tinggal Di bogor";
$kedua = "Di";

$jumlah = strpos($pertama, $kedua);

if($jumlah !== false){
    echo "Substring '$kedua' ditemukan pada posisi $jumlah";
}else{
    echo "substring '$string tidak ditemukan dalam string";
}

echo "<br>";
echo "<br>";

//rand mengacak angka
$angka_acak = rand(1,100);
echo "angka acak antara 1 dan 100: " .$angka_acak;

echo "<br>";
echo "<br>";

//strtoupper kapital semua
$data = "hello";
echo strtoupper($data);

echo "<br>";
echo "<br>";

//is_array mengecek variabelnya aray apa bukan
$tgl = [1, 2, 3];

if (is_array($tgl)) {
    echo "data adalah array";
} else {
    echo "data bukan array";
}

echo "<br>";
echo "<br>";

//array map
$kendaraan = array('mobil', 'motor', 'sepeda');
$upper = array_map(function($value){

    return strtoupper($value);
}, $kendaraan);
echo '<pre>'; print_r($upper);

echo "<br>";
echo "<br>";

// str_repeat = mengulang kalimat sebanyak 2 kali atau lebih 
echo str_repeat("hello world" , 2). "<br>";

echo "<br>";
echo "<br>";

//array_pop = menghapus elemen terakhir 
$asal = array('jeruk','pisang','apel');
$buah = array_pop($asal);
print_r($asal);

echo "<br>";
echo "<br>";

// strtolower =untuk mengubah huruf besar ke huruf kecil
$nama = "ZAENI";
echo strtolower($nama);

echo "<br>";
echo "<br>";

// strlen = untuk menghitung jumlah huruf dalam string atau karakter
$kata = "hello world";
echo "jumlah kata: " .strlen($kata) . "<br>";

if (strlen($kata) > 8 ){
    echo "kata  '$kata' memiliki lebih dari 8 karakter ";
}else {
    echo "kata  '$kata' memiliki 8 karakter atau kurang ";
}

echo "<br>";
echo "<br>";

// sqrt = untuk mencari akar pangkat
echo sqrt(100);

// array_sum = untuk menjumlah suatu nilai dari array 
$nilai = [
    [
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [ 
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($nilai as $nilai_akhir) {
    $nilai = $nilai_akhir['nilai'];
    
    $totalNilai = array_sum($nilai);

    echo "Jumlah Nilai: $totalNilai\n";
}

echo "<br>";
echo "<br>";

// rtrim = untuk menghapus kata di kanan 
$str = "hello world";
echo $str . "<br>";
echo rtrim($str, "world");

echo "<br>";
echo "<br>";

// strtr = untuk mengubah variabel yg sudah ditentukan 
$arr = array("Hello" => "Hi" , "World" => "Earth");
echo strtr("Hello World" , $arr);

echo "<br>";
echo "<br>";

// in_array = untuk menentukan apakah benar array atau tidak  
$kendaraan = ['Mobil','Motor','Sepeda'];
if (in_array('Mobil' , $kendaraan)){
    echo 'ok';
}else {
    echo 'salah';
}

echo "<br>";
echo "<br>";

// abs = mengubah nilai minus menjadi plus 
echo (abs(-6.7));
echo (abs(-6));

echo "<br>";
echo "<br>";

//floor = membulatkan nilai ke bawah ke bilangan yang terdekat 
echo (floor(0.2));
echo (floor(7.2));
echo (floor(-6.2));

echo "<br>";
echo "<br>";

// array_push = untuk menambahkan nilai elemen di dalam array ke belakang 
//array_unshift = untuk menambahkan elemen di dalam array dari depan
$buah = array("jeruk","pisang");
array_push($buah, "semangka","melon");
print_r($buah);

//  ceil = membulatkan angka ke atas 
echo ceil(0.7);
echo "<br>";
echo ceil(3.7);
echo "<br>";
echo ceil(-5.7);
echo "<br>";
echo ceil(5);
echo "<br>";

echo "<br>";
echo "<br>";

// sort = mengurutkan nilai elemen array dari yang terkecil 
$array = array(0,10,8,6,5,3);
sort($array);
print_r($array);

echo "<br>";
echo "<br>";

// ucfirst = mengubah huruf pertama dari string menjadi kapital
$str ="wajib ngulik";
echo "sebelum: $str <br>";
echo "sesudah:" . ucfirst($str);

echo "<br>";
echo "<br>";

// array_reverse = mengurutkan elemen dari belakang 
$rmbl = ['PPLG XI-5','PPLG XI-4','PPLG XI-3'];
$result = array_reverse($rmbl);
print_r($rmbl);

echo "<br>";
echo "<br>";

//arsort = mengurutkan dari yang terbesar 
$angka =['1,5,6,10'];
arsort ($angka);
print_r ($angka);

echo "<br>";
echo "<br>";

// compact = membuat variabel jadi array 
$firstname = "Rafly";
$lastname = "Julian";
$age = "16";

$result = compact("firstname", "lastname", "age");

print_r($result);
 
// file_exists = mencari file dalam directory 
echo file_exists("function.php");

echo "<br>";
echo "<br>";

// gettype =  untuk menentukan tipe data apa dan mengambil tipe data dari variabel 
$c = "hello";
echo gettype($c) . "<br>";

echo "<br>";
echo "<br>";

// array_unique = menghapus duplikat 
$buah = ["apel","pisang","orange","apel"];
$uniq = array_unique($buah);
print_r($uniq);

echo "<br>";
echo "<br>";

//  array_shift = mengambil index ke 0 / value yng pertama
$a = array('pisang','apel','mangga');
$b = array_shift($a);
print_r($b);


echo "<br>";
echo "<br>";

function lenght($kalimat){
    echo "jumlah huruf: " .strlen(preg_replace('/[^a-zA-Z]/', '', $kalimat)) ."<br>";
    echo "jumlah kata: ". str_word_count($kalimat);
}
lenght('halo nama saya rafly')

?>