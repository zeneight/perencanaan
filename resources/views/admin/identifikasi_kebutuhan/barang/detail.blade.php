<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
<style>
    .center, .nomor {
        text-align: center;
        font-weight: bold;
    }
    table.view-detail tr td {
        padding: 2px;
        border: 1pt solid gray;
    }
    .pertanyaan {
        font-weight: bold;
    }
    .subjudul {
        /* font-weight: bold; */
        text-decoration: underline;
        font-size: 18px;
        padding-top: 20px !important;
    }
    small {
        font-weight: 1;
        font-size: 12px;
        text-decoration: italic;
    }
</style>
<p><a title='Return' href="{{ crudbooster::adminPath('tb_ik_barang13') }}"><i class='fa fa-chevron-circle-left '></i>
        &nbsp; Kembali</a></p>

<!-- Your html goes here -->
<div class='panel panel-default'>
    <!-- <div class='panel-heading'>Informasi Detail Data</div> -->
    <div class='panel-body'>      
        <div class='form-group table-responsive'>
            <table class="view-detail table table-hover table-striped table-bordered">
                <tr class="center">
                    <td width="2%">No.</td>
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
                    <td><p>{{$row->perubahan_ke}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">2.</td>
                    <td class="pertanyaan">Tanggal Perubahan</td>
                    <td><p>{{$row->tgl_perubahan}}</p></td>
                </tr>
                <tr>
                    <td class="text-center subjudul" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td class="nomor">3.</td>
                    <td class="pertanyaan">Nama K/L/D</td>
                    <td><p>{{$row->nama_kld}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">4.</td>
                    <td class="pertanyaan">Satuan Kerja</td>
                    <td><p>{{$row->satuan_kerja}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">5.</td>
                    <td class="pertanyaan">Pejabat Pembuat Komitmen (Nama jabatan, bukan orang)</td>
                    <td><p>{{$row->ppk}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">6.</td>
                    <td class="pertanyaan">Program (Sesuai DIPA)</td>
                    <td><p>{{$row->program}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">7.</td>
                    <td class="pertanyaan">Kegiatan (Sesuai DIPA)</td>
                    <td><p>{{$row->kegiatan}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">8.</td>
                    <td class="pertanyaan">Output (Sesuai DIPA)</td>
                    <td><p>{{$row->output}}</p></td>
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
                        <table class="table table-bordered">
                            <tr>
                                <td>Kode BMN/Persediaan</td>
                                <td>{{$row->kode_bmn}}</td>
                            </tr>
                            <tr>
                                <td>Nama BMN/Persediaan</td>
                                <td>{{$row->nama_bmn}}</td>
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
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">11.</td>
                    <td class="pertanyaan">Jelaskan kriteria INDIKATOR KINERJA/SPESIFIKASI KINERJA yang dibutuhkan untuk pengadaan barang ini</td>
                    <td><p>{{$row->kreteria}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">12.</td>
                    <td class="pertanyaan">Jelaskan fungsi/kegunaan barang tersebut</td>
                    <td><p>{{$row->fungsi_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">13.</td>
                    <td class="pertanyaan">Jelaskan ukuran/kapasitas barang tersebut</td>
                    <td><p>{{$row->ukuran_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">14.</td>
                    <td class="pertanyaan">Jelaskan macam garansi yang dibutuhkan/disyaratkan untuk pengadaan barang ini</td>
                    <td><p>{{$row->garansi_barang}}</p></td>
                </tr>

                <tr>
                    <td class="nomor">15.</td>
                    <td class="pertanyaan">Jelaskan jumlah barang yang dibutuhkan (dalam satuan unit)</td>
                    <td><p>{{$row->jml_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">16.</td>
                    <td class="pertanyaan">Jelaskan kapan barang ini direncanakan akan dimanfaatkan</td>
                    <td><p>{{$row->kapan_manfaat_brg}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">17.</td>
                    <td class="pertanyaan">Jelaskan Pihak yang akan menggunakan/mengelola Barang</td>
                    <td><p>{{$row->ihak_pengguna}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">18.</td>
                    <td class="pertanyaan">Jelaskan Total perkiraan waktu pengadaan Barang (termasuk waktu pengiriman barang sampai tiba di lokasi). </br>
                    <small>Isikan dalam satuan hari/minggu/bulan. Jadi anda isikan perkiraan JANGKA WAKTU PELAKSANAAN KONTRAK</small></td>
                    <td><p>{{$row->perkiraan_waktu}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">19.</td>
                    <td class="pertanyaan">Apakah barang ini Terdapat di e-Katalog LKPP</td>
                    <td><p>{{$row->ada_ekatalog}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">20.</td>
                    <td class="pertanyaan">Jelaskan Tingkat prioritas kebutuhan Barang. Bila perlu mohon dijelaskan pada pilihan lainnya</td>
                    <td><p>{{$row->tingkat_prioritas_brg}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">21.</td>
                    <td class="pertanyaan">Perkiraan biaya. </td>
                    <td><p>{{$row->perkiraan_biaya}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">22.</td>
                    <td class="pertanyaan">Atas perkiraan biaya di atas, jelaskan rincian perhitungannya</td>
                    <td><p>{{$row->rincian}}</p></td>
                </tr>

                <tr>
                    <td class="text-center subjudul" colspan="3">
                        Identifikasi Manajemen Penunjang Tugas dan Fungsi PPK
                    </td>
                </tr>
                <tr>
                    <td class="nomor">23.</td>
                    <td class="pertanyaan">Jumlah pegawai dalam unit kerja. (dalam tim pengelolaan manajemen PPK)</td>
                    <td><p>{{$row->jml_pegawai}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">24.</td>
                    <td class="pertanyaan">Apakah PPK dibantu oleh Tim atau Tenaga Ahli. Jelaskan pada kotak "Lainnya"</td>
                    <td><p>{{$row->ada_team_ahli}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">25.</td>
                    <td class="pertanyaan">Tingkat beban tugas dan tanggung jawab pegawai dalam melaksanakan tugas dan fungsi Tim Pengelolaan Manajemen PPK</td>
                    <td><p>{{$row->tingkat_beban_tugas}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">26.</td>
                    <td class="pertanyaan">Apakah Jumlah barang yang telah tersedia/dimiliki/dikuasai saat ini sudah dapat memenuhi kebutuhan pada unit kerja PPK saat ini</td>
                    <td><p>{{$row->ket_jml_barang_tersedia}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">27.</td>
                    <td class="pertanyaan">Apabila jumlah barang saat ini belum memenuhi kebutuhan, Jelaskan kebutuhan barang</td>
                    <td><p>{{$row->kebutuhan_barang}}</p></td>
                </tr>

                <tr>
                    <td class="text-center subjudul" colspan="3">
                        Identifikasi Barang Yang Telah Tersedia/Dimiliki/Dikuasai
                    </td>
                </tr>
                <tr>
                    <td class="nomor">28.</td>
                    <td class="pertanyaan">Jumlah barang (kode barang ini) yang telah tersedia /dimiliki/dikuasasi</td>
                    <td><p>{{$row->jml_barang_tersedia}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">29.</td>
                    <td class="pertanyaan">Jumlah barang (kode barang ini) yang berstatus LAYAK PAKAI</td>
                    <td><p>{{$row->jml_barang_layak}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">30.</td>
                    <td class="pertanyaan">Jumlah barang (kode barang ini) yang berstatus RUSAK RINGAN</td>
                    <td><p>{{$row->jml_barang_rusak}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">31.</td>
                    <td class="pertanyaan">Jumlah barang (kode barang ini) yang berstatus RUSAK BERAT</td>
                    <td><p>{{$row->jml_barang_rusak_berat}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">32.</td>
                    <td class="pertanyaan">Jelaskan lokasi keberadaan barang terdapat di ruang apa, bagian apa, satker apa</td>
                    <td><p>{{$row->lokasi_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">33.</td>
                    <td class="pertanyaan">Jelaskan sumber dana pengadaan barang tersebut pada pengadaan tahun-tahun sebelumnya</td>
                    <td><p>{{$row->sumber_dana}}</p></td>
                </tr>

                <tr>
                    <td class="text-center subjudul" colspan="3">
                        Identifikasi Pasokan / supply barang
                    </td>
                </tr>
                <tr>
                    <td class="nomor">34.</td>
                    <td class="pertanyaan">Kemudahan memperoleh Barang di pasaran Indonesia sesuai dengan jumlah yang dibutuhkan</td>
                    <td><p>{{$row->kemudahan_peroleh_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">35.</td>
                    <td class="pertanyaan">Terdapat produsen/pelaku usaha yang dinilai mampu dan memenuhi syarat</td>
                    <td><p>{{$row->terdapat_produsen}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">36.</td>
                    <td class="pertanyaan">Apabila terbatas, jelaskan dan sebutkan nama penyedia yang selama memenuhi kebutuhan barang ini.
                        <br>
<small>Setiap penyedia jelaskan identitas singkat penyedia, berapa kali berkontrak, berkontrak pada tahun berapa saja, serta jelaskan singkat kinerja penyedia tersebut</small></td>
                    <td><p>{{$row->keterangan_terbatas}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">37.</td>
                    <td class="pertanyaan">Kriteria barang</td>
                    <td><p>{{$row->kreteria_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">38.</td>
                    <td class="pertanyaan">Persyaratan Barang memiliki nilai TKDN tertentu. apabila Ya, Pada kotak "Lainnya" jelaskan berapa % paling sedikit TKDN</td>
                    <td><p>{{$row->barang_nilai_tkd}}</p></td>
                </tr>


                <tr>
                    <td class="text-center subjudul" colspan="3">
                        Identifikasi Persyaratan Lain Yang Diperlukan
                    </td>
                </tr>
                <tr>
                    <td class="nomor">39.</td>
                    <td class="pertanyaan">Cara pengiriman dan pengangkutan</td>
                    <td><p>{{$row->cara_pengiriman}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">40.</td>
                    <td class="pertanyaan">Cara pemasangan</td>
                    <td><p>{{$row->cara_pemasangan}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">41.</td>
                    <td class="pertanyaan">Cara penimbunan/ penyimpanan</td>
                    <td><p>{{$row->cara_penyimpanan}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">42.</td>
                    <td class="pertanyaan">Cara pengoperasian/penggunaan</td>
                    <td><p>{{$row->cara_pengoprasian}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">43.</td>
                    <td class="pertanyaan">Kebutuhan pelatihan untuk pengoperasian/pemeliharaan Barang</td>
                    <td><p>{{$row->kebutuhan_pelatihan}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">44.</td>
                    <td class="pertanyaan">Aspek pengadaan berkelanjutan</td>
                    <td><p>{{$row->aspek_pengadaan}}</p></td>
                </tr>

                <tr>
                    <td class="text-center subjudul" colspan="3">
                        Identifikasi Konsolidasi Pengadaan Barang
                    </td>
                </tr>
                <tr>
                    <td class="nomor">45.</td>
                    <td class="pertanyaan">Terdapat pengadaan barang sejenis pada kegiatan lain</td>
                    <td><p>{{$row->barang_sejenis}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">46.</td>
                    <td class="pertanyaan">Indikasi konsolidasi atas pengadaan Barang</td>
                    <td><p>{{$row->idikasi_konsolidasi}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">47.</td>
                    <td class="pertanyaan">Apabila direkomendasikan, jelaskan lebih lanjut rencana konsolidasi pengadaan barang tersebut</td>
                    <td><p>{{$row->rencana_konsolidasi}}</p></td>
                </tr>

                <tr>
                    <td class="text-center subjudul" colspan="3">
                    </td>
                </tr>

                <tr>
                    <td class="nomor">48.</td>
                    <td class="pertanyaan">Catatan Penting</td>
                    <td><p>{{$row->catatan}}</p></td>
                </tr>

                <tr>
                    <td class="text-center subjudul" colspan="3">
                    </td>
                </tr>
                <tr>
                    <td class="nomor"></td>
                    <td class="pertanyaan">Disusun pertama kali tanggal</td>
                    <td><p>{{$row->tgl_disusun_pertama}}</p></td>
                </tr>
                <tr>
                    <td class="nomor"></td>
                    <td class="pertanyaan">Disusun oleh</td>
                    <td><p>{{$row->disusun_oleh}}</p></td>
                </tr>
                <tr>
                    <td class="nomor"></td>
                    <td class="pertanyaan">Disetujui oleh</td>
                    <td><p>{{$row->disetujui_oleh}}</p></td>
                </tr>

                <tr>
                    <td class="nomor"></td>
                    <td class="pertanyaan">Pengguna Anggaran/Kuasa Pengguna Anggaran</td>
                    <td><b>Pejabat Pembuat Komitmen</b><br>
                        {{$row->pejabat_pembuat_komitmen}}
                    </td>
                </tr>
                <tr>
                    <td class="nomor"></td>
                    <td class="pertanyaan"></td>
                    <td>Mengetahui,<br>
                        {{$row->mengetahui_tenaga_ahli}}
                    </td>
                </tr>
                <tr>
                    <td class="nomor"></td>
                    <td>Tenaga Ahli</br></br></td>
                    <td>Tenaga Ahli</br></br></td>
                </tr>

            </table>
        </div>
            
        <!-- etc .... -->
        
        </form>
    </div>
</div>
@endsection