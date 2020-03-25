<?php
    $mahasiswa = [
        [
            'phoneNumber' => '0123456781',
            'name' => 'CrookedMan',
            'email' => 'crookedman@gmail.com',
            'majors' => 'Computer Science',
            'picture' => 'CrookedMan.jpg'
        ],
        [
            'phoneNumber' => '0123456782',
            'name' => 'OsamuDazai',
            'email' => 'osamudazai@gmail.com',
            'majors' => 'Information System',
            'picture' => 'OsamuDazai.jpg'
        ]
    ];
?>
<!DOCTYPE html>
<head>
    <title>Pertemuan2</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ol>
            <li><img src="<?= $mhs['picture']; ?>" width=50 height=75></li>
            <li><?= $mhs['name']; ?></li>
            <li><?= $mhs['email']; ?></li>
            <li><?= $mhs['phoneNumber']; ?></li>
            <li><?= $mhs['majors']; ?></li>
        </ol>
    <?php endforeach; ?>
    <a href="index1.php">Go to index1.php (Close Mahasiswa List)</a>
</body>
</html>