<?php
$mahasiswa = [
    [
        "nim" => "19001",
        "nama" => "Kirei Punk",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "rey@upi.edu",
        "nilai" => 99
    ],
    [
        "nim" => "19002",
        "nama" => "Diki Pasin",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "diki@upi.edu",
        "nilai" => 77
    ],
    [
        "nim" => "19003",
        "nama" => "Ris Mahal",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "ris@upi.edu",
        "nilai" => 67
    ],
    [
        "nim" => "19004",
        "nama" => "Na dianya",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "dia@upi.edu",
        "nilai" => 88
    ],
    [
        "nim" => "19005",
        "nama" => "Gior Dinho",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "gio@upi.edu",
        "nilai" => 58
    ]
];

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Kirei PHP</title>
    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            background: #f4f6fb;
            font-family: Arial, "Segoe UI", sans-serif;
            color: #000;
        }

        .kartu {
            max-width: 1100px;
            margin: 0 auto;
            background: #fff;
            border-radius: 14px;
            padding: 24px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 20px;
        }

        h1 {
            margin: 0 0 12px 0;
            font-size: 24px;
        }

        .subjudul {
            margin: 0;
        }

        .tabel-aja {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #e5e7eb;
            padding: 12px 10px;
            text-align: left;
        }

        thead th {
            background: #e8f0fe;
            font-weight: bold;
        }

        .lulus {
            color: #08ec5c;
            font-weight: bold;
        }

        .tidak-lulus {
            color: #e70909;
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            background: #2563eb;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            padding: 8px 14px;
        }

        .btn:hover {
            background: #1d4ed8;
        }
    </style>
</head>

<body>
    <div class="kartu">
        <div class="header">
            <div>
                <h1>Daftar Mahasiswa</h1>
                <p class="subjudul">Mini Website PHP Dasar</p>
            </div>
            <a class="btn" href="form_pesan.php">Isi Form Pesan</a>
        </div>

        <div class="tabel-aja">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Nilai</th>
                        <th>Grade</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($mahasiswa as $apa) {

                        $nilai = $apa["nilai"];

                        if ($nilai >= 80) {
                            $grade = "A";
                        } elseif ($nilai >= 70) {
                            $grade = "B";
                        } elseif ($nilai >= 60) {
                            $grade = "C";
                        } else {
                            $grade = "D";
                        }

                        if ($nilai >= 70) {
                            $status = "Lulus";
                            $kubuStatus = "lulus";
                        } else {
                            $status = "Tidak Lulus";
                            $kubuStatus = "tidak-lulus";
                        }


                        ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= ($apa["nim"]); ?></td>
                            <td><?= ($apa["nama"]); ?></td>
                            <td><?= ($apa["jurusan"]); ?></td>
                            <td><?= ($nilai); ?></td>
                            <td><?= ($grade); ?></td>
                            <td class="<?= $kubuStatus; ?>"><?= ($status); ?></td>
                            <td><a class="btn"
                                    href="detail.php?nim=<?= ($apa["nim"]) ?>&nama=<?= ($apa["nama"]) ?>&jurusan=<?= ($apa["jurusan"]) ?>&email=<?= ($apa["email"]) ?>&nilai=<?= ($nilai) ?>&grade=<?= ($grade) ?>&status=<?= ($status) ?>">Lihat
                                    Detail</a></td>
                        </tr>
                        <?php
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>