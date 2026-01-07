    const images = [
        'gambar/hihi.jpg',
        'gambar/contai.jpg',
        'gambar/kuta1.jpg',
        'gambar/raja ampat.jpg'
    ];

    let currentIndex = 0;

    function changeBackgroundImage() {
        const container = document.getElementById('container');
        container.style.backgroundImage = `url(${images[currentIndex]})`;
        currentIndex = (currentIndex + 1) % images.length; // Melakukan loop kembali ke awal setelah gambar terakhir
    }

    // Mengubah gambar setiap 2 detik
    setInterval(changeBackgroundImage, 4000);

