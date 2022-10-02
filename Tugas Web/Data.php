<?php 
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$gender = $_POST["jk"];
$status = $_POST["status"];
$hp = $_POST["telfon"];
$alamat = $_POST["alamat"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
    <title>Data Mahasiswa</title>
    <style>
      td {
        padding: 5px 10px;
        text-align: center;
      }
      body{
          align-items: center;
        }
    </style>
  </head>
  <body>
    <section>
      <form action="" method="post">
        <table class="table">
          <th colspan="6">Tabel Biodata</th>
          <tr>
            <td class="border-bottom border-end">NIM</td>
            <td class="border-bottom border-end">Nama</td>
            <td class="border-bottom border-end">Gender</td>
            <td class="border-bottom border-end">Status</td>
            <td class="border-bottom border-end">HP</td>
            <td class="border-bottom">Alamat</td>
          </tr>
          <tr>
            <td><?php echo $nim;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $gender;?></td>
            <td><?php echo $status;?></td>
            <td><?php echo $hp;?></td>
            <td style="width: 30%; text-align: justify;"><?php echo $alamat;?></td>
          </tr>
        </table>
      </form>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
