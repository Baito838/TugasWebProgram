<?php 
require 'config.php';
$siswa = query("SELECT * FROM mahasiswa");

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
        width: min-content;
      }
      body{
          align-items: center;
      }
      .tombol{
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        gap: 5px;
      }
      .add{
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <section>
      <div class="tombol">
      <div><h1>Tabel Biodata</h1></div>
      <div class="add">
        <a href="Create.php">
          <button type="button" class="btn btn-primary">
            <i class="fa-solid fa-plus"></i>
          </button>
        </a>
      </div>
      </div>
      <form action="" method="post">
        <table class="table">
            <td class="border-bottom ">No</td>
            <td class="border-bottom ">NIM</td>
            <td class="border-bottom ">Nama</td>
            <td class="border-bottom ">Gender</td>
            <td class="border-bottom ">Status</td>
            <td class="border-bottom ">HP</td>
            <td class="border-bottom">Alamat</td>
            <td class="border-bottom">Aksi</td>
          </tr>
          <?php $no = 1; ?>
            <?php foreach ($siswa as $row) : ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $row["nim"];?></td>
                <td style="width: 20%;"><?= $row["nama"];?></td>
                <td style="width: 30%;"><?= $row["gender"];?></td>
                <td><?= $row["status"];?></td>
                <td><?= $row["telfon"];?></td>
                <td style="width: 50%;"><?= $row["alamat"];?></td>
                <td class="tombol">
                  <a href="Update.php?id=<?= $row["id"] ?>">
                    <button type="button" class="btn btn-warning">
                    <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                  </a>
                  <a href="Delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Ah yang bener ?')">
                    <button type="button" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                    </button>
                  </a>
                </td>
              </tr>
            <?php $no++; ?>
          <?php endforeach; ?>
        </table>
      </form>
    </section>
    <script src="https://kit.fontawesome.com/308efbf9d4.js" crossorigin="anonymous"></script>
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
