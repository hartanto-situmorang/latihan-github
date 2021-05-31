<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

 <nav class="navbar navbar-light bg-warning">
  <div class="container">
    <a class="navbar-brand" href="#">
    <title>Melakukan EDIT FILE DALAM GITHUB</title>
        </a>
  </div>
</nav>
    
</head>
<body>
    <h1>INI ADALAH HASIL EDIT DARI NEW-BRANCH1</H1
    <p> Jangan terlalu mengorbankan segalanya,<br>
        terkadang tidak semua pengorbanan diperlukan
    </p>

    <div class="bg">
        <div class="tengah">
            <?php
            include 'database.php';
            $db=new database();
            ?>
            <button type="button" class="btn btn-dark"><a href="input.php">Input Data</a></button>
            <table border="1" class="table table-striped">
            <tr>
                <th scope="col" >NO</th>
                <th scope="col" >prodi</th>
                <th scope="col" >nama</th>
                <th scope="col" >email</th>
                <th scope="col" >Opsi</th>
            </tr>
            <?php
                $no=1;
                foreach ($db->tampil_data() as $x) {
                ?>
                <tr>
                        <td scope="col" ><?php echo $no++; ?></td>
                        <td scope="col" ><?php echo $x['prodi']; ?> </td>
                        <td scope="col" ><?php echo $x['nama']; ?> </td>
                        <td scope="col" ><?php echo $x['email']; ?> </td>
                        <td scope="col" >
                            <button type="button" class="btn btn-dark"><a href="edit.php?id=<?php echo $x['id']; ?>&tindakan=edit">Edit</a></button>
                            <button type="button" class="btn btn-dark"><a href="eksekusi.php?id=<?php echo $x['id']; ?>&tindakan=hapus">hapus</a></button>
                        </td> 
                    </tr>               
                <?php
                }
            ?>
            </table>
        </div>
    </div>

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> -->
    
  </body>
</html>
