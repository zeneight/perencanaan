@extends('crudbooster::admin_template')
@section('content')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"/>
<style>
    .select2-container--default .select2-selection--single {
        border-radius: 0px !important
    }

    .select2-container .select2-selection--single {
        height: 35px
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #3c8dbc !important;
        border-color: #367fa9 !important;
        color: #fff !important;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: #fff !important;
    }

    .spin {
        display: none;
    }
</style>

<p><a title='Return' href="{{ crudbooster::adminPath('identifikasi-kebutuhan-barang') }}"><i class='fa fa-chevron-circle-left '></i>
        &nbsp; Kembali</a></p>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong>Formulir Pertanyaan Identifikasi Kebutuhan Barang</strong>
    </div>

    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data"
        action="{{ crudbooster::mainpath('add-save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="panel-body">

            <div class="form_wrapper">
                <fieldset class="msf_hide">
                    <h2>Informasi Umum</h2>
                    {{ form_input("Perubahan ke", "perubahan_ke", "text", 8, "", "required") }}
                    {{ form_input("Tanggal perubahan", "tgl_perubahan", "date", 8, "", "required") }}
                    <hr>
                    {{ form_input("Nama K/L/D", "nama_kld", "text", 8, "", "required") }}
                    {{ form_input("Satuan Kerja", "satuan_kerja", "text", 8, "", "") }}
                    {{ form_input("Pejabat Pembuat Komitmen (nama jabatan, bukan orang)", "ppk", "text", 8, "", "required") }}

                    {{ form_input("Program (sesuai DIPA)", "program", "text", 8, "", "") }}
                    {{ form_textarea("Kegiatan (sesuai DIPA)", "kegiatan", "", "", "") }}
                    {{ form_textarea("Sub Kegiatan (sesuai DIPA)", "sub_kegiatan", "", "", "") }}
                    {{ form_textarea("Output (sesuai DIPA)", "output", "", "required", "") }}
                    <hr>

                    <h2>Identifikasi kode Barang Milik Negara (BMN)</h2>
                    {{ form_input("Kode BMN/ Persediaan", "kode_bmn", "text", 8, "", "required") }}
                    {{ form_input("Nama BMN/ Persediaan", "nama_bmn", "text", 8, "", "required") }}

                    <hr>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <input class='btn btn-default' type="button" name="back" value="Kembali" onclick="msf_btn_back()">
                            <input class='btn btn-warning' type="button" name="next" value="Lanjut Berikutnya" onclick="msf_btn_next()">
                        </div>
                    </div>
                    <div class="msf_bullet_o"></div>
                    <div class="msf_line"></div>
                </fieldset>

                <fieldset class="msf_hide">
                    <h2>Identifikasi Kebutuhan Barang</h2>
                    {{ form_input("Nama Barang", "nama_barang", "text", 8, "", "required") }}
                    {{ form_textarea("Jelaskan kriteria INDIKATOR KINERJA/SPESIFIKASI KINERJA yang dibutuhkan untuk pengadaan barang ini", "kreteria", "", "required", "") }}
                    {{ form_textarea("Jelaskan fungsi/kegunaan barang tersebut", "fungsi_barang", "", "required", "") }}
                    {{ form_textarea("Jelaskan ukuran/kapasitas barang tersebut", "ukuran_barang", "", "required", "") }}
                    {{ form_textarea("Jelaskan macam garansi yang dibutuhkan/disyaratkan untuk pengadaan barang ini", "garansi_barang", "", "required", "") }}
                    
                    <hr>
                    {{ form_input("Jelaskan jumlah barang yang dibutuhkan (dalam satuan unit)", "jml_barang", "number", 8, "", "required") }}
                    {{ form_input("Jelaskan kapan barang ini direncanakan akan dimanfaatkan", "kapan_manfaat_brg", "text", 8, "", "required") }}
                    {{ form_input("Jelaskan Pihak yang akan menggunakan/mengelola Barang", "pihak_pengguna", "text", 8, "", "required") }}
                    {{ form_input("Jelaskan Total perkiraan waktu pengadaan Barang (termasuk waktu pengiriman barang sampai tiba di lokasi)", "perkiraan_waktu", "text", 8, "", "required") }}
                    
                    <hr>
                    {{ form_start_combobox("Apakah barang ini Terdapat di e-Katalog LKPP", "ada_ekatalog", "8", "", "required", "") }}
                        <option>Ya</option>
                        <option>Tidak</option>
                    {{ form_end_combobox() }}

                    {{ form_start_combobox("Jelaskan Tingkat prioritas kebutuhan Barang. Bila perlu mohon dijelaskan pada pilihan lainnya", "tingkat_prioritas_brg", 8, "", "required", "") }}
                        <option>Tinggi</option>
                        <option>Sedang</option>
                        <option>Rendah</option>
                    {{ form_end_combobox() }}
                    
                    {{ form_input("Perkiraan biaya", "perkiraan_biaya", "number", 8, "", "required") }}
                    {{ form_input("Atas perkiraan biaya di atas, jelaskan rincian perhitungannya", "rincian", "text", 8, "", "") }}

                    <hr>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <input class='btn btn-default' type="button" name="back" value="Kembali" onclick="msf_btn_back()">
                            <input class='btn btn-warning' type="button" name="next" value="Lanjut Berikutnya" onclick="msf_btn_next()">
                        </div>
                    </div>
                    <div class="msf_bullet_o"></div>
                    <div class="msf_line"></div>
                </fieldset>

                <fieldset class="msf_hide">
                    <h2>Identifikasi Manajemen Penunjang Tugas dan Fungsi PPK</h2>
                    {{ form_input("Jumlah pegawai dalam unit kerja. (dalam tim pengelolaan manajemen PPK)", "jml_pegawai", "number", 8, "", "required") }}
                    
                    {{ form_start_combobox("Apakah PPK dibantu oleh Tim atau Tenaga Ahli. Jelaskan pada kotak 'Lainnya'", "ada_team_ahli", "8", "", "required", "") }}
                        <option>Ya</option>
                        <option>Tidak</option>
                    {{ form_end_combobox() }}

                    {{ form_start_combobox("Tingkat beban tugas dan tanggung jawab pegawai dalam melaksanakan tugas dan fungsi Tim Pengelolaan Manajemen PPK", "tingkat_beban_tugas", "8", "", "required", "") }}
                        <option>Tinggi</option>
                        <option>Sedang</option>
                        <option>Rendah</option>
                    {{ form_end_combobox() }}

                    {{ form_start_combobox("Apakah Jumlah barang yang telah tersedia/dimiliki/dikuasai saat ini sudah dapat memenuhi kebutuhan pada unit kerja PPK saat ini", "ket_jml_barang_tersedia", "8", "", "required", "") }}
                        <option>Ya</option>
                        <option>Tidak</option>
                    {{ form_end_combobox() }}

                    {{ form_start_combobox("Apabila jumlah barang saat ini belum memenuhi kebutuhan, Jelaskan kebutuhan barang", "kebutuhan_barang", "8", "", "required", "") }}
                        <option>Ya</option>
                        <option>Tidak</option>
                    {{ form_end_combobox() }}

                    <hr>
                    <h2>Identifikasi Barang Yang Telah Tersedia/Dimiliki/Dikuasai</h2>
                    {{ form_input("Jumlah barang (kode barang ini) yang telah tersedia /dimiliki/dikuasasi", "jml_barang_tersedia", "number", 8, "", "required") }}
                    {{ form_input("Jumlah barang (kode barang ini) yang berstatus LAYAK PAKAI", "jml_barang_layak", "number", 8, "", "required") }}
                    {{ form_input("Jumlah barang (kode barang ini) yang berstatus RUSAK RINGAN", "jml_barang_rusak", "number", 8, "", "required") }}
                    {{ form_input("Jumlah barang (kode barang ini) yang berstatus RUSAK BERAT", "jml_barang_rusak_berat", "number", 8, "", "required") }}
                    {{ form_input("Jelaskan lokasi keberadaan barang terdapat di ruang apa, bagian apa, satker apa", "lokasi_barang", "text", 8, "", "required") }}
                    {{ form_input("Jelaskan sumber dana pengadaan barang tersebut pada pengadaan tahun-tahun sebelumnya", "sumber_dana", "text", 8, "", "required") }}

                    <hr>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <input class='btn btn-default' type="button" name="back" value="Kembali" onclick="msf_btn_back()">
                            <input class='btn btn-warning' type="button" name="next" value="Lanjut Berikutnya" onclick="msf_btn_next()">
                        </div>
                    </div>

                    <div class="msf_bullet_o"></div>
                    <div class="msf_line"></div>
                </fieldset>

                <fieldset class="msf_hide">
                    <h2>Identifikasi Pasokan/supply barang</h2>
                    {{ form_start_combobox("Kemudahan memperoleh Barang di pasaran Indonesia sesuai dengan jumlah yang dibutuhkan", "kemudahan_peroleh_barang", "8", "", "required", "") }}
                        <option>Ya</option>
                        <option>Tidak</option>
                    {{ form_end_combobox() }}

                    {{ form_start_combobox("Terdapat produsen/pelaku usaha yang dinilai mampu dan memenuhi syarat", "terdapat_produsen", "8", "", "required", "") }}
                        <option>Banyak</option>
                        <option>Terbatas</option>
                    {{ form_end_combobox() }}

                    {{ form_input("Apabila terbatas, jelaskan dan sebutkan nama penyedia yang selama memenuhi kebutuhan barang ini", "keterangan_terbatas", "text", 8, "", "required") }}
                    <hr>
                    {{ form_start_combobox ("Kreteria Barang", "kreteria_barang", "8", "", "required", "") }}
                        <option>Produk dalam negeri</option>
                        <option>Barang impor</option>
                        <option>Pabrikan</option>
                        <option>Kerajinan tangan</option>
                    {{ form_end_combobox() }}
                    {{ form_input("Persyaratan Barang memiliki nilai TKDN tertentu. apabila Ya, Pada kotak 'Lainnya' jelaskan berapa % paling sedikit TKDN", "barang_nilai_tkd", "text", 8, "", "required") }}
                    
                    <hr>
                    <h2>Identifikasi Persyaratan Lain Yang Diperlukan</h2>
                    {{ form_input("Cara pengiriman dan pengangkutan", "cara_pengiriman", "text", 8, "", "required") }}
                    {{ form_textarea("Cara Pemasangan", "cara_pemasangan", "", "required", "") }}
                    {{ form_textarea("Cara Penimbunan/Penyimpanan", "cara_penyimpanan", "", "required", "") }}
                    {{ form_input("Cara pengoperasian/penggunaan", "cara_pengoprasian", "text", 8, "", "required") }}
                    {{ form_input("Kebutuhan Pelatihan", "kebutuhan_pelatihan", "text", 8, "", "required") }}
                    {{ form_input("Aspek Pengadaan", "aspek_pengadaan", "text", 8, "", "required") }}

                    <hr>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <input class='btn btn-default' type="button" name="back" value="Kembali" onclick="msf_btn_back()">
                            <input class='btn btn-warning' type="button" name="next" value="Lanjut Berikutnya" onclick="msf_btn_next()">
                        </div>
                    </div>

                    <div class="msf_bullet_o"></div>
                    <div class="msf_line"></div>
                </fieldset>

                <fieldset class="msf_hide">
                    <h2>Identifikasi Konsolidasi Pengadaan Barang</h2>
                    {{ form_input("Barang Sejenis", "barang_sejenis", "text", 8, "", "required") }}
                    {{ form_input("Idikasi Konsolidasi", "idikasi_konsolidasi", "text", 8, "", "required") }}
                    {{ form_input("Rencana Konsolidasi", "rencana_konsolidasi", "text", 8, "", "required") }}
                    {{ form_input("Catatan", "catatan", "text", 8, "", "required") }}
                    {{ form_input("Tgl Disusun Pertama", "tgl_disusun_pertama", "text", 8, "", "required") }}
                    {{ form_input("Disusun Oleh", "disusun_oleh", "text", 8, "", "required") }}

                    <hr>
                    {{ form_input("Disetujui Oleh", "disetujui_oleh", "text", 8, "", "required") }}
                    {{ form_input("Pejabat Pembuat Komitmen", "pejabat_pembuat_komitmen", "text", 8, "", "required") }}
                    {{ form_input("Mengetahui Tenaga Ahli", "mengetahui_tenaga_ahli", "text", 8, "", "required") }}

                    <hr>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <input class='btn btn-default' type="button" name="back" value="Kembali" onclick="msf_btn_back()">
                            <input class='btn btn-warning' type="button" name="next" value="Lanjut Berikutnya" onclick="msf_btn_next()">
                            <input type="submit" name="submit" class="btn btn-primary" value="Submit Data" onclick="">
                        </div>
                    </div>

                    <div class="msf_bullet_o"></div>
                    <div class="msf_line"></div>
                </fieldset>

            </div>
        </div>


</div>
<div class="panel-footer">
</div>
</form>
</div>

<script src="{{ asset('js/multistep.js') }}"></script>
@endsection