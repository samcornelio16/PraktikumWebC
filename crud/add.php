
<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php


    if(isset($_POST['Submit'])) {
       
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO user(nama,alamat,pekerjaan) VALUES('$nama','$alamat','$pekerjaan')");

        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>
