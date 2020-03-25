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
    <h1>Mahasiswa List</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs):?>
            <li>
                <a href="index2.php?
                    mName=<?= $mhs['name']; ?>
                    &mPhoneNumber=<?= $mhs['phoneNumber']?>
                    &mEmail=<?= $mhs['email']; ?>
                    &mMajors=<?= $mhs['majors']; ?>
                    &mPicture=<?= $mhs['picture']?>">
                    <?= $mhs['name']; ?>
                </a>
            </li>
        <?php endforeach;?>
    </ul>
    <a href="index.php">Back to index.php (open mahasiswa list)</a>
</body>
</html>