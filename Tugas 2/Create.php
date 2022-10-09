<?php 
$conn = mysqli_connect("localhost","root","", "tugas_web");
require 'Function.php';

if(isset( $_POST["submit"]) ){
    if( $_POST["nama"] == "" ||$_POST["alamat"] == "" ||$_POST["tanggal"] == "" ||$_POST["jenis"] == "" ||$_POST["nomer"] == ""||$_POST["biaya"] == ""||$_POST["lama_inap"] == ""){
        echo "
        <script>
            alert('Data Tidak Boleh kosong');
        </script>
        ";
    } else if(InsertData($_POST) > 0) {
        echo "
        <script>
            alert('Data Berhasil Diinput');
            document.location.href = 'Read.php';
        </script>
        ";
    }
     else {
  
  
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet"integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"crossorigin="anonymous"/>
    <script src="assets/js/jquery.js"></script>
    <title>Tambah Data</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        .price{
            display: flex;
            justify-content: space-between;
        }
        body{
            background-color: aquamarine;
            display: flex;
            justify-content: center;
        }
        section{
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }
        tr {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 10px;
        }
        .judul {
            text-align: center;
        }
        .tombol {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <section>
        <div class="judul">
            <h1>Data Pelanggan</h1>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama</td>
                    <td style="width: 50%;">
                        <input type="text" class="form-control" name="nama" id="nama" maxlength="25" placeholder="Nama Pelanggan">
                    </td>
                </tr>
                <tr>
                    <td style="width: 50%;">Alamat</td>
                    <td><textarea class="form-control" name="alamat" id="alamat" cols="22" rows="2" maxlength="100" placeholder="max 100 karakter"></textarea></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td style="width: 50%;">
                        <input type="date" class="form-control w-100" name="tanggal" id="tanggal">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kamar</td>
                    <td style="width: 30%;">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis" id="jenis" value="Deluxe">
                            <label class="form-check-label" for="jenis">Deluxe</label>
                          </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenis" id="jenis" value="Standard">
                          <label class="form-check-label" for="jenis">Standard</label>
                        </div>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenis" id="jenis" value="Ekonomi">
                          <label class="form-check-label" for="jenis">Ekonomi</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Nomer Kamar</td>
                    <td style="width: 50%;">
                        <select name="nomer" id="nomer" class="form-select" aria-label="Default select example">
                            <option selected>Nomer Kamar</option>
                            <option selected>Ekonomi</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option selected>Standard</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option selected>Deluxe</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Biaya</td>
                    <td style="width: 50%;">
                        <select step="any" name="biaya" id="biaya" class="form-select" aria-label="Default select example">
                            <option selected>Biaya</option>
                            <option class="price" value="600000">
                                <div>Deluxe</div>
                                <div>600.000</div>
                            </option>
                            <option class="price" value="450000">
                                <div>Standard</div>
                                <div>450.000</div>
                            </option>
                            <option class="price" value="300000">
                                <div>Ekonomi</div>
                                <div>300.000</div>
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Lama Inap</td>
                    <td style="width: 50%;">
                    <input step="any" class="form-control" type="number" name="lama_inap" id="lama_inap">
                </td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td style="width: 50%;">
                    <input class="form-control" type="text" name="total" id="total" Readonly value="0">
                </td>
                </tr>
            </table>
            <div class="tombol">
                <a href="Read.php"><button type="button" class="btn btn-danger">Batal</button></a>
                <button name="submit" id="submit" type="submit" class="btn btn-success">Tambah</button>
            </div>
        </form>
    </section>
    <!-- perhitungan aritmatika -->
    <script type="text/javascript">
    $("#biaya").keyup(function(){   
    var a = parseFloat($("#biaya").val());
    var b = parseFloat($("#lama_inap").val());
    var c = a*b;
    $("#total").val(c);
    });
    
    $("#lama_inap").keyup(function(){
    var a = parseFloat($("#biaya").val());
    var b = parseFloat($("#lama_inap").val());
    var c = a*b;
    $("#total").val(c);
    });
    </script>
    <!-- script in here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/308efbf9d4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>