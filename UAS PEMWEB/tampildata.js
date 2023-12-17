// Data dari server
var data = [
  { name: "Budi", age: 25, city: "Medan" },
  { name: "Asep", age: 30, city: "Padang" },
  { name: "Waluyo", age: 35, city: "Ngawi" }
];

// Membuat tabel
var table = document.createElement("table");

// Membuat header tabel
var header = table.createTHead();
var row = header.insertRow(0);
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
cell1.innerHTML = "<b>Name</b>";
cell2.innerHTML = "<b>Age</b>";
cell3.innerHTML = "<b>City</b>";

// Menambahkan data ke dalam tabel
var tbody = table.createTBody();
for (var i = 0; i < data.length; i++) {
  var row = tbody.insertRow(i);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3 = row.insertCell(2);
  cell1.innerHTML = data[i].name;
  cell2.innerHTML = data[i].age;
  cell3.innerHTML = data[i].city;
}

// Menambahkan tabel ke dalam halaman
document.body.appendChild(table);
