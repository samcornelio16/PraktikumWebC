<?php

include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $pekerjaan=$_POST['pekerjaan'];

  
    $result = mysqli_query($mysqli, "UPDATE user SET  nama='$nama',alamat='$alamat',pekerjaan='$pekerjaan' WHERE id=$id");

    
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $pekerjaan = $user_data['pekerjaan'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan" value=<?php echo $pekerjaan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>