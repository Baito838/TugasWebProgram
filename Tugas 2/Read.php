<?php 
require 'Function.php';
$plg = query("SELECT * FROM data_pelanggan");
$conn = mysqli_connect("localhost","root","", "db_hotel");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Data Pelanggan</title>
    <style>
      * {
        padding: 0;
        margin: 0;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      }
      .body {
        background-color: greenyellow;
        display: flex;
        justify-content: center;
      }
      .card {
        padding: 10px 20px;
        margin-top: 30px;
        background: rgba(255, 255, 255, 0.57);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
      }
      .data {
        padding: 10px;
      }
      .total {
        text-align: center;
      }
      .head-card {
        display: flex;
        justify-content: space-between;
      }
      .aksi {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 5px;
      }
      td {
        padding: 5px;
        text-align: center;
      }
      h1 {
        font-size: 1.5rem;
      }
    </style>
  </head>
  <body class="body">
    <section class="card">
      <section class="head-card">
        <div><h1>Data Pelanggan <i class="fa-solid fa-person-shelter"></i></h1></div>
        <div>
            <a href="Create.php">
                <button type="button" class="btn btn-primary">
                    <i class="fa-solid fa-plus"></i> 
                </button>
            </a>
        </div>
      </section>
      <form action="">
        <table class="data">
          <tr class="isi table-light">
            <td class="border-bottom border-dark">No</td>
            <td class="border-bottom border-dark">Nama Pelanggan</td>
            <td class="border-bottom border-dark">Alamat</td>
            <td class="border-bottom border-dark">Tgl Masuk</td>
            <td class="border-bottom border-dark">Jenis Kamar</td>
            <td class="border-bottom border-dark">Nomer Kamar</td>
            <td class="border-bottom border-dark">Biaya</td>
            <td class="border-bottom border-dark">Lama Inap</td>
            <td class="border-bottom border-dark">Total Bayar</td>
            <td class="border-bottom border-dark">Aksi</td>
          </tr>
          <?php $no = 1;?>
          <?php $total = 0;?>
          <?php foreach ($plg as $row) : ?>
          <tr class="isi">
            <td><?= $no; ?></td>
            <td><?= $row["nama"];?></td>
            <td><?= $row["alamat"];?></td>
            <td><?= $row["tanggal"];?></td>
            <td><?= $row["jenis"];?></td>
            <td><?= $row["nomer"];?></td>
            <td><?= $row["biaya"];?></td>
            <td><?= $row["lama_inap"];?></td>
            <td><?= $row["total"];?></td>
            <td class="aksi">
                <a href="Update.php">
                    <button type="button" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                </a>
                <a href="Delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Ah yang bener ?')">
                    <button type="button" class="btn btn-danger">
                        <i class="fa-solid fa-trash-can"></i>
                    </button>
                </a>
            </td>
          </tr>
          <?php $no++; ?>
          <?php $total += $row["total"];;?>
          <?php endforeach; ?>
          <tr>
            <td class="border-top border-dark" colspan="8">Total Seluruh</td>
            <td class="border-top border-dark"><?= $total?></td>
          </tr>
        </table>
      </form>
    </section>



    <!-- script in here -->
    <script src="https://kit.fontawesome.com/308efbf9d4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  </body>
</html>
