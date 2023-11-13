<!-- 1. tugas class lama -> dilanjutkan dengan pemberian nilai class dan object
2. buatkan structur function contruct dan desctruct -->

<?php


// Langkah 1: Mendefinisikan sebuah kelas bernamaLaptop Mahasiswa
class Laptop
{
    // Langkah 2: Mendefinisikan tiga properti: $NamaLaptop, $spek, dan $inci
    public $NamaLaptop;
    public $spek;
    public $inci;

    // Langkah 3: Mendefinisikan konstruktor (__construct) dengan tiga parameter
    function __construct($NamaLaptop, $spek, $inci)
    {
        // Langkah 4: Menginisialisasi properti objek dengan nilai yang diteruskan
        $this->NamaLaptop = $NamaLaptop . "<br>";    // Inisialisasi NamaLaptop
        $this->spek = $spek . "<br>";  // Inisialisasi spek
        $this->inci = $inci . "<br>";      // Inisialisasi inci
    }

    // Langkah 5: Mendefinisikan destruktor (__destruct)
    function __destruct()
    {
        // Langkah 6: Mencetak nilai properti objek
        echo "NamaLaptop : " . $this->NamaLaptop . "<br>",
             "spek : " . $this->spek . "<br>",
             "inci : " . $this->inci . "<br>";
    }
}

// Langkah 7: Membuat objek $obMhs dari kelas Mahasiswa dan memanggil konstruktor
$Jlaptop = new Laptop('Acer', 'Core i 5', '13 inci');
$Jlaptop = new Laptop('Lenovo', 'Core i 7', '14 inci');
$Jlaptop = new Laptop('Asus', 'Core i 3', '15 inci');

// Langkah 8: Program berlanjut

// Langkah 9: Ketika program selesai berjalan atau objek dihancurkan secara eksplisit, destruktor akan dipanggil dan mencetak nilai properti objek.

?>