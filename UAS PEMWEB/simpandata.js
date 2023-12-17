// Farhan Rizky Gunawan
// 121140200
// Pemrograman web RB

// Menetapkan data ke local storage
localStorage.setItem("username", "john_doe");
localStorage.setItem("email", "john_doe@example.com");

// Mendapatkan data dari local storage
var username = localStorage.getItem("username");
var email = localStorage.getItem("email");

// Menghapus data dari local storage
localStorage.removeItem("username");
localStorage.removeItem("email");
