document.addEventListener("DOMContentLoaded", function () {
    // Membuat objek tanggal dan waktu saat ini
    var currentDateTime = new Date();

    // Mendapatkan hari dalam bentuk nama
    var days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    var dayName = days[currentDateTime.getDay()];

    // Mendapatkan tanggal
    var date = currentDateTime.getDate();

    // Mendapatkan bulan dalam bentuk nama
    var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    var monthName = months[currentDateTime.getMonth()];

    // Mendapatkan tahun
    var year = currentDateTime.getFullYear();

    // Membuat pesan selamat berdasarkan jam
    var greeting;
    var hour = currentDateTime.getHours();
    if (hour >= 5 && hour < 12) {
        greeting = "Selamat Pagi!";
    } else if (hour >= 12 && hour < 16) {
        greeting = "Selamat Siang!";
    } else if (hour >= 16 && hour < 19) {
        greeting = "Selamat Sore!";
    } else {
        greeting = "Selamat Malam!";
    }

    // Menampilkan pesan selamat dan informasi tanggal di dalam elemen dengan id "greetingContainer"
    var greetingContainer = document.getElementById("greetingContainer");
    greetingContainer.innerHTML = "<h1>" + greeting + "</h1>" +
        "<p>" + dayName + ", " + date + " " + monthName + " " + year + "</p>";
});
function toggleText(textId) {
    var textToToggle = document.getElementById(textId);
    if (textToToggle.style.display === "none") {
      textToToggle.style.display = "block";
    } else {
      textToToggle.style.display = "none";
    }
  }