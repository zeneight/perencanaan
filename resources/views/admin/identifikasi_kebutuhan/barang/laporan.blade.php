<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    .head-text {
        font-size: 20px;
        font-weight: bolder;
    }    
    table.absen {
        border-collapse: collapse;
        width: 100%;
    }
    table.absen, .absen th, .absen td {
        border: 1px solid black;
    }
    /* .absen tr:nth-child(even) {background-color: #f2f2f2;} */
    /*.absen th {
        text-align: center;
    }*/
    .absen th, .absen td {
        padding: 1px 2px;
        font-size: 11px;
        vertical-align: top;
        /* word-wrap: break-word; */
    }
    .absen th {
        /*background-color: #4CAF50;
        color: white;*/
    }
    .absen tr.header {
        text-align: center;
        font-size:12px !important;
    }
    table.head {
        border: none;
        font-size: 10px;
    }
    table.head td.first {
        font-weight: bolder;
    }
    .black {
        font-weight: bolder;
        background-color: #f2f2f2 !important;
    }
    .absensi {
        text-align: center;
    }
    .header {
        text-align: center;
        margin: 0px;
    }
    .besar {
        text-align:center;
        margin: 0px;
        text-transform: uppercase;
        font-size: 12px;
    }
    hr.garis {
        padding: 0px;
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .column {
        float: left;
        /* width: 50%; */
    }
    .column td {
        padding-left: 10px;
        background-color: #fff;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    .head.bottom {
        margin-top: 20px;
        width:100%;
        text-align:center;
    }
    .ttd {
        padding-top: 50px;
    }
    .none-bottom td {
        border-bottom:none;
    }
    .none-top td {
        border-top:none;
    }
    .foto {
        width: 50px;
        float:left;
    }
    .head tr td {
        align: center;
    }
    .head.right {
        margin-left: 50px;
        font-size: 20px;
    }
    .isi-konten {
        font-size: 12px;
        padding: 30px;
    }
    /* -------- */
    .center, .nomor {
        text-align: center;
        font-weight: bold;
    }
    .pertanyaan {
        font-weight: bold;
    }
    .absen tr td.subjudul {
        /* font-weight: bold; */
        text-decoration: underline;
        font-size: 18px;
        padding-top: 15px !important;
        padding-bottom: 8px !important;
        border-right: 1px solid white;
        border-left: 1px solid white;
        background-color: #fff;
    }
    .absen td small {
        font-weight: 1;
        font-size: 12px;
        font-style: italic !important;
    }
    .text-center {
        text-align: center;
    }
    tr:nth-child(odd){
        background-color: #e7effd;
        /* color: #fff; */
    }
</style>
<div class="row">
    <div class="column">
        <img class="foto" src="{{ public_path('images/logo_dinas.png') }}">
        <table class="head right">
        <tr>
            <td>
            Pemerintah Kota Denpasar<br>
            Dinas Komunikasi, Informatika dan Statistik
            </td>
        </tr>
        </table>
    </div>
    <!-- <div class="column">
        
    </div> -->
</div>
<hr>
<h6 class="besar">
    Laporan Identifikasi Kebutuhan Barang<br>
    Tanggal {!! \Carbon\Carbon::parse($laporan['tgl_perubahan'])->format('d F Y'); !!}<br>
</h6>
<!-- <p style="text-align:center;font-size:10px;margin:0">(Alat berat, Tani, Komputer, Alat Laboratorium, Alat Bengkel, Alat Angkutan, dll)</p> -->
<hr>
<table class="absen" page-break-inside: auto;>
    <tr class="center">
        <td width="3%">No</td>
        <td width="45%">Pertanyaan</td>
        <td>Jawaban</td>
    </tr>
    <tr class="center">
        <td>1</td>
        <td>2</td>
        <td>3</td>
    </tr>
    <tr>
        <td class="nomor">1.</td>
        <td class="pertanyaan">Perubahan ke</td>
        <td>{{$laporan['data']->perubahan_ke}}</td>
    </tr>
    <tr>
        <td class="nomor">2.</td>
        <td class="pertanyaan">Tanggal Perubahan</td>
        <td>{!! \Carbon\Carbon::parse($laporan['data']->tgl_perubahan)->format('d/m/Y') !!}</td>
    </tr>
    <tr>
        <td class="text-center subjudul" colspan="3">
        </td>
    </tr>
    <tr>
        <td class="nomor">3.</td>
        <td class="pertanyaan">Nama K/L/D</td>
        <td>{{$laporan['data']->nama_kld}}</td>
    </tr>
    <tr>
        <td class="nomor">4.</td>
        <td class="pertanyaan">Satuan Kerja</td>
        <td>{{$laporan['data']->satuan_kerja}}</td>
    </tr>
    <tr>
        <td class="nomor">5.</td>
        <td class="pertanyaan">Pejabat Pembuat Komitmen (Nama jabatan, bukan orang)</td>
        <td>{{$laporan['data']->ppk}}</td>
    </tr>
    <tr>
        <td class="nomor">6.</td>
        <td class="pertanyaan">Program (Sesuai DIPA)</td>
        <td>{{$laporan['data']->program}}</td>
    </tr>
    <tr>
        <td class="nomor">7.</td>
        <td class="pertanyaan">Kegiatan (Sesuai DIPA)</td>
        <td>{{$laporan['data']->kegiatan}}</td>
    </tr>
    <tr>
        <td class="nomor">8.</td>
        <td class="pertanyaan">Output (Sesuai DIPA)</td>
        <td>{{$laporan['data']->output}}</td>
    </tr>
    <tr>
        <td class="text-center subjudul" colspan="3">
            Identifikasi kode Barang Milik Negara (BMN)
        </td>
    </tr>
    <tr>
        <td class="nomor">9.</td>
        <td class="pertanyaan">Kode barang (BMN) dan nama barang pada SIMAK BMN/Persediaan. 
        </br>
        <small>Isikan kode barang yang dibutuhkan ini nantinya akan dimasukkan dicatat dengan kode barang apa baik pada SIMAK BMN maupun aplikasi persediaan</small></td>
        <td>
            <table style="width: 100%">
                <tr>
                    <td width="50%">Kode BMN/Persediaan</td>
                    <td>{{$laporan['data']->kode_bmn}}</td>
                </tr>
                <tr>
                    <td>Nama BMN/Persediaan</td>
                    <td>{{$laporan['data']->nama_bmn}}</td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td class="text-center subjudul" colspan="3">
            Identifikasi Kebutuhan Barang
        </td>
    </tr>

    <tr>
        <td class="nomor">10.</td>
        <td class="pertanyaan">Nama Barang</td>
        <td>{{$laporan['data']->nama_barang}}</td>
    </tr>
    <tr>
        <td class="nomor">11.</td>
        <td class="pertanyaan">Jelaskan kriteria INDIKATOR KINERJA/SPESIFIKASI KINERJA yang dibutuhkan untuk pengadaan barang ini</td>
        <td>{!! nl2br(str_replace(" ", " &nbsp;", $laporan['data']->kreteria)) !!}</td>
    </tr>
    <tr>
        <td class="nomor">12.</td>
        <td class="pertanyaan">Jelaskan fungsi/kegunaan barang tersebut</td>
        <td>{!! nl2br(str_replace(" ", " &nbsp;", $laporan['data']->fungsi_barang)) !!}</td>
    </tr>
    <tr>
        <td class="nomor">13.</td>
        <td class="pertanyaan">Jelaskan ukuran/kapasitas barang tersebut</td>
        <td>{{$laporan['data']->ukuran_barang}}</td>
    </tr>
    <tr>
        <td class="nomor">14.</td>
        <td class="pertanyaan">Jelaskan macam garansi yang dibutuhkan/disyaratkan untuk pengadaan barang ini</td>
        <td>{{$laporan['data']->garansi_barang}}</td>
    </tr>

    <tr>
        <td class="nomor">15.</td>
        <td class="pertanyaan">Jelaskan jumlah barang yang dibutuhkan (dalam satuan unit)</td>
        <td>{{$laporan['data']->jml_barang}}</td>
    </tr>
    <tr>
        <td class="nomor">16.</td>
        <td class="pertanyaan">Jelaskan kapan barang ini direncanakan akan dimanfaatkan</td>
        <td>{{$laporan['data']->kapan_manfaat_brg}}</td>
    </tr>
    <tr>
        <td class="nomor">17.</td>
        <td class="pertanyaan">Jelaskan Pihak yang akan menggunakan/mengelola Barang</td>
        <td>{{$laporan['data']->pihak_pengguna}}</td>
    </tr>
    <tr>
        <td class="nomor">18.</td>
        <td class="pertanyaan">Jelaskan Total perkiraan waktu pengadaan Barang (termasuk waktu pengiriman barang sampai tiba di lokasi). </br>
        <small>Isikan dalam satuan hari/minggu/bulan. Jadi anda isikan perkiraan JANGKA WAKTU PELAKSANAAN KONTRAK</small></td>
        <td>{{$laporan['data']->perkiraan_waktu}}</td>
    </tr>
    <tr>
        <td class="nomor">19.</td>
        <td class="pertanyaan">Apakah barang ini Terdapat di e-Katalog LKPP</td>
        <td>{{$laporan['data']->ada_ekatalog}}</td>
    </tr>
    <tr>
        <td class="nomor">20.</td>
        <td class="pertanyaan">Jelaskan Tingkat prioritas kebutuhan Barang. Bila perlu mohon dijelaskan pada pilihan lainnya</td>
        <td>{{$laporan['data']->tingkat_prioritas_brg}}</td>
    </tr>
    <tr>
        <td class="nomor">21.</td>
        <td class="pertanyaan">Perkiraan biaya. </td>
        <td>Rp{{ number_format($laporan['data']->perkiraan_biaya,2) }}</td>
    </tr>
    <tr>
        <td class="nomor">22.</td>
        <td class="pertanyaan">Atas perkiraan biaya di atas, jelaskan rincian perhitungannya</td>
        <td>{{$laporan['data']->rincian}}</td>
    </tr>

    <tr>
        <td class="text-center subjudul" colspan="3">
            Identifikasi Manajemen Penunjang Tugas dan Fungsi PPK
        </td>
    </tr>
    <tr>
        <td class="nomor">23.</td>
        <td class="pertanyaan">Jumlah pegawai dalam unit kerja. (dalam tim pengelolaan manajemen PPK)</td>
        <td>{{$laporan['data']->jml_pegawai}}</td>
    </tr>
    <tr>
        <td class="nomor">24.</td>
        <td class="pertanyaan">Apakah PPK dibantu oleh Tim atau Tenaga Ahli. Jelaskan pada kotak "Lainnya"</td>
        <td>{{$laporan['data']->ada_team_ahli}}</td>
    </tr>
    <tr>
        <td class="nomor">25.</td>
        <td class="pertanyaan">Tingkat beban tugas dan tanggung jawab pegawai dalam melaksanakan tugas dan fungsi Tim Pengelolaan Manajemen PPK</td>
        <td>{{$laporan['data']->tingkat_beban_tugas}}</td>
    </tr>
    <tr>
        <td class="nomor">26.</td>
        <td class="pertanyaan">Apakah Jumlah barang yang telah tersedia/dimiliki/dikuasai saat ini sudah dapat memenuhi kebutuhan pada unit kerja PPK saat ini</td>
        <td>{{$laporan['data']->ket_jml_barang_tersedia}}</td>
    </tr>
    <tr>
        <td class="nomor">27.</td>
        <td class="pertanyaan">Apabila jumlah barang saat ini belum memenuhi kebutuhan, Jelaskan kebutuhan barang</td>
        <td>{{$laporan['data']->kebutuhan_barang}}</td>
    </tr>

    <tr>
        <td class="text-center subjudul" colspan="3">
            Identifikasi Barang Yang Telah Tersedia/Dimiliki/Dikuasai
        </td>
    </tr>
    <tr>
        <td class="nomor">28.</td>
        <td class="pertanyaan">Jumlah barang (kode barang ini) yang telah tersedia /dimiliki/dikuasasi</td>
        <td>{{$laporan['data']->jml_barang_tersedia}}</td>
    </tr>
    <tr>
        <td class="nomor">29.</td>
        <td class="pertanyaan">Jumlah barang (kode barang ini) yang berstatus LAYAK PAKAI</td>
        <td>{{$laporan['data']->jml_barang_layak}}</td>
    </tr>
    <tr>
        <td class="nomor">30.</td>
        <td class="pertanyaan">Jumlah barang (kode barang ini) yang berstatus RUSAK RINGAN</td>
        <td>{{$laporan['data']->jml_barang_rusak}}</td>
    </tr>
    <tr>
        <td class="nomor">31.</td>
        <td class="pertanyaan">Jumlah barang (kode barang ini) yang berstatus RUSAK BERAT</td>
        <td>{{$laporan['data']->jml_barang_rusak_berat}}</td>
    </tr>
    <tr>
        <td class="nomor">32.</td>
        <td class="pertanyaan">Jelaskan lokasi keberadaan barang terdapat di ruang apa, bagian apa, satker apa</td>
        <td>{{$laporan['data']->lokasi_barang}}</td>
    </tr>
    <tr>
        <td class="nomor">33.</td>
        <td class="pertanyaan">Jelaskan sumber dana pengadaan barang tersebut pada pengadaan tahun-tahun sebelumnya</td>
        <td>{{$laporan['data']->sumber_dana}}</td>
    </tr>

    <tr>
        <td class="text-center subjudul" colspan="3">
            Identifikasi Pasokan / supply barang
        </td>
    </tr>
    <tr>
        <td class="nomor">34.</td>
        <td class="pertanyaan">Kemudahan memperoleh Barang di pasaran Indonesia sesuai dengan jumlah yang dibutuhkan</td>
        <td>{{$laporan['data']->kemudahan_peroleh_barang}}</td>
    </tr>
    <tr>
        <td class="nomor">35.</td>
        <td class="pertanyaan">Terdapat produsen/pelaku usaha yang dinilai mampu dan memenuhi syarat</td>
        <td>{{$laporan['data']->terdapat_produsen}}</td>
    </tr>
    <tr>
        <td class="nomor">36.</td>
        <td class="pertanyaan">Apabila terbatas, jelaskan dan sebutkan nama penyedia yang selama memenuhi kebutuhan barang ini.
            <br>
<small>Setiap penyedia jelaskan identitas singkat penyedia, berapa kali berkontrak, berkontrak pada tahun berapa saja, serta jelaskan singkat kinerja penyedia tersebut</small></td>
        <td>{{$laporan['data']->keterangan_terbatas}}</td>
    </tr>
    <tr>
        <td class="nomor">37.</td>
        <td class="pertanyaan">Kriteria barang</td>
        <td>{{$laporan['data']->kreteria_barang}}</td>
    </tr>
    <tr>
        <td class="nomor">38.</td>
        <td class="pertanyaan">Persyaratan Barang memiliki nilai TKDN tertentu. apabila Ya, Pada kotak "Lainnya" jelaskan berapa % paling sedikit TKDN</td>
        <td>{{$laporan['data']->barang_nilai_tkd}}</td>
    </tr>


    <tr>
        <td class="text-center subjudul" colspan="3">
            Identifikasi Persyaratan Lain Yang Diperlukan
        </td>
    </tr>
    <tr>
        <td class="nomor">39.</td>
        <td class="pertanyaan">Cara pengiriman dan pengangkutan</td>
        <td>{{$laporan['data']->cara_pengiriman}}</td>
    </tr>
    <tr>
        <td class="nomor">40.</td>
        <td class="pertanyaan">Cara pemasangan</td>
        <td>{{$laporan['data']->cara_pemasangan}}</td>
    </tr>
    <tr>
        <td class="nomor">41.</td>
        <td class="pertanyaan">Cara penimbunan/ penyimpanan</td>
        <td>{{$laporan['data']->cara_penyimpanan}}</td>
    </tr>
    <tr>
        <td class="nomor">42.</td>
        <td class="pertanyaan">Cara pengoperasian/penggunaan</td>
        <td>{{$laporan['data']->cara_pengoprasian}}</td>
    </tr>
    <tr>
        <td class="nomor">43.</td>
        <td class="pertanyaan">Kebutuhan pelatihan untuk pengoperasian/pemeliharaan Barang</td>
        <td>{{$laporan['data']->kebutuhan_pelatihan}}</td>
    </tr>
    <tr>
        <td class="nomor">44.</td>
        <td class="pertanyaan">Aspek pengadaan berkelanjutan</td>
        <td>{{$laporan['data']->aspek_pengadaan}}</td>
    </tr>

    <tr>
        <td class="text-center subjudul" colspan="3">
            Identifikasi Konsolidasi Pengadaan Barang
        </td>
    </tr>
    <tr>
        <td class="nomor">45.</td>
        <td class="pertanyaan">Terdapat pengadaan barang sejenis pada kegiatan lain</td>
        <td>{{$laporan['data']->barang_sejenis}}</td>
    </tr>
    <tr>
        <td class="nomor">46.</td>
        <td class="pertanyaan">Indikasi konsolidasi atas pengadaan Barang</td>
        <td>{{$laporan['data']->idikasi_konsolidasi}}</td>
    </tr>
    <tr>
        <td class="nomor">47.</td>
        <td class="pertanyaan">Apabila direkomendasikan, jelaskan lebih lanjut rencana konsolidasi pengadaan barang tersebut</td>
        <td>{{$laporan['data']->rencana_konsolidasi}}</td>
    </tr>

    <tr>
        <td class="text-center subjudul" colspan="3">
        </td>
    </tr>

    <tr>
        <td class="nomor">48.</td>
        <td colspan="2">
            <b>Catatan Penting</b>
            <br>
            {{$laporan['data']->catatan}}
        </td>
    </tr>

    <tr>
        <td class="text-center subjudul" colspan="3">
        </td>
    </tr>
    <tr>
        <td class="nomor">49.</td>
        <td class="pertanyaan">Disusun pertama kali tanggal</td>
        <td>{{$laporan['data']->tgl_disusun_pertama}}</td>
    </tr>
    <tr>
        <td class="nomor"></td>
        <td class="pertanyaan">Disusun oleh</td>
        <td>{{$laporan['data']->disusun_oleh}}</td>
    </tr>
    <tr>
        <td class="nomor"></td>
        <td class="pertanyaan">Disetujui oleh</td>
        <td>{{$laporan['data']->disetujui_oleh}}</td>
    </tr>

    <tr>
        <td class="nomor"></td>
        <td class="pertanyaan">Pengguna Anggaran/Kuasa Pengguna Anggaran</td>
        <td><b>Pejabat Pembuat Komitmen</b><br>
            {{$laporan['data']->pejabat_pembuat_komitmen}}
        </td>
    </tr>
    <tr>
        <td class="nomor"></td>
        <td class="pertanyaan"></td>
        <td>Mengetahui,<br>
            {{$laporan['data']->mengetahui_tenaga_ahli}}
        </td>
    </tr>
    <tr>
        <td class="nomor"></td>
        <td>Tenaga Ahli</br></br></td>
        <td>Tenaga Ahli</br></br></td>
    </tr>

</table>