<!--Farhan Rizky Gunawan-->
<!--121140200-->
<!--Pemrograman web RB-->
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "mydatabase";

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil";

// Mengambil data dari tabel
$sql = "SELECT id, firstname, lastname, email FROM mytable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Menampilkan data ke dalam tabel
  echo "<table>";
  echo "<tr><th>ID</th><th>Nama Depan</th><th>Nama Belakang</th><th>Email</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["lastname"] . "</td><td>" . $row["email"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "Tidak ada data";
}

// Mengupdate data pada tabel
$sql = "UPDATE mytable SET email='john.doe@example.com' WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil diupdate";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menghapus data dari tabel
$sql = "DELETE FROM mytable WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Data berhasil dihapus";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
