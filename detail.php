<?php
if (
    !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"]) ||
    !isset($_GET["grade"]) ||
    !isset($_GET["status"])
) {
    header("Location: index.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            background: #f4f6fb;
            font-family: Arial, "Segoe UI", sans-serif;
            color: #000;
        }

        .kartu {
            max-width: 700px;
            margin: 0 auto;
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }

        h1 {
            margin: 0 0 16px 0;
            font-size: 24px;
        }

        .saf {
            background: #f9fafb;
            padding: 14px 12px;
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            padding: 8px 14px;
            margin-top: 8px;
        }

        .btn:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>
    <div class="kartu">
        <h1>Detail Mahasiswa</h1>

        <div class="saf"><b>NIM:</b> <?= $_GET["nim"] ?></div>
        <div class="saf"><b>Nama:</b> <?= $_GET["nama"]; ?></div>
        <div class="saf"><b>Jurusan:</b> <?= $_GET["jurusan"]; ?></div>
        <div class="saf"><b>Email:</b> <?= $_GET["email"]; ?></div>
        <div class="saf"><b>Nilai:</b> <?= $_GET["nilai"]; ?></div>
        <div class="saf"><b>Grade:</b> <?= $_GET["grade"]; ?></div>
        <div class="saf"><b>Status:</b> <?= $_GET["status"]; ?></div>

        <a class="btn" href="index.php">Kembali</a>
    </div>
</body>

</html>