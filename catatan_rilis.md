Di rilis ini, versi 2310.0.3 berisi penambahan [untuk diisi] dan perbaikan lain yang diminta Komunitas SID.

Terima kasih pada [untuk diisi] baru mulai berkontribusi.

#### Perbaikan Bug
1. [#7143](https://github.com/OpenSID/OpenSID/issues/7143) Perbaikan nama pemohon pada lampiran F-1.03 Surat Keterangan Pindah.
2. [#7144](https://github.com/OpenSID/OpenSID/issues/7144) Perbaikan input data rentang waktu program bantuan.
3. [#7146](https://github.com/OpenSID/OpenSID/issues/7146) Perbaikan batasan ubah status penduduk hanya jika data sudah dianggap lengkap.
4. [#7148](https://github.com/OpenSID/OpenSID/issues/7148) Perbaikan alur pada proses pengaduan.
5. [#7100](https://github.com/OpenSID/OpenSID/issues/7100) Perbaikan margin lampiran tidak mengikuti margin surat utama.
6. [#7145](https://github.com/OpenSID/OpenSID/issues/7145) Perbaikan ubah status dasar hanya bisa digunakan jika data sudah dinyatakan lengkap.
7. [#7150](https://github.com/OpenSID/OpenSID/issues/7150) Perbaikan kode isian data dinamis agar tidak hilang saat memilih sumber data (penduduk) pada surat TinyMCE.
8. [#7159](https://github.com/OpenSID/OpenSID/issues/7159) Perbaikan fungsi batal untuk data bertingkat (dusun/rw/rt).
9. [#7119](https://github.com/OpenSID/OpenSID/issues/7119) Perbaikan laporan penduduk bulanan.
10. [#7174](https://github.com/OpenSID/OpenSID/issues/7174) Perbaikan statistik bantuan pada halaman web.
11. [#7171](https://github.com/OpenSID/OpenSID/issues/7171) Perbaikan laporan keluarga bulanan.
12. [#7161](https://github.com/OpenSID/OpenSID/issues/7161) Perbaikan validasi rentang umur minimal dan maksimal.
13. [#7167](https://github.com/OpenSID/OpenSID/issues/7167) Perbaikan url utama /first ke domain utama.
14. [#7165](https://github.com/OpenSID/OpenSID/issues/7165) Perbaikan akses url artikel.
15. [#2939](https://github.com/OpenSID/premium/issues/2939) Perbaikan default collation untuk migrasi, halaman periksa dan config data awal.
16. [#7176](https://github.com/OpenSID/OpenSID/issues/7176) Perbaikan simpan data path kosong ([]) pada peta wilayah administrasi desa.
17. [#7162](https://github.com/OpenSID/OpenSID/issues/7162) Perbaikan hak akses tambah dtks pada modul rumah tangga.
18. [#7181](https://github.com/OpenSID/OpenSID/issues/7181) Perbaikan pencarian pada modul grup pengguna.
19. [#7188](https://github.com/OpenSID/OpenSID/issues/7188) Perbaikan input data sensus/survey dengan jenis ppertanyaan isian angka pada modul analisis.
20. [#7183](https://github.com/OpenSID/OpenSID/issues/7183) Perbaikan input select pada halaman buku tamu.
21. [#7116](https://github.com/OpenSID/OpenSID/issues/7116) Perbaikan hasil surat dengan pengaturan visual TTE aktif.
22. [#7172](https://github.com/OpenSID/OpenSID/issues/7172) Perbaikan penandatangan yang tersimpan di arsip surat.
23. [#7114](https://github.com/OpenSID/OpenSID/issues/7114) Perbaikan surat Keternagan Kelahiran TinyMCE.
24. [#7179](https://github.com/OpenSID/OpenSID/issues/7179) Perbaikan form isian manual identitas desa untuk kode desa, kecamatan, kabupaten dan provinsi.
25. [#7187](https://github.com/OpenSID/OpenSID/issues/7187) Perbaikan ubah data penduduk tanpa mengubah log tanggal peristiwa penduduk.
26. [#7180](https://github.com/OpenSID/OpenSID/issues/7180) Perbaikan pengaturan aktif/nonaktifkan telegram pada masing-masing pengguna.
27. [#7189](https://github.com/OpenSID/OpenSID/issues/7189) Perbaikan api TTE kirim surat ke OpenDK.
28. [#7082](https://github.com/OpenSID/OpenSID/issues/7082) Perbaikan sebutan desa pada halaman wigdet grafik keuangan desa.
29. [#7177](https://github.com/OpenSID/OpenSID/issues/7177) Perbaikan validasi select2 pada form tambah/ubah penduduk.
30. [#7182](https://github.com/OpenSID/OpenSID/issues/7182) Perbaikan pencarian pada modul pengguna.
31. [#7204](https://github.com/OpenSID/OpenSID/issues/7204) Perbaikan kirim email.
32. [#7223](https://github.com/OpenSID/OpenSID/issues/7223) Perbaikan format penomoran surat untuk kode isian [kode_desa].
33. [#7232](https://github.com/OpenSID/OpenSID/issues/7232) Perbaikan filter penduduk saat cetak surat.
34. [#7246](https://github.com/OpenSID/OpenSID/issues/7246) Perbaikan notifikasi email duplikat pada form penduduk.
35. [#7245](https://github.com/OpenSID/OpenSID/issues/7245) Perbaikan tombol batal untuk select2-tag/multi pada form pengaturan surat.
36. [#7250](https://github.com/OpenSID/OpenSID/issues/7250) Perbaikan akses hapus kelompok/lembaga jika terdapat anggota.

#### Penyesuaian Teknis
1. [#7149](https://github.com/OpenSID/OpenSID/issues/7149) Penghapusan duplikasi fungsi detail pada modul keluarga.
2. [#2843](https://github.com/OpenSID/premium/issues/2843) Penghapusan librari curly digantikan dengan guzzle.
3. [#7063](https://github.com/OpenSID/OpenSID/issues/7063) Penyesuaian .gitignore.
4. [#7160](https://github.com/OpenSID/OpenSID/issues/7160) Penghapusan duplikasi fungsi detail pada modul keluarga.
5. [#2867](https://github.com/OpenSID/premium/issues/2867) Penyesuaian syarat surat untuk kasus multidesa.
6. [#7102](https://github.com/OpenSID/OpenSID/issues/7102) Penyesuaian intalasi dengan wizard.
7. [#7147](https://github.com/OpenSID/OpenSID/issues/7147) Penyesuaian tools template dan kode isian editor pada pratinjau surat TinyMCE.
8. [#2938](https://github.com/OpenSID/premium/issues/2938) Pembatasan request ke server layanan untuk website demo.
9. [#2940](https://github.com/OpenSID/premium/issues/2940) Penyesuaian notifikasi pada pengecekan pelanggan.
10. [#2954](https://github.com/OpenSID/premium/issues/2954) Penyesuaian tombol ekspor impor dalam satu tombol grup.
11. [#2953](https://github.com/OpenSID/premium/issues/2953) Penyesuaian penggunaan slug untuk program bantuan.
12. [#2973](https://github.com/OpenSID/premium/issues/2973) Penyesuaian penggunaan rtf sesuai pengaturan untuk persiapan penghapusan.
13. [#2848](https://github.com/OpenSID/premium/issues/2848) Penyesuaian struktur tabel dan data kelompok_anggota melalui migrasi dan halaman periksa.
14. [#1294](https://github.com/OpenSID/premium/issues/1294) Penyesuaian pengaturan email.
15. [#2980](https://github.com/OpenSID/premium/issues/2980) Penyesuaian isi kolom form_isian pada tabel tweb_surat_format.
16. [#7196](https://github.com/OpenSID/OpenSID/issues/7196) Penyesuaian form pengaturan surat.
17. [#2979](https://github.com/OpenSID/premium/issues/2979) Pembatasan halaman periksa hanya bisa diakses oleh superadmin.