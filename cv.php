<?php
// Data untuk CV
$name = "Muhammad Zaidan Rafa";
$profession = "Web Developer";
$email = "rafabagos75@gmail.com";
$phone = "081326831712";
$address = "Ngimbang Pendowoharjo Sewon Bantul";
$photo = "RAFA28.jpg"; // Pastikan gambar ada di folder yang sama dengan file PHP ini
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - <?php echo $name; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header-flex {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 30px;
        }
        .photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .header-text h1 {
            font-size: 36px;
            margin: 0 0 10px 0;
        }
        .header-text p {
            font-size: 18px;
            color: #666;
            margin: 0;
        }
        .info {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .info div {
            flex: 1;
            padding: 10px;
        }
        .info div h3 {
            margin-top: 0;
            font-size: 20px;
            color: #444;
        }
        .section {
            margin: 30px 0;
        }
        .section h2 {
            font-size: 24px;
            color: #444;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .section ul {
            list-style: none;
            padding: 0;
        }
        .section ul li {
            padding: 8px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
            border-radius: 4px;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #999;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="container">
    <header class="header-flex">
        <img src="<?php echo $photo; ?>" alt="Foto Profil" class="photo">
        <div class="header-text">
            <h1><?php echo $name; ?></h1>
            <p><?php echo $profession; ?></p>
        </div>
    </header>

    <div class="info">
        <div>
            <h3>Email</h3>
            <p><?php echo $email; ?></p>
        </div>
        <div>
            <h3>Telepon</h3>
            <p><?php echo $phone; ?></p>
        </div>
        <div>
            <h3>Alamat</h3>
            <p><?php echo $address; ?></p>
        </div>
    </div>

    <div class="section">
        <h2>Pengalaman Kerja</h2>
        <ul>
            <li>
                <strong>Web Developer</strong> - Perusahaan Xuntos (20240 - Sekarang)
                <p>Spesialis dalam pengembangan perangkat lunak kustom, termasuk billing dan CRM software..</p>
            </li>
            <li>
                <strong>Frontend Developer</strong> - Perusahaan Exoft (2034 - 2039)
                <p>Menangani urusan pengembangan perangkat lunak.</p>
            </li>
        </ul>
    </div>

    <div class="section">
        <h2>Keahlian</h2>
        <ul>
            <li>PHP, JavaScript, HTML, CSS</li>
            <li>React, Laravel, Node.js</li>
            <li>Git, MySQL, MongoDB</li>
        </ul>
    </div>

    <div class="section">
        <h2>Pendidikan</h2>
        <ul>
            <li>SMP 3 SEWON (2022 - 2024)</li>
            <li><strong>RPL</strong> - SMKN 1 SANDEN (2024 - 2027)</li>
            <li><strong>Computer Science, Mathematics and Business.</strong> - UNIVERSTY OF AMSTERDAM (2028 - 2032)</li>
        </ul>
    </div>

    <div class="footer">
        <p>Terima kasih telah melihat CV saya!</p>
    </div>
</div>

</body>
</html>
