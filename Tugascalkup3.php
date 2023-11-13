<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>----Tugas Pak Mahs----</title>
</head>
    <body>
        <form action="" method="post">
                <tr>
                    <td><label for="">K1</label></td>
                    <td><input type="number" name="K1" id="" placeholder="Masukan angka"required></td>
                </tr>
                            
                    <td>
                        <select name="Hasil" id="">
                            <option value="kali">x</option>
                            <option value="bagi">/</option>
                            <option value="tambah">+</option>
                            <option value="kurang">-</option>
                            
                        </select>
                    </td>

                <tr>
                <td><label for="">K2</label></td>
                <td><input type="number" name="K2" id="" placeholder="Masukan angka" required></td>
                </tr>
                
                <tr>
                    <td><button type="submit" name="Total">   =   </button></td>
                </tr>
        
            <?php


                class kali {
                    var $A;
                    var $B;
                    var $Total;
                    function Total(){
                        $this->Total =$_POST["Total"] = $this->A = $_POST["K1"] * $this->B = $_POST["K2"];
                        echo " Total : ".$this->Total = $_POST["Total"];
                    }
                    
                }

                class bagi {
                    var $C;
                    var $D;
                    var $Total;
                    function Total(){
                        $this->Total =$_POST["Total"] = $this->C = $_POST["K1"] / $this->D = $_POST["K2"];
                        echo " Total : ".$this->Total = $_POST["Total"];
                    }
                }

                class tambah {
                    var $F;
                    var $G;
                    var $Total;
                    function Total(){
                        $this->Total =$_POST["Total"] = $this->F = $_POST["K1"] + $this->G = $_POST["K2"];
                        echo " Total : ".$this->Total = $_POST["Total"];
                    }
                }

                class kurang {
                    var $H;
                    var $I;
                    var $Total;
                    function Total(){
                        $this->Total =$_POST["Total"] = $this->H = $_POST["K1"] - $this->I = $_POST["K2"];
                        echo " Total : ".$this->Total = $_POST["Total"];
                    }
                }


                if($_POST["Hasil"]=="kali"){
                    $kali = new kali();
                    $kali->Total();

                }elseif($_POST["Hasil"]=="bagi"){
                    $bagi = new bagi();
                    $bagi->Total();
                }
                elseif($_POST["Hasil"]=="tambah"){
                    $tambah = new tambah();
                    $tambah->Total();

                }elseif($_POST["Hasil"]=="kurang"){
                    $kurang = new kurang();
                    $kurang->Total();
                }
        
            ?>
        </form>
    </body>
</html>


