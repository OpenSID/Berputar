<?php

/*
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package   OpenSID
 * @author    Tim Pengembang OpenDesa
 * @copyright Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright Hak Cipta 2016 - 2024 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license   http://www.gnu.org/licenses/gpl.html GPL V3
 * @link      https://github.com/OpenSID/OpenSID
 *
 */

defined('BASEPATH') || exit('No direct script access allowed');

// Route::setAutoRoute(true);

// Definisi Rute Default
// Route::get('/', 'First@index');
Route::get('/index/{p?}', 'First@index');

// Rute untuk error 404 (Override)
Route::error('404_override', static function (): void {
    show_404();
});

// Rute untuk sitemap.xml dan feed.xml
Route::get('sitemap.xml', 'Sitemap@index');
Route::get('sitemap', 'Sitemap@index');
Route::get('feed.xml', 'Feed@index');
Route::get('feed', 'Feed@index');

// Rute untuk PPID
Route::get('ppid', 'Api_informasi_publik@ppid');

Route::post('/add_comment/{id?}', 'First@add_comment');
Route::get('/load_apbdes', 'First@load_apbdes');
Route::get('/load_aparatur_desa', 'First@load_aparatur_desa');
Route::get('/load_aparatur_wilayah/{id?}/{kd_jabatan?}', 'First@load_aparatur_wilayah');

// Route lama, masih menggunakan first
Route::group('/first', static function (): void {
    Route::get('/unduh_dokumen_artikel/{id}', 'First@unduh_dokumen_artikel')->name('first.unduh_dokumen_artikel');    
    Route::get('/kelompok/{slug?}', 'First@kelompok')->name('first.kelompok');    
    Route::get('/kesehatan/{slug?}', 'First@kesehatan')->name('first.kesehatan');
    Route::post('/ajax_peserta_program_bantuan', 'First@ajax_peserta_program_bantuan')->name('first.ajax_peserta_program_bantuan');
    Route::get('/dpt', 'First@dpt')->name('first.dpt');
    Route::get('/get_form_info', 'First@get_form_info')->name('first.get_form_info');    
});

// Captcha
Route::get('captcha', 'Securimage@show');

// Dokumen web
Route::group('/dokumen_web', static function (): void {
    Route::get('/tampil/{slug?}', 'Dokumen_web@tampil');
    Route::get('/unduh/{slug?}', 'Dokumen_web@unduh');
    Route::get('/unduh_berkas/{id_dokumen}', 'Dokumen_web@unduh_berkas');
});

Route::group('/statistik_web', static function (): void {
    Route::get('/load_chart_gis/{lap?}', 'Statistik_web@load_chart_gis');
    Route::get('/get_data_stat/{data?}/{lap?}', 'Statistik_web@get_data_stat');
    Route::get('/dusun/{tipe?}/{lap?}', 'Statistik_web@dusun');
    Route::get('/rw/{tipe?}/{lap?}', 'Statistik_web@rw');
    Route::get('/rt/{tipe?}/{lap?}', 'Statistik_web@rt');
    Route::get('/chart_gis_desa/{lap?}/{desa?}', 'Statistik_web@chart_gis_desa');
    Route::get('/chart_gis_dusun/{tipe?}/{lap?}/{dusun?}', 'Statistik_web@chart_gis_dusun');
    Route::get('/chart_gis_rw/{tipe?}/{lap?}/{dusun?}/{rw?}', 'Statistik_web@chart_gis_rw');
    Route::get('/chart_gis_rt/{tipe?}/{lap?}/{rw?}/{rt?}', 'Statistik_web@chart_gis_rt');
    Route::get('/chart_gis_kadus/{id_kepala?}', 'Statistik_web@chart_gis_kadus');
    Route::get('/load_kadus/{tipe?}/{lap?}', 'Statistik_web@load_kadus');
});

// Tampil assets
Route::get('/tampil/{slug?}', 'Dokumen_web@tampil');
Route::get('/unduh/{slug?}', 'Dokumen_web@unduh');

// Koneksi database
Route::get('koneksi-database', 'Koneksi_database@index');
Route::group('koneksi_database', static function (): void {
    Route::get('/', 'Koneksi_database@index');
    Route::get('config', 'Koneksi_database@config');
    Route::get('updateKey', 'Koneksi_database@updateKey');
    Route::get('encryptPassword', 'Koneksi_database@encryptPassword');
});

Route::group('', ['namespace' => 'fweb'], static function (): void {
    Route::group('buku-tamu', static function (): void {
        Route::get('/', 'Buku_tamu@index')->name('fweb.buku_tamu.index');
        Route::post('/registrasi', 'Buku_tamu@registrasi')->name('fweb.buku_tamu.registrasi');
        Route::get('/kepuasan/{id?}', 'Buku_tamu@kepuasan')->name('fweb.buku_tamu.kepuasan');
        Route::match(['GET', 'POST'], '/jawaban/{id?}/{jawaban?}', 'Buku_tamu@jawaban')->name('fweb.buku_tamu.jawaban');
    });
});

Route::group('kehadiran', ['namespace' => 'kehadiran'], static function (): void {
    Route::get('/', 'Perangkat@index')->name('kehadiran.perangkat.index');
    Route::post('/cek/{ektp?}', 'Perangkat@cek')->name('kehadiran.perangkat.cek');
    Route::get('/masuk-ektp', 'Perangkat@masukEktp')->name('kehadiran.perangkat.masukEktp');
    Route::post('/cek-ektp', 'Perangkat@cekEktp')->name('kehadiran.perangkat.cekEktp');
    Route::get('/masuk', 'Perangkat@masuk')->name('kehadiran.perangkat.masuk');
    Route::match(['GET', 'POST'], '/check-in-out', 'Perangkat@checkInOut')->name('kehadiran.perangkat.checkInOut');
    Route::get('/logout', 'Perangkat@logout')->name('kehadiran.perangkat.logout');
});

Route::group('notif_web', static function (): void {
    Route::get('inbox', 'Notif_web@inbox')->name('fweb.notif_web.inbox');
    Route::get('surat_perlu_perhatian', 'Notif_web@surat_perlu_perhatian')->name('fweb.notif_web.surat_perlu_perhatian');
});

// Include all routes in folder Web
foreach (glob(APPPATH . 'Routes/Web/*.php') as $file) {
    require_once $file;
}
