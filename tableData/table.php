<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <link rel="stylesheet" href="style.css">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&family=Modak&family=Nerko+One&family=Rubik+Bubbles&family=Zilla+Slab+Highlight&display=swap" rel="stylesheet">
</head>
<body background="pics/3.jpg">
        <center>
            <h1 class="judul">Guest Book</h1>
            <a class="btn" href="add.php">Add Messages</a>
            <a style="margin-left: 10px;" class="btn" href="party.html">Home</a><br /><br />
        </center>
    <table class="table table-striped">
        <tr>
            <th class="text-center" name="nama">Nama</th>
            <th class="text-center" name="pesan">Pesan</th>
        </tr>

        <?php
        include_once 'config.php';
        $result = mysqli_query( $conn, "SELECT * FROM  moriarty_lia ORDER BY `nama` ASC") or die (mysql_error());
        while ($data = mysqli_fetch_array($result)) {
        ?>
            <?php echo "<tr>"; ?>  
            <?php echo "<th>" . $moriarty_lia['nama'] . "</th>"; ?>
            <?php echo "<th>" . $moriarty_lia['pesan'] . "</th>"; ?> 
            <?php echo "<th>
                    <a class='btn btn-warning' href='edit.php?nama=$moriarty_lia[nama]'>Edit</a>
                    <a class='btn btn-success' href='table.php?nama=$moriarty_lia[nama]'>View</a>
                    <a class='btn btn-danger' href='delete.php?nama=$moriarty_lia[nama]'>Delete</a>
                  </th>"; ?> 
            <?php echo "</tr>"; ?> 
        }
    </table>
</body>