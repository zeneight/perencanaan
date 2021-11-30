<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use PDF;
	use CRUDBooster;

	class AdminTbIkBarang13Controller extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "nama_kld";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_icon";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = false;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "tb_ik_barang";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Perubahan Ke","name"=>"perubahan_ke"];
			$this->col[] = ["label"=>"Tgl Perubahan","name"=>"tgl_perubahan"];
			$this->col[] = ["label"=>"Nama Kld","name"=>"nama_kld"];
			$this->col[] = ["label"=>"Satuan Kerja","name"=>"satuan_kerja"];
			$this->col[] = ["label"=>"Ppk","name"=>"ppk"];
			$this->col[] = ["label"=>"Program","name"=>"program"];
			$this->col[] = ["label"=>"Kegiatan","name"=>"kegiatan"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Perubahan Ke','name'=>'perubahan_ke','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Tanggal Perubahan','name'=>'tgl_perubahan','type'=>'date','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Nama K/L/D','name'=>'nama_kld','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Satuan Kerja','name'=>'satuan_kerja','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Pejabat Pembuat Komitmen (nama jabatan, bukan orang)','name'=>'ppk','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Program (sesuai DIPA)','name'=>'program','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Kegiatan (sesuai DIPA)','name'=>'kegiatan','type'=>'textarea','validation'=>'required|min:1','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Sub Kegiatan (sesuai DIPA)','name'=>'sub_kegiatan','type'=>'textarea','validation'=>'required|min:1','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Output (sesuai DIPA)','name'=>'output','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Kode BMN/ Persediaan','name'=>'kode_bmn','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Nama BMN/ Persediaan','name'=>'nama_bmn','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Nama Barang','name'=>'nama_barang','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan kriteria INDIKATOR KINERJA/SPESIFIKASI KINERJA yang dibutuhkan untuk pengadaan barang ini','name'=>'kreteria','type'=>'textarea','validation'=>'required|min:1','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan fungsi/kegunaan barang tersebut','name'=>'fungsi_barang','type'=>'textarea','validation'=>'required|min:1','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan ukuran/kapasitas barang tersebut','name'=>'ukuran_barang','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan macam garansi yang dibutuhkan/disyaratkan untuk pengadaan barang ini','name'=>'garansi_barang','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan jumlah barang yang dibutuhkan (dalam satuan unit)','name'=>'jml_barang','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan kapan barang ini direncanakan akan dimanfaatkan','name'=>'kapan_manfaat_brg','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan Pihak yang akan menggunakan/mengelola Barang','name'=>'pihak_pengguna','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan Total perkiraan waktu pengadaan Barang (termasuk waktu pengiriman barang sampai tiba di lokasi)','name'=>'perkiraan_waktu','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Apakah barang ini Terdapat di e-Katalog LKPP','name'=>'ada_ekatalog','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Tinggi;Sedang;Rendah'];
			$this->form[] = ['label'=>'Jelaskan Tingkat prioritas kebutuhan Barang. Bila perlu mohon dijelaskan pada pilihan lainnya','name'=>'tingkat_prioritas_brg','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Perkiraan biaya','name'=>'perkiraan_biaya','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Atas perkiraan biaya di atas, jelaskan rincian perhitungannya','name'=>'rincian','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jumlah pegawai dalam unit kerja. (dalam tim pengelolaan manajemen PPK)','name'=>'jml_pegawai','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Apakah PPK dibantu oleh Tim atau Tenaga Ahli. Jelaskan pada kotak "Lainnya"','name'=>'ada_team_ahli','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Tinggi;Sedang;Rendah'];
			$this->form[] = ['label'=>'Tingkat beban tugas dan tanggung jawab pegawai dalam melaksanakan tugas dan fungsi Tim Pengelolaan Manajemen PPK','name'=>'tingkat_beban_tugas','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Ya;Tidak'];
			$this->form[] = ['label'=>'Apakah Jumlah barang yang telah tersedia/dimiliki/dikuasai saat ini sudah dapat memenuhi kebutuhan pada unit kerja PPK saat ini','name'=>'ket_jml_barang_tersedia','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Ya;Tidak'];
			$this->form[] = ['label'=>'Apabila jumlah barang saat ini belum memenuhi kebutuhan, Jelaskan kebutuhan barang','name'=>'kebutuhan_barang','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jumlah barang (kode barang ini) yang telah tersedia /dimiliki/dikuasasi','name'=>'jml_barang_tersedia','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jumlah barang (kode barang ini) yang berstatus LAYAK PAKAI','name'=>'jml_barang_layak','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jumlah barang (kode barang ini) yang berstatus RUSAK RINGAN','name'=>'jml_barang_rusak','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jumlah barang (kode barang ini) yang berstatus RUSAK BERAT','name'=>'jml_barang_rusak_berat','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan lokasi keberadaan barang terdapat di ruang apa, bagian apa, satker apa','name'=>'lokasi_barang','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Jelaskan sumber dana pengadaan barang tersebut pada pengadaan tahun-tahun sebelumnya','name'=>'sumber_dana','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Kemudahan memperoleh Barang di pasaran Indonesia sesuai dengan jumlah yang dibutuhkan','name'=>'kemudahan_peroleh_barang','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Banyak;Terbatas'];
			$this->form[] = ['label'=>'Terdapat produsen/pelaku usaha yang dinilai mampu dan memenuhi syarat','name'=>'terdapat_produsen','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Apabila terbatas, jelaskan dan sebutkan nama penyedia yang selama memenuhi kebutuhan barang ini','name'=>'keterangan_terbatas','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Kreteria Barang','name'=>'kreteria_barang','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Persyaratan Barang memiliki nilai TKDN tertentu. apabila Ya, Pada kotak "Lainnya" jelaskan berapa % paling sedikit TKDN','name'=>'barang_nilai_tkd','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Cara pengiriman dan pengangkutan','name'=>'cara_pengiriman','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Cara Pemasangan','name'=>'cara_pemasangan','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Cara Penimbunan / Penyimpanan','name'=>'cara_penyimpanan','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Cara pengoperasian/penggunaan','name'=>'cara_pengoprasian','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Kebutuhan Pelatihan','name'=>'kebutuhan_pelatihan','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Aspek Pengadaan','name'=>'aspek_pengadaan','type'=>'text','validation'=>'required|min:1','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Barang Sejenis','name'=>'barang_sejenis','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Idikasi Konsolidasi','name'=>'idikasi_konsolidasi','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Rencana Konsolidasi','name'=>'rencana_konsolidasi','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Catatan','name'=>'catatan','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Tgl Disusun Pertama','name'=>'tgl_disusun_pertama','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Disusun Oleh','name'=>'disusun_oleh','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Disetujui Oleh','name'=>'disetujui_oleh','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Pejabat Pembuat Komitmen','name'=>'pejabat_pembuat_komitmen','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Mengetahui Tenaga Ahli','name'=>'mengetahui_tenaga_ahli','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Perubahan Ke','name'=>'perubahan_ke','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Tanggal Perubahan','name'=>'tgl_perubahan','type'=>'date','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Nama K/L/D','name'=>'nama_kld','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Satuan Kerja','name'=>'satuan_kerja','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Pejabat Pembuat Komitmen (nama jabatan, bukan orang)','name'=>'ppk','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Program (sesuai DIPA)','name'=>'program','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Kegiatan (sesuai DIPA)','name'=>'kegiatan','type'=>'textarea','validation'=>'required|min:1','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Sub Kegiatan (sesuai DIPA)','name'=>'sub_kegiatan','type'=>'textarea','validation'=>'required|min:1','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Output (sesuai DIPA)','name'=>'output','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Kode BMN/ Persediaan','name'=>'kode_bmn','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Nama BMN/ Persediaan','name'=>'nama_bmn','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Nama Barang','name'=>'nama_barang','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan kriteria INDIKATOR KINERJA/SPESIFIKASI KINERJA yang dibutuhkan untuk pengadaan barang ini','name'=>'kreteria','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan fungsi/kegunaan barang tersebut','name'=>'fungsi_barang','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan ukuran/kapasitas barang tersebut','name'=>'ukuran_barang','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan macam garansi yang dibutuhkan/disyaratkan untuk pengadaan barang ini','name'=>'garansi_barang','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan jumlah barang yang dibutuhkan (dalam satuan unit)','name'=>'jml_barang','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan kapan barang ini direncanakan akan dimanfaatkan','name'=>'kapan_manfaat_brg','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan Pihak yang akan menggunakan/mengelola Barang','name'=>'pihak_pengguna','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan Total perkiraan waktu pengadaan Barang (termasuk waktu pengiriman barang sampai tiba di lokasi)','name'=>'perkiraan_waktu','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Apakah barang ini Terdapat di e-Katalog LKPP','name'=>'ada_ekatalog','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Tinggi;Sedang;Rendah'];
			//$this->form[] = ['label'=>'Jelaskan Tingkat prioritas kebutuhan Barang. Bila perlu mohon dijelaskan pada pilihan lainnya','name'=>'tingkat_prioritas_brg','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Perkiraan biaya','name'=>'perkiraan_biaya','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Atas perkiraan biaya di atas, jelaskan rincian perhitungannya','name'=>'rincian','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jumlah pegawai dalam unit kerja. (dalam tim pengelolaan manajemen PPK)','name'=>'jml_pegawai','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Apakah PPK dibantu oleh Tim atau Tenaga Ahli. Jelaskan pada kotak "Lainnya"','name'=>'ada_team_ahli','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Tinggi;Sedang;Rendah'];
			//$this->form[] = ['label'=>'Tingkat beban tugas dan tanggung jawab pegawai dalam melaksanakan tugas dan fungsi Tim Pengelolaan Manajemen PPK','name'=>'tingkat_beban_tugas','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Ya;Tidak'];
			//$this->form[] = ['label'=>'Apakah Jumlah barang yang telah tersedia/dimiliki/dikuasai saat ini sudah dapat memenuhi kebutuhan pada unit kerja PPK saat ini','name'=>'ket_jml_barang_tersedia','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Ya;Tidak'];
			//$this->form[] = ['label'=>'Apabila jumlah barang saat ini belum memenuhi kebutuhan, Jelaskan kebutuhan barang','name'=>'kebutuhan_barang','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jumlah barang (kode barang ini) yang telah tersedia /dimiliki/dikuasasi','name'=>'jml_barang_tersedia','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jumlah barang (kode barang ini) yang berstatus LAYAK PAKAI','name'=>'jml_barang_layak','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jumlah barang (kode barang ini) yang berstatus RUSAK RINGAN','name'=>'jml_barang_rusak','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jumlah barang (kode barang ini) yang berstatus RUSAK BERAT','name'=>'jml_barang_rusak_berat','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan lokasi keberadaan barang terdapat di ruang apa, bagian apa, satker apa','name'=>'lokasi_barang','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Jelaskan sumber dana pengadaan barang tersebut pada pengadaan tahun-tahun sebelumnya','name'=>'sumber_dana','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Kemudahan memperoleh Barang di pasaran Indonesia sesuai dengan jumlah yang dibutuhkan','name'=>'kemudahan_peroleh_barang','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'Banyak;Terbatas'];
			//$this->form[] = ['label'=>'Terdapat produsen/pelaku usaha yang dinilai mampu dan memenuhi syarat','name'=>'terdapat_produsen','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Apabila terbatas, jelaskan dan sebutkan nama penyedia yang selama memenuhi kebutuhan barang ini','name'=>'keterangan_terbatas','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Kreteria Barang','name'=>'kreteria_barang','type'=>'select','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Persyaratan Barang memiliki nilai TKDN tertentu. apabila Ya, Pada kotak "Lainnya" jelaskan berapa % paling sedikit TKDN','name'=>'barang_nilai_tkd','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Cara pengiriman dan pengangkutan','name'=>'cara_pengiriman','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Cara Pemasangan','name'=>'cara_pemasangan','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Cara Penimbunan / Penyimpanan','name'=>'cara_penyimpanan','type'=>'textarea','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Cara pengoperasian/penggunaan','name'=>'cara_pengoprasian','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Kebutuhan Pelatihan','name'=>'kebutuhan_pelatihan','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Aspek Pengadaan','name'=>'aspek_pengadaan','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Barang Sejenis','name'=>'barang_sejenis','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Idikasi Konsolidasi','name'=>'idikasi_konsolidasi','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Rencana Konsolidasi','name'=>'rencana_konsolidasi','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Catatan','name'=>'catatan','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Tgl Disusun Pertama','name'=>'tgl_disusun_pertama','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Disusun Oleh','name'=>'disusun_oleh','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Disetujui Oleh','name'=>'disetujui_oleh','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Pejabat Pembuat Komitmen','name'=>'pejabat_pembuat_komitmen','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Mengetahui Tenaga Ahli','name'=>'mengetahui_tenaga_ahli','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
	        $this->addaction = array();


	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          

	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = "
			";
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css 	= array();
			$this->load_css[] 	= asset('css/custom.css');
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
	            
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



	    //By the way, you can still create your own method in here... :)
	    // getAdd
		public function getAdd(){
			//Create an Auth
			if(!CRUDBooster::isUpdate() && $this->global_privilege==FALSE || $this->button_edit==FALSE) {    
				CRUDBooster::redirect(CRUDBooster::adminPath(),trans("crudbooster.denied_access"));
			}

			$data = [];
			$data['page_title'] = 'Tambah Identifikasi Kebutuhan Barang';

			return view('admin/identifikasi_kebutuhan/barang/add', $data);
		} 

		// detail
		public function getDetail($id) {
			//Create an Auth
			if(!CRUDBooster::isRead() && $this->global_privilege==FALSE || $this->button_edit==FALSE) {    
			  CRUDBooster::redirect(CRUDBooster::adminPath(),trans("crudbooster.denied_access"));
			}
			
			$data = [];
			$data['page_title'] = 'Detail Form Identifikasi Barang';
			$data['row'] = DB::table('tb_ik_barang')->where('id',$id)->first();
			
			//Please use cbView method instead view method from laravel
			// $this->cbView('custom_detail_view',$data);
			return view('admin/identifikasi_kebutuhan/barang/detail', $data);
		}

		// laporan
		public function getLaporanPdf($idnya)
		{
			$dt = array();
			$no = 1;
			$dt['laporan']['instansi'] = "Dinas Kominfo";
			$dt['laporan']['tanggal'] = "tanggal";

			$dt['laporan']['data'] = DB::table('tb_ik_barang')
				->orderBy('id')
				->where('id', $idnya)
				->first();

			// dd($dt);
			
			// dd(\Carbon\Carbon::now()->diffForHumans());

			if ($dt['laporan']['data'] == null) {
				return redirect('admin/identifikasi_kebutuhan')->with('status', 'Maaf, Anda tidak dapat membuat laporan ini karena belum ada data di dalam database!');
			}

			$datatopdf = PDF::loadView('admin.identifikasi_kebutuhan.barang.laporan', $dt)->setPaper('a4', 'portait');
			// If you want to store the generated pdf to the server then you can use the store function
			# $pdf->save(storage_path().'_filename.pdf');
			// Finally, you can download the file using download function
			return $datatopdf->stream('laporan_identifikasi_kebutuhan_barang_.pdf');
		}


	}