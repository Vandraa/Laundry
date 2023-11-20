// Fungsi untuk menghitung total harga transaksi
function hitungTotalHarga() {
    // Mengambil nilai harga dari input
    let harga = parseInt(document.getElementById('harga').value);
    // Mengambil nilai tambahan dari input yang dipilih
    let tambahan = parseInt(document.querySelector('input[id="tambahan"]:checked').value);
    // Menghitung total harga dengan menambahkan harga dan tambahan
    let hasil = harga + tambahan;
    // Menampilkan hasil total harga di input 'totalHarga'
    document.getElementById('totalHarga').value = hasil;
}

// Fungsi untuk menghitung kembalian
function hitungKembalian() {
    // Mengambil nilai pembayaran dari input
    let pembayaran = document.getElementById('pembayaran').value;
    // Mengambil nilai total harga dari input 'totalHarga'
    let totalHarga = document.getElementById('totalHarga').value;
    // Menghitung kembalian dengan mengurangkan pembayaran dari total harga
    let kembalian = parseInt(pembayaran) - parseInt(totalHarga);
    // Menampilkan kembalian di input 'kembalian'
    document.getElementById('kembalian').value = kembalian;
}

// Menambahkan event listener untuk menghitung kembalian saat tombol 'hitungKembalian' diklik
document.getElementById('hitungKembalian').addEventListener('click', hitungKembalian);

// Fungsi untuk menyimpan transaksi
function simpan() {
    // Menampilkan pesan sukses
    alert('Transaksi Berhasil');
    // Mengarahkan halaman ke 'beranda.php'
    window.location.href = 'beranda.php';
}
