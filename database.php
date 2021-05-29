<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        class database{
            var $host = "localhost";
            var $uname = "root";
            var $pass = "";
            var $db = "daftar";
            var $con;

                function __construct(){
                    $this->con= mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
                }

                function tampil_data(){
                    $data = mysqli_query($this->con,"select * from maba");
                    while($d = mysqli_fetch_array($data)){
                        $hasil[] = $d;
                    }
                    return $hasil;
                }

                function input($prodi,$nama,$email){
                    mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),
                    "insert into maba values('','$prodi','$nama','$email')");
                }
                
                function hapus($id){
                    mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),
                    "delete from maba where id='$id'");
                }

                function edit($id){
                    $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),
                    "select * from maba where id='$id'");
                    while($d = mysqli_fetch_array($data)){
                        $hasil[] = $d;
                    }
                    return $hasil;
                }

                function update($id,$prodi,$nama,$email){
                    mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db),
                    "update maba set prodi='$prodi', nama='$nama', email='$email' where id='$id'");
                }
        }
    ?>
</body>
</html>