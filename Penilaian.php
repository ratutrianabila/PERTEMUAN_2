<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penilaian Mata kuliah</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: #3498db;
        }
    </style>

    
</head>
<body>
    <center>
    <h2>Hitung Rata-Rata Nilai dan Status Kelulusan</h2>
    <form method="POST" action="">
        <label for="nilai1">Nilai Mata Kuliah 1:</label>
        <input type="number" name="nilai1" id="nilai1" required><br><br>

        <label for="nilai2">Nilai Mata Kuliah 2:</label>
        <input type="number" name="nilai2" id="nilai2" required><br><br>

        <label for="nilai3">Nilai Mata Kuliah 3:</label>
        <input type="number" name="nilai3" id="nilai3" required><br><br>

        <input type="submit" value="Hitung">
    </form>
    <center>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari input form
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $nilai3 = $_POST['nilai3'];

        // Hitung rata-rata
        $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

        // Tentukan status kelulusan (lulus jika rata-rata >= 60)
        $status = $rata_rata >= 60 ? "Lulus" : "Tidak Lulus";

        // Tampilkan hasil
        echo "<h3>Hasil:</h3>";
        echo "Nilai Rata-Rata: " . number_format($rata_rata, 2) . "<br>";
        echo "Status: " . $status . "<br>";
        echo"</center>";
    }
    ?>
</body>
</html>