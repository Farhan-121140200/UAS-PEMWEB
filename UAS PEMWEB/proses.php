<!--Farhan Rizky Gunawan-->
<!--121140200-->
<!--Pemrograman web RB-->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $hobby = test_input($_POST["hobby"]);

  // Validasi input
  if (empty($name)) {
    echo "Nama harus diisi";
    exit;
  }

  if (empty($email)) {
    echo "Email harus diisi";
    exit;
  }

  // Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna
  $browser = $_SERVER['HTTP_USER_AGENT'];
  $ip = $_SERVER['REMOTE_ADDR'];

  // Tampilkan hasil pengolahan data ke layar
  echo "<h2>Hasil Pengolahan Data:</h2>";
  echo "<table>";
  echo "<tr><td>Nama:</td><td>$name</td></tr>";
  echo "<tr><td>Email:</td><td>$email</td></tr>";
  echo "<tr><td>Jenis Kelamin:</td><td>$gender</td></tr>";
  echo "<tr><td>Hobi:</td><td>$hobby</td></tr>";
  echo "<tr><td>Browser:</td><td>$browser</td></tr>";
  echo "<tr><td>Alamat IP:</td><td>$ip</td></tr>";
  echo "</table>";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
