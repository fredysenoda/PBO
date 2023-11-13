<?php

echo " Tugas Nama Laptop <br>";
echo "<br>";
echo "<br>";

class Laptop{
    

    function Acer()
    {
        echo "Laptop : Acer<br>";
        echo "Spek : Core i3 <br>";
        echo "Inci : 13 <br>";
    }
    function Asus()
    {
        echo "Laptop : Asus<br>";
        echo "Spek : Core i5 <br>";
        echo "Inci : 14 <br>";
    }
    function Lenovo()
    {
        echo "Laptop : Lenovo <br>";
        echo "Spek : Core i7 <br>";
        echo "Inci : 15 <br>";
    }
    function Hp()
    {
        echo "Laptop : Hp <br>";
        echo "Spek : intel Core <br>";
        echo "Inci : 15 <br>";
    }
}
$nama = new Laptop();
echo $nama->Acer();
echo "<br>";
echo $nama->Asus();
echo "<br>";
echo $nama->Lenovo();
echo "<br>";
echo $nama->Hp();


?>