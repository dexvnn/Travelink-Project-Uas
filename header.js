const header = document.getElementById('header');
const images = [
    'gambar/bromo.jpg',
    'gambar/pantai gili.jpg',
    'gambar/boro.jpg'
];
let index = 0;

function changeBackground() {
    header.style.backgroundImage = `url(${images[index]})`;
    index = (index + 1) % images.length; // Reset ke awal setelah mencapai gambar terakhir
}

setInterval(changeBackground, 4000); // Ganti gambar setiap 5 detik

