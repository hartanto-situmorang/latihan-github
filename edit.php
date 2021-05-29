<?php
    include 'database.php';
    $db = new database();
?>
        <form action="eksekusi.php?tindakan=update" method="post">
        <?php
        foreach($db->edit($_GET['id']) as $d){
        ?>
        <div class="tengah">
            <h1>Tambahan dari branch new-branch</h1>
        <table>
            <tr>
                <td>prodi</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
                    <select name="prodi">
                        <option value="PROGRAM REGULER D-III">PROGRAM REGULER D-III</option>
                        <option value="PROGRAM MAGISTER">PROGRAM MAGISTER</option>
                        <option value="PROGRAM NON REGULER SLTA KE D-III">PROGRAM NON REGULER SLTA KE D-III</option>
                        <option value="PROGRAM ALIH JENJANG D-III KE D-IV">PROGRAM ALIH JENJANG D-III KE D-IV</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>nama</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>email</td>
                <td>
                    <input type="text" name="email" value="<?php echo $d['email'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
<?php 
    } 
?>
</div>
