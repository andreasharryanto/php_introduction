<?php
    //to check if any $_GET(s) is empty
    if(!isset($_GET['mName']) || !isset($_GET['mPhoneNumber']) || !isset($_GET['mEmail']) ||
    !isset($_GET['mMajors']) || !isset($_GET['mPicture'])){
        header("Location: index1.php");//redirection
        exit;
    }
?>

<!DOCTYPE html>
<head>
    <title>Profile Mahasiswa</title>
</head>
<body>
    <h1>Mahasiswa Profile</h1>
    <?php
        echo $_GET['mName'] . '<br>';
        echo $_GET['mPhoneNumber'] . '<br>';
        echo $_GET['mEmail'] . '<br>';
        echo $_GET['mMajors'] . '<br>';
    ?>
    <img src="<?= $_GET['mPicture']; ?>" width = 50 height = 75>
    <br>
    <a href="index1.php">Back to Mahasiswa List</a>
</body>
</html>