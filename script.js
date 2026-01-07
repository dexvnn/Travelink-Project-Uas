// Mendapatkan elemen modal
const modal = document.getElementById('modal');
const modalImg = document.getElementById('modalImg');
const modalTitle = document.getElementById('modalTitle');
const modalText = document.getElementById('modalText');

// Fungsi untuk membuka modal
function openModal(imageSrc, title, text) {
    modal.style.display = 'flex'; // Tampilkan modal
    modalImg.src = imageSrc; // Set gambar modal
    modalTitle.textContent = title; // Set judul modal
    modalText.textContent = text; // Set deskripsi modal
}

// Fungsi untuk menutup modal
function closeModal() {
    modal.style.display = 'none'; // Sembunyikan modal
}

// Menutup modal saat klik di luar area konten
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        closeModal();
    }
});
function handleButtonClick() {
    // Fungsi ketika tombol diklik
    // Ganti URL di bawah dengan alamat halaman yang ingin Anda buka
    window.location.href = "kontakkk.php";  // Ganti dengan URL yang sesuai
}

