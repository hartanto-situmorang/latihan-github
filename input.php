<html>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <body>
        <div class="tengah">
        <form action="eksekusi.php?tindakan=tambah" method="POST">
                <table class="table table-striped">
                <tr>
                    <td scope="col" >prodi</td>
                    <td scope="col" >
                    <select name="prodi">
                        <option value="PROGRAM REGULER D-III">PROGRAM REGULER D-III</option>
                        <option value="PROGRAM MAGISTER">PROGRAM MAGISTER</option>
                        <option value="PROGRAM NON REGULER SLTA KE D-III">PROGRAM NON REGULER SLTA KE D-III</option>
                        <option value="PROGRAM ALIH JENJANG D-III KE D-IV">PROGRAM ALIH JENJANG D-III KE D-IV</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td scope="col" >nama</td>
                    <td scope="col" ><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td scope="col" >email</td>
                    <td scope="col" ><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td scope="col" ></td>
                    <td scope="col" ><input type="submit" value="Daftar"></td>
                </tr>
                </table>
            </form>
            </div>       
        </body>
</html>
