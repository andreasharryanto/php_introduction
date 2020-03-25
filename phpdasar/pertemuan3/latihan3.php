<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
</head>
<body>
    <h4>ini ke page latihan4</h4>
    <form action="latihan4.php" method="post">
        <!--post utk login (tidak dikirim lewat url)-->
        <!-- kalo action gk ada, data dikirim ke page sendiri-->
        Masukkan nama:
        <input type="text" name ="nama">
        <br>
        <button type="submit" name ="submit">Submit</button>
        <!--klo pake get jdi latihan4.php?nama=ASDF&submit=-->
    </form>
    
    <h4>ini ke page ini sendiri</h4>
    <form action="" method="post">
        Masukkan nama: 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Submit!</button>
    </form>
    <?php if(isset($_POST["submit"])) : ?>
        <p>Welcome, <?= $_POST["nama"];?></p>
    <?php endif;?>
</body>
</html>