<?php
// include database connection file
include_once("../config.php");

//cek  
if (isset($_POST['submit'])) {
    // ambil data dari formulir
    $nama = $_POST['nama'];
    $pesa = $_POST['pesa'];
;

    // query
    $sql = "UPDATE moriarty_lia SET
    moriarty.nama  = '$nama',
    moriarty.pesa = '$pesa',

    WHERE moriarty_lia.nama = nama";
    $result = mysqli_query($conn, $sql);
    // mengecek apakah query berhasil diubah

}


$sql = "SELECT * FROM moriarty WHERE nama=nama";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" href="style.css">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&family=Modak&family=Nerko+One&family=Rubik+Bubbles&display=swap" rel="stylesheet">

</head>
<body background="pics/3.jpg">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8 card end">
          <div style="margin-left: 850px;" class="row justify-content-end">
              <a href="party.html">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="text-dark mt-2 mb-2 bi bi-house-door-fill" viewBox="0 0 16 16">
              <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
              </svg>
              </a>
          </div>
      </div>
  </div>
    <div class="mt-2 row justify-content-center">
      <div class="col-md-8 card end">
        <div class="card-text">
          <h1 class="text-center guest">Edit Guest Book</h1>
          <h6 class="text-center guesti">Leave a trace</h6> <hr class="garis">
        </div>
        <div class="row justify-content-center">
          <form class="col-md-6">
            <div class="mb-3">
              <td><label for="name" class="form-tabel">Your Name</label></td>
              <td><input type="text" class="isi form-control" id="nama" name="nama" value="<?= $nama ?>" required></td>
            </div>
            <div class="mb-5">
              <td><label for="name" class="form-tabel">Messages</label></td>
              <textarea type="text" class="isi form-control" id="nama" name="nama" rows="3" required ><?= $pesa ?></textarea>
              <button type="submit" class="mt-4 btn">Send</button>
              <a style="margin-left: 10px;" class="mt-4 btn" href="table.php">Guest Book</a>
            </div>
        </form>
      </div>
    </div>
</body>
</html>