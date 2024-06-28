<?php
    class NilaiMahasiswa {
        var $nim, $pilih_mk, $nilai;

        function __construct($nim, $pilih_mk, $nilai){
            $this->nim = $nim;
            $this->pilih_mk = $pilih_mk;
            $this->nilai = $nilai;
        }

        public function grade() {
            if ($this->nilai >= 0 && $this->nilai <= 35) {
                return "E";
            } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
                return "D";
            } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
                return "C";
            } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
                return "B";
            } elseif ($this->nilai >= 85 && $this->nilai <= 100) {
                return "A";
            } else {
                return "Invalid";
            }
        }
    
        public function kelulusan() {
            if ($this->nilai >= 0 && $this->nilai <= 35) {
                return "Tidak Lulus";
            } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
                return "Tidak Lulus";
            } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
                return "Tidak Lulus";
            } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
                return "Lulus";
            } elseif ($this->nilai >= 85 && $this->nilai <= 100) {
                return "Lulus";
            } else {
                return "Invalid";
            }
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Mahasiswa</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Form Hasil Ujian</h1>
        <form method="POST" action="class_nilaimahasiswa.php">
        <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Pilih MK</label>
                <div class="col-8">
                    <select id="pilih_mk" name="pilih_mk" class="custom-select">
                        <option value="Data Base">Data Base</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="ipk" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST["submit"])) {


            $nim = $_POST["nim"];
            $pilih_mk = $_POST["pilih_mk"];
            $nilai = $_POST["nilai"];

            $mahasiswa1 = new NilaiMahasiswa($nim, $pilih_mk, $nilai);
            echo "<h2>HASIL UJIAN</h2> . <br>";
            echo "<p>NIM: " . $mahasiswa1->nim . "</p>";
            echo "<p>PILIHAN MK: " . $mahasiswa1->pilih_mk . "</p>";
            echo "<p>NILAI: " . $mahasiswa1->grade() . "</p>";
            echo "<p>KELULUSAN: " . $mahasiswa1->kelulusan() . "</p>";
        }
?>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>