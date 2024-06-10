<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai Mata Kuliah</title>
</head>

<body>
    <h1>Konversi Nilai Mata Kuliah</h1>
    <form method="post">
        <label for="score">Nilai Angka:</label>
        <input type="number" id="score" name="score" required><br>

        <button type="submit">Konversi</button>
    </form>

    <?php
    // Kelas untuk konversi nilai
    class GradeConverter
    {
        private $score;
        private $letterGrade;

        public function __construct($score)
        {
            $this->score = $score;
            $this->convert();
        }

        private function convert()
        {
            if ($this->score >= 90) {
                $this->letterGrade = "A";
            } elseif ($this->score >= 80) {
                $this->letterGrade = "B";
            } elseif ($this->score >= 70) {
                $this->letterGrade = "C";
            } elseif ($this->score >= 60) {
                $this->letterGrade = "D";
            } else {
                $this->letterGrade = "E";
            }
        }

        public function getLetterGrade()
        {
            return $this->letterGrade;
        }

        public function getScore()
        {
            return $this->score;
        }
    }

    // Proses form submission
    if (isset($_POST['score'])) {
        $score = $_POST['score'];
        $converter = new GradeConverter($score);

        // Tampilkan hasil
        echo "<h2>Hasil</h2>";
        echo "Nilai Angka: " . $converter->getScore() . "<br>";
        echo "Nilai Huruf: " . $converter->getLetterGrade();
    } else {
        echo "Silakan isi formulir dan kirimkan.";
    }
    ?>
</body>

</html>