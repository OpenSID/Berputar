<?php

declare(strict_types=1);

return [
    'accepted'             => 'Bidang ini harus diterima.',
    'active_url'           => 'URL ini tidak sah.',
    'after'                => 'Tanggal harus berisi setelah :date.',
    'after_or_equal'       => 'Tanggal harus berisi setelah atau sama dengan :date.',
    'alpha'                => 'Bidang ini hanya boleh berisi huruf.',
    'alpha_dash'           => 'Bidang ini hanya boleh berisi huruf, angka, strip, dan garis bawah.',
    'alpha_num'            => 'Bidang ini hanya boleh berisi huruf dan angka.',
    'array'                => 'Bidang harus berisi sebuah array.',
    'attached'             => 'This field is already attached.',
    'before'               => 'Tanggal harus berisi sebelum :date.',
    'before_or_equal'      => 'Tanggal harus berisi tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'array'   => 'Konten ini harus memiliki panjang di antara :min dan :max item.',
        'file'    => 'Berkas ini harus berukuran di antara :min dan :max kilobyte.',
        'numeric' => 'Nilai ini harus bernilai di antara :min dan :max.',
        'string'  => 'String ini harus memiliki panjang di antara :min dan :max karakter.',
    ],
    'boolean'              => 'Bidang ini harus berisi true atau false.',
    'confirmed'            => 'Konfirmasi tidak sesuai.',
    'date'                 => 'Ini bukan tanggal yang benar.',
    'date_equals'          => 'Ini harus berisi tanggal yang sama dengan :date.',
    'date_format'          => 'Ini tidak cocok dengan format :format.',
    'different'            => 'Nilai ini harus tidak sama dengan :other.',
    'digits'               => 'Ini harus berisi :digits digit.',
    'digits_between'       => 'Ini harus di antara :min dan :max digit.',
    'dimensions'           => 'Gambar ini tidak memiliki dimensi yang benar.',
    'distinct'             => 'Bidang ini memiliki nilai duplikat.',
    'email'                => 'Ini harus berisi format email yang benar.',
    'ends_with'            => 'Ini harus berakhiran dengan: :values.',
    'exists'               => 'Nilai yang dipilih tidak sesuai.',
    'file'                 => 'Konten harus berisi sebuah berkas.',
    'filled'               => 'Bidang ini harus berisi sebuah nilai.',
    'gt'                   => [
        'array'   => 'Konten harus memiliki lebih dari :value item.',
        'file'    => 'Ukuran berkas harus berisi lebih besar dari :value kilobyte.',
        'numeric' => 'Nilai harus lebih besar dari :value.',
        'string'  => 'String harus berisi lebih besar dari :value karakter.',
    ],
    'gte'                  => [
        'array'   => 'Konten harus memiliki :value item atau lebih.',
        'file'    => 'Ukuran konten harus berisi lebih besar dari atau setara :value kilobyte.',
        'numeric' => 'Nilai harus berisi lebih besar dari atau setara :value.',
        'string'  => 'String harus berisi lebih besar dari atau setara :value karakter.',
    ],
    'image'                => 'Ini harus berisi sebuah gambar.',
    'in'                   => 'Pilihan nilai tidak sesuai.',
    'in_array'             => 'Nilai ini tidak ada di :other.',
    'integer'              => 'Ini harus berisi sebuah angka.',
    'ip'                   => 'Ini harus berisi alamat IP yang valid.',
    'ipv4'                 => 'Ini harus berisi alamat IPv4 yang valid.',
    'ipv6'                 => 'Ini harus berisi alamat IPv6 yang valid.',
    'json'                 => 'Ini harus berisi string JSON yang valid.',
    'lt'                   => [
        'array'   => 'Panjang array harus kurang dari :value item.',
        'file'    => 'Ukuran konten harus berisi kurang dari :value kilobyte.',
        'numeric' => 'Nilai harus berisi kurang dari :value.',
        'string'  => 'String harus berisi kurang dari :value karakter.',
    ],
    'lte'                  => [
        'array'   => 'Panjang array harus lebih dari :value item.',
        'file'    => 'Ukuran konten harus berisi kurang dari atau setara :value kilobyte.',
        'numeric' => 'Nilai harus berisi kurang dari atau setara :value.',
        'string'  => 'String harus berisi kurang dari atau setara :value karakter.',
    ],
    'max'                  => [
        'array'   => 'Panjang array tidak boleh lebih dari :max item.',
        'file'    => 'Ukuran konten tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => 'Nilai tidak boleh lebih besar dari :max.',
        'string'  => 'String tidak boleh lebih besar dari :max karakter.',
    ],
    'mimes'                => 'Ini harus berisi sebuah berkas berjenis: :values.',
    'mimetypes'            => 'Ini harus berisi sebuah berkas berjenis: :values.',
    'min'                  => [
        'array'   => 'Panjang array harus minimal :min item.',
        'file'    => 'Ukuran konten harus berisi minimal :min kilobyte.',
        'numeric' => 'Nilai harus berisi minimal :min.',
        'string'  => 'String harus berisi minimal :min karakter.',
    ],
    'multiple_of'          => 'The value must be a multiple of :value',
    'not_in'               => 'Pilihan nilai tidak sesuai.',
    'not_regex'            => 'Format ini tidak sesuai.',
    'numeric'              => 'Ini harus berisi angka.',
    'password'             => 'Kata sandi tidak sesuai',
    'present'              => 'Bidang ini wajib ada.',
    'regex'                => 'Format ini tidak sesuai.',
    'relatable'            => 'This field may not be associated with this resource.',
    'required'             => 'Bidang ini wajib di isi',
    'required_if'          => 'Bidang ini wajib di isi bila :other adalah :value.',
    'required_unless'      => 'Bidang ini wajib di isi jika :other berada dalam :values.',
    'required_with'        => 'Bidang ini wajib di isi bila :values tersedia.',
    'required_with_all'    => 'Bidang ini wajib di isi bila :values tersedia.',
    'required_without'     => 'Bidang ini wajib di isi bila :values tidak tersedia.',
    'required_without_all' => 'Bidang ini wajib di isi bila tidak satupun :values tersedia.',
    'same'                 => 'Nilai dari bidang ini harus sesuai dengan :other.',
    'size'                 => [
        'array'   => 'Panjang array harus memiliki :size item.',
        'file'    => 'Ukuran konten harus berisi :size kilobyte.',
        'numeric' => 'Nilai harus berisi :size.',
        'string'  => 'String harus berisi :size karakter.',
    ],
    'starts_with'          => 'Ini harus diawali salah satu dari berikut: :values.',
    'string'               => 'Ini harus berisi sebuah string.',
    'timezone'             => 'Ini harus berisi zona waktu yang valid.',
    'unique'               => 'Ini sudah ada sebelumnya.',
    'uploaded'             => 'Berkas gagal diunggah.',
    'url'                  => 'Format ini tidak valid.',
    'uuid'                 => 'Ini harus merupakan UUID yang valid.',
    'attributes'           => [
        'address'                  => 'alamat',
        'affiliate_url'            => 'URL afiliasi',
        'age'                      => 'usia',
        'amount'                   => 'jumlah',
        'announcement'             => 'pengumuman',
        'area'                     => 'daerah',
        'audience_prize'           => 'hadiah penonton',
        'available'                => 'tersedia',
        'birthday'                 => 'hari ulang tahun',
        'body'                     => 'badan',
        'city'                     => 'kota',
        'compilation'              => 'kompilasi',
        'concept'                  => 'konsep',
        'conditions'               => 'kondisi',
        'content'                  => 'konten',
        'country'                  => 'negara',
        'cover'                    => 'menutupi',
        'created_at'               => 'dibuat di',
        'creator'                  => 'pencipta',
        'currency'                 => 'mata uang',
        'current_password'         => 'kata sandi saat ini',
        'customer'                 => 'pelanggan',
        'date'                     => 'tanggal',
        'date_of_birth'            => 'tanggal lahir',
        'dates'                    => 'tanggal',
        'day'                      => 'hari',
        'deleted_at'               => 'dihapus pada',
        'description'              => 'deskripsi',
        'display_type'             => 'tipe tampilan',
        'district'                 => 'daerah',
        'duration'                 => 'durasi',
        'email'                    => 'surel',
        'excerpt'                  => 'kutipan',
        'filter'                   => 'Saring',
        'finished_at'              => 'selesai pada',
        'first_name'               => 'nama depan',
        'gender'                   => 'jenis kelamin',
        'grand_prize'              => 'hadiah utama',
        'group'                    => 'kelompok',
        'hour'                     => 'jam',
        'image'                    => 'gambar',
        'image_desktop'            => 'gambar desktop',
        'image_main'               => 'gambar utama',
        'image_mobile'             => 'gambar seluler',
        'images'                   => 'gambar-gambar',
        'is_audience_winner'       => 'adalah pemenang penonton',
        'is_hidden'                => 'tersembunyi',
        'is_subscribed'            => 'berlangganan',
        'is_visible'               => 'terlihat',
        'is_winner'                => 'adalah pemenang',
        'items'                    => 'item',
        'key'                      => 'kunci',
        'last_name'                => 'nama belakang',
        'lesson'                   => 'pelajaran',
        'line_address_1'           => 'alamat baris 1',
        'line_address_2'           => 'alamat baris 2',
        'login'                    => 'Gabung',
        'message'                  => 'pesan',
        'middle_name'              => 'nama tengah',
        'minute'                   => 'menit',
        'mobile'                   => 'seluler',
        'month'                    => 'bulan',
        'name'                     => 'nama',
        'national_code'            => 'kode nasional',
        'number'                   => 'nomor',
        'password'                 => 'kata sandi',
        'password_confirmation'    => 'konfirmasi kata sandi',
        'phone'                    => 'telepon',
        'photo'                    => 'foto',
        'portfolio'                => 'portofolio',
        'postal_code'              => 'kode Pos',
        'preview'                  => 'pratinjau',
        'price'                    => 'harga',
        'product_id'               => 'ID Produk',
        'product_uid'              => 'UID produk',
        'product_uuid'             => 'UUID produk',
        'promo_code'               => 'Kode promosi',
        'province'                 => 'propinsi',
        'quantity'                 => 'kuantitas',
        'reason'                   => 'alasan',
        'recaptcha_response_field' => 'bidang respons recaptcha',
        'referee'                  => 'wasit',
        'referees'                 => 'wasit',
        'reject_reason'            => 'menolak alasan',
        'remember'                 => 'ingat',
        'restored_at'              => 'dipulihkan pada',
        'result_text_under_image'  => 'teks hasil di bawah gambar',
        'role'                     => 'peran',
        'rule'                     => 'aturan',
        'rules'                    => 'aturan',
        'second'                   => 'detik',
        'sex'                      => 'jenis kelamin',
        'shipment'                 => 'pengiriman',
        'short_text'               => 'teks pendek',
        'size'                     => 'ukuran',
        'skills'                   => 'keterampilan',
        'slug'                     => 'siput',
        'specialization'           => 'spesialisasi',
        'started_at'               => 'dimulai pada',
        'state'                    => 'negara',
        'status'                   => 'status',
        'street'                   => 'jalan',
        'student'                  => 'siswa',
        'subject'                  => 'subyek',
        'tag'                      => 'menandai',
        'tags'                     => 'tag',
        'teacher'                  => 'guru',
        'terms'                    => 'ketentuan',
        'test_description'         => 'deskripsi tes',
        'test_locale'              => 'uji lokal',
        'test_name'                => 'nama tes',
        'text'                     => 'teks',
        'time'                     => 'waktu',
        'title'                    => 'judul',
        'type'                     => 'jenis',
        'updated_at'               => 'diperbarui pada',
        'user'                     => 'pengguna',
        'username'                 => 'nama pengguna',
        'value'                    => 'nilai',
        'year'                     => 'tahun',
    ],
];
