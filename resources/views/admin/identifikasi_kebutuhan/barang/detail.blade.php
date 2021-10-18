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
                    <td class="text-center" colspan="3">
                         _
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
                    
                </br></br>
                    <small>Isikan kode barang yang dibutuhkan ini nantinya akan dimasukkan dicatat dengan kode barang apa baik pada SIMAK BMN maupun aplikasi persediaan</small></td>
                    <td>
                        <table class="table table-bordered">
                            <tr>
                                <td>Kode BMN/Persediaan</td>
                                <td>{{$row->output}}</td>
                            </tr>
                            <tr>
                                <td>Nama BMN/Persediaan</td>
                                <td>{{$row->output}}</td>
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
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">12.</td>
                    <td class="pertanyaan">Jelaskan fungsi/kegunaan barang tersebut</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">13.</td>
                    <td class="pertanyaan">Jelaskan ukuran/kapasitas barang tersebut</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">14.</td>
                    <td class="pertanyaan">Jelaskan macam garansi yang dibutuhkan/disyaratkan untuk pengadaan barang ini</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>

                <tr>
                    <td class="nomor">15.</td>
                    <td class="pertanyaan">Jelaskan jumlah barang yang dibutuhkan (dalam satuan unit)</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">16.</td>
                    <td class="pertanyaan">Jelaskan kapan barang ini direncanakan akan dimanfaatkan</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">17.</td>
                    <td class="pertanyaan">Jelaskan Pihak yang akan menggunakan/mengelola Barang</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">18.</td>
                    <td class="pertanyaan">Jelaskan Total perkiraan waktu pengadaan Barang (termasuk waktu pengiriman barang sampai tiba di lokasi). </br>
                    <small>Isikan dalam satuan hari/minggu/bulan. Jadi anda isikan perkiraan JANGKA WAKTU PELAKSANAAN KONTRAK</small></td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">19.</td>
                    <td class="pertanyaan">Apakah barang ini Terdapat di e-Katalog LKPP</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">20.</td>
                    <td class="pertanyaan">Jelaskan Tingkat prioritas kebutuhan Barang. Bila perlu mohon dijelaskan pada pilihan lainnya</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">21.</td>
                    <td class="pertanyaan">Perkiraan biaya. </td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>
                <tr>
                    <td class="nomor">22.</td>
                    <td class="pertanyaan">Atas perkiraan biaya di atas, jelaskan rincian perhitungannya</td>
                    <td><p>{{$row->nama_barang}}</p></td>
                </tr>


            </table>
        </div>
            
        <!-- etc .... -->
        
        </form>
    </div>
</div>
@endsection