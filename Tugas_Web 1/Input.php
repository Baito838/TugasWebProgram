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
    <title>Input</title>
    <style>
        .tombol {
            display: flex;
            justify-content: flex-end;
        }
        thead{
          display: flex;
          justify-content: center;
        }
    </style>
  </head>
  <body>
    <section>
        <form action="Data.php" method="post">
            <table class="table table-hover ">
                <thead>
                  <th><h2>Profil dari</h2></th>
                </thead>
                <tr>
                    <td>NIM</td>
                    <td>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="nim" name="nim" placeholder="21110110049">
                            <label for="nim">Nomer Induk Mahasiswa</label>
                          </div>
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Bagas Aji">
                            <label for="nama">Nama Lengkap</label>
                          </div>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki">
                            <label class="form-check-label" for="jk">Laki-Laki</label>
                          </div>
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
                            <label class="form-check-label" for="jk">Perempuan</label>
                          </div>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status" id="status" class="form-select" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="Nikah">Menikah</option>
                            <option value="Lajang">Lajang</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td><input id="telfon" name="telfon" type="Number" class="form-control" placeholder="086912344321" aria-label="Username" aria-describedby="basic-addon1"></div></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea class="form-control" name="alamat" id="alamat" cols="30" rows="3"></textarea></td>
                </tr>
            </table>
            <div class="tombol">
                <button type="submit" class="btn btn-success">Success</button>
            </div>
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