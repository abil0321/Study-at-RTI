import Accordion from "./components/Accordion";

const faqs = [
  {
    question: "Apakah produk ini memiliki jaminan garansi?",
    answer:
      "Ya, kami memberikan jaminan garansi selama 1 tahun untuk cacat produksi. Silakan simpan bukti pembelian Anda untuk klaim garansi.",
  },
  {
    question: "Berapa lama estimasi waktu pengiriman?",
    answer:
      "Waktu pengiriman rata-rata adalah 3-5 hari kerja untuk wilayah Jabodetabek, dan 5-7 hari kerja untuk luar pulau.",
  },
  {
    question: "Bagaimana prosedur mengembalikan barang yang rusak?",
    answer:
      "Jika barang diterima dalam keadaan rusak, hubungi layanan pelanggan kami dalam 1x24 jam setelah barang diterima untuk panduan retur.",
  },
  {
    question: "Metode pembayaran apa saja yang tersedia?",
    answer:
      "Kami menerima transfer bank (BCA, Mandiri, BNI), kartu kredit, e-wallet, dan pembayaran di tempat (COD) untuk wilayah tertentu.",
  },
  {
    question: "Bagaimana cara melacak status pesanan saya?",
    answer:
      "Resi akan dikirimkan via email/WhatsApp. Anda dapat memasukkan nomor resi tersebut di halaman 'Lacak Pesanan' pada website kami.",
  },
  {
    question: "Apakah saya bisa membatalkan pesanan yang sudah dibayar?",
    answer:
      "Pembatalan bisa dilakukan selama pesanan belum diproses atau dikirim. Silakan hubungi admin kami sesegera mungkin.",
  },
  {
    question: "Apakah tersedia layanan pengiriman instan?",
    answer:
      "Ya, layanan Instant/Sameday tersedia untuk pesanan yang masuk sebelum pukul 14.00 WIB, khusus area yang terjangkau.",
  },
  {
    question: "Apakah saya bisa menukar ukuran atau warna setelah membeli?",
    answer:
      "Penukaran diperbolehkan maksimal 3 hari setelah barang diterima, dengan syarat kondisi barang masih baru dan segel utuh.",
  },
  {
    question: "Apakah Anda memiliki toko fisik yang bisa dikunjungi?",
    answer:
      "Saat ini kami fokus pada penjualan online. Namun, gudang pengiriman kami berlokasi di Jakarta Selatan.",
  },
  {
    question: "Kapan jam operasional layanan pelanggan (Customer Service)?",
    answer:
      "Tim kami siap membantu Anda setiap hari Senin - Sabtu, mulai pukul 09.00 hingga 17.00 WIB.",
  },
  {
    question: "Bagaimana jika barang yang saya inginkan stoknya habis?",
    answer:
      "Anda dapat menekan tombol 'Ingatkan Saya' pada halaman produk untuk mendapatkan notifikasi otomatis saat stok kembali tersedia.",
  },
];

function App() {
  return (
    <>
      <Accordion data={faqs} />
    </>
  );
}

export default App;
