@extends('crudbooster::admin_template')
@section('content')
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

<p><a title='Return' href="{{ crudbooster::adminPath('pedagangs') }}"><i class='fa fa-chevron-circle-left '></i>
        &nbsp; Kembali</a></p>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><i class="fa fa-road"></i> Tambah Identifikasi Barang</strong>
    </div>

    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data"
        action="{{ crudbooster::mainpath('add-save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="panel-body">
            <h1>Formulir Pertanyaan Identifikasi Kebutuhan Barang</h1>
            {{ form_input("Perubahan ke", "perubahan_ke", "text", 10, "", "required") }}
            {{ form_input("Tanggal perubahan", "tgl_perubahan", "date", 10, "", "required") }}
            {{ form_input("Telp", "telp", "text", 10, "", "") }}
            {{ form_input("Pemilik", "pemilik", "text", 10, "", "required") }}
            
            {{ form_start_combobox("Kategori", "kategori", 6, "", "required", "select", false) }}
                <option>Distributor</option>
                <option>Penyosoh</option>
                <option>Pasar</option>
            {{ form_end_combobox() }}

            <!-- <div class="form-group">
                <div class="col-md-offset-2 col-md-6">
                    <div class="callout callout-primary">
                        <h4><i class="fa fa-exclamation-circle"></i> Catatan</h4>
                        <p>Anda dapat memilih lebih dari satu jenis pangan.</p>
                    </div>
                    <br>
                </div>
            </div> -->

        </div>
        <div class="panel-footer">
            <input type="submit" name="submit" value="{{trans('crudbooster.button_save_more')}}"
                class='btn btn-success'>
            <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
        </div>
    </form>
</div>
@endsection