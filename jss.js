// JavaScript untuk Mengaktifkan Modal
const modal = document.getElementById('modal');
const closeModal = document.getElementById('close-modal');

function openModal() {
    modal.style.display = 'flex'; // Tampilkan modal dengan Flexbox
}

function closeModalFunc() {
    modal.style.display = 'none'; // Sembunyikan modal
}

// Tutup Modal saat tombol Close diklik
closeModal.addEventListener('click', closeModalFunc);

// Tutup Modal saat klik di luar area konten
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        closeModalFunc();
    }
});
