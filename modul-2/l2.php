<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bola</title>
</head>

<body>
    <h1>Kalkulator Bola</h1>
    <form method="post">
        <label for="radius">Jari-jari:</label>
        <input type="number" id="radius" name="radius" required><br>

        <button type="submit">Hitung</button>
    </form>

    <?php

    class Bola
    {
        private $jariJari;

        public function __construct($jariJari)
        {
            $this->jariJari = $jariJari;
        }

        public function hitungLuasPermukaan()
        {
            return 4 * pi() * pow($this->jariJari, 2);
        }

        public function hitungVolume()
        {
            return (4 / 3) * pi() * pow($this->jariJari, 3);
        }
    }

    // Dapatkan data radius dari form
    $jariJari = $_POST['radius'];

    // Buat objek bola
    $bola = new Bola($jariJari);

    // Hitung luas permukaan dan volume
    $luasPermukaan = $bola->hitungLuasPermukaan();
    $volume = $bola->hitungVolume();

    // Tampilkan hasil
    echo "<h2>Hasil</h2>";
    echo "Jari-jari: $jariJari<br>";
    echo "<br>";
    echo "Luas Permukaan: $luasPermukaan<br>";
    echo "Volume: $volume";


    ?>
</body>

</html>