// Farhan Rizky Gunawan
// 121140200
// Pemrograman web RB

// Mendapatkan elemen form
var form = document.querySelector("form");

// Menambahkan event submit pada form
form.addEventListener("submit", function(event) {
  // Mencegah form untuk melakukan submit
  event.preventDefault();

  // Mendapatkan nilai dari input
  var name = document.querySelector("#name").value;
  var email = document.querySelector("#email").value;
  var gender = document.querySelector('input[name="gender"]:checked').value;
  var hobby = document.querySelector("#hobby").value;

  // Validasi input
  if (name === "") {
    alert("Nama harus diisi");
    return;
  }

  if (email === "") {
    alert("Email harus diisi");
    return;
  }

  // Menampilkan data ke dalam tabel
  var tbody = document.querySelector("tbody");
  var row = tbody.insertRow(-1);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  var cell4 = row.insertCell(3);
  cell1.innerHTML = name;
  cell2.innerHTML = email;
  cell3.innerHTML = gender;
  cell4.innerHTML = hobby;

  // Mengosongkan form
  form.reset();
});
