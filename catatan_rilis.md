Di rilis ini, versi 2306.0.2 berisi [isi disini] dan perbaikan lain yang diminta Komunitas SID.

Terima kasih pada [isi disini] yang terus berkontribusi.

#### Perbaikan BUG

1. [#6590](https://github.com/OpenSID/OpenSID/issues/6590) Perbaikan cara menampilkan area desa/dusun/rt/rw pada toolbox peta modul pertanahan.
2. [#6651](https://github.com/OpenSID/OpenSID/issues/6651) Perbaikan cara menampilkan path peta yang tidak valid pada halaman admin.
3. [#6733](https://github.com/OpenSID/OpenSID/issues/6733) Perbaikan cara menampilkan data permohonan surat tinymce dari layanan mandiri.
4. [#6720](https://github.com/OpenSID/OpenSID/issues/6720) Perbaikan data sumi gagal tampil pada surat keterangan kelahiran.
5. [#6714](https://github.com/OpenSID/OpenSID/issues/6714) Perbaikan cara menampilkan data pada laporan penduduk dan laporan rekap penerima vaksin covid-19.
6. [#6669](https://github.com/OpenSID/OpenSID/issues/6669) Perbaikan cara hapus penduduk dan log penduduk jika data dianggap sudah lengkap.
7. [#6441](https://github.com/OpenSID/OpenSID/issues/6441) Perbaikan jumlah dan detail arsip layanan.
8. [#6737](https://github.com/OpenSID/OpenSID/issues/6737) Perbaikan notifikasi gagal simpan widget jika extention tidy yang diperlukan tidak aktif.
9. [#6729](https://github.com/OpenSID/OpenSID/issues/6729) Perbaikan ambil data SDGS yang tersimpan pada cache.
10. [#6718](https://github.com/OpenSID/OpenSID/issues/6718) Perbaikan validasi proses permohonan surat melalui layanan mandiri jika memiliki syarat.
11. [#6740](https://github.com/OpenSID/OpenSID/issues/6740) Perjelas notifikasi hapus wilayah jika terdapat penduduk pada wilayah tersebut.
12. [#6741](https://github.com/OpenSID/OpenSID/issues/6741) Perbaikan pengecekan ganti password default kehalaman admin.
13. [#6717](https://github.com/OpenSID/OpenSID/issues/6717) Perbaikan menampilkan data anggota keluarga pada cetak surat tinymce.
14. [#6728](https://github.com/OpenSID/OpenSID/issues/6728) Perbaikan unggah dokumen surat masuk.
15. [#6739](https://github.com/OpenSID/OpenSID/issues/6739) Perbaikan gagal migrasi penambahan relasi antar tabel karena menggunakan engine yang berbeda.
16. [#6745](https://github.com/OpenSID/OpenSID/issues/6745) Sediakan tombol perbaikan log bulanan.
17. [#6746](https://github.com/OpenSID/OpenSID/issues/6746) Pebaikan perhitungan dan detail log penduduk dan keluarga pada laporan bulanan.
18. [#6749](https://github.com/OpenSID/OpenSID/issues/6749) Perbaikan nama bidang pada belanja laporan keuangan berdasarkan permendagri nomor 20 tahun 2018.
19. [#6751](https://github.com/OpenSID/OpenSID/issues/6751) Perbaikan hapus data penduduk pada modul suplemen.

#### Perubahan Teknis

1. [#6676](https://github.com/OpenSID/OpenSID/issues/6676) Penambahan migrasi pengaturan nonaktifkan tema untuk OpenKab.
2. [#6736](https://github.com/OpenSID/OpenSID/issues/6736) Penyesuaian backup dan restore database mengikuti perubahan OpenSID database gabungan.
3. [#5870](https://github.com/OpenSID/OpenSID/issues/5870) Penambahan pilihan amankan token pengguna yang sedang digunakan sebelum restore database.
4. [#2383](https://github.com/OpenSID/premium/issues/2383) Penyesuaian modul pelanggan dan pendaftaran kerjasama untuk website demo OpenSID tidak ditampilkan.
5. [#6748](https://github.com/OpenSID/OpenSID/issues/6748) Penambahan periksa database untuk kasus tanggal tidak valid pada tabel covid19_vaksin.
6. [#6750](https://github.com/OpenSID/OpenSID/issues/6750) Penyesuaian query statistik dengan penambahan config_id pada tabel referensi yang dituju.
7. [#6738](https://github.com/OpenSID/OpenSID/issues/6738) Penambahan peringatan jika app_key pada folder desa dan database tidak sesuai.
8. [#6716](https://github.com/OpenSID/OpenSID/issues/6716) Penggunaan slug yang unik pada tabel user_grup.
