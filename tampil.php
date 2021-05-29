<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melakukan EDIT FILE DALAM GITHUB</title>
</head>
<body>
    <div class="bg">
        <div class="tengah">
            <?php
            include 'database.php';
            $db=new database();
            ?>
            <a href="input.php">Input Data</a>
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
                            <a href="edit.php?id=<?php echo $x['id']; ?>&tindakan=edit">Edit</a>
                            <a href="eksekusi.php?id=<?php echo $x['id']; ?>&tindakan=hapus">hapus</a>
                        </td> 
                    </tr>               
                <?php
                }
            ?>
            </table>
        </div>
    </div>
</body>
</html>
