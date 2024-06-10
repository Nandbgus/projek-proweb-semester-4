<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Balok</title>
</head>

<body>
    <h1>Kalkulator Balok</h1>
    <form method="post">
        <label for="length">Panjang:</label>
        <input type="number" id="length" name="length" required><br>

        <label for="width">Lebar:</label>
        <input type="number" id="width" name="width" required><br>

        <label for="height">Tinggi:</label>
        <input type="number" id="height" name="height" required><br>

        <button type="submit">Hitung</button>
    </form>

    <?php
    class Block
    {
        private $length;
        private $width;
        private $height;

        public function __construct($length, $width, $height)
        {
            $this->length = $length;
            $this->width = $width;
            $this->height = $height;
        }

        public function getSurfaceArea()
        {
            return 2 * ($this->length * $this->width + $this->length * $this->height + $this->width * $this->height);
        }

        public function getVolume()
        {
            return $this->length * $this->width * $this->height;
        }

        public function getLength()
        {
            return $this->length;
        }

        public function getWidth()
        {
            return $this->width;
        }

        public function getHeight()
        {
            return $this->height;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Dapatkan data form
        $length = $_POST['length'];
        $width = $_POST['width'];
        $height = $_POST['height'];

        // Buat objek Block
        $block = new Block($length, $width, $height);

        // Hitung luas permukaan dan volume
        $surfaceArea = $block->getSurfaceArea();
        $volume = $block->getVolume();

        // Tampilkan hasil
        echo "<h2>Hasil</h2>";
        echo "Panjang: " . $block->getLength() . "<br>";
        echo "Lebar: " . $block->getWidth() . "<br>";
        echo "Tinggi: " . $block->getHeight() . "<br>";
        echo "<br>";
        echo "Luas Permukaan: $surfaceArea<br>";
        echo "Volume: $volume";
    }
    ?>
</body>

</html>