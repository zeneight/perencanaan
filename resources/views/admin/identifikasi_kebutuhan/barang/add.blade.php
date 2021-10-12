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

<p><a title='Return' href="{{ crudbooster::adminPath('tb_ik_barang13') }}"><i class='fa fa-chevron-circle-left '></i>
        &nbsp; Kembali</a></p>

<div class="panel panel-default">
    <div class="panel-heading">
        <strong><i class="fa fa-road"></i> Formulir Pertanyaan Identifikasi Kebutuhan Barang</strong>
    </div>

    <form class="form-horizontal" method="post" id="form" enctype="multipart/form-data"
        action="{{ crudbooster::mainpath('add-save') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="panel-body">

            <div class="form_wrapper">
                <fieldset class="msf_hide">
                    <h2>Formulir Pertama</h2>
                    {{ form_input("Perubahan ke", "perubahan_ke", "text", 10, "", "required") }}
                    {{ form_input("Tanggal perubahan", "tgl_perubahan", "date", 10, "", "required") }}
                    {{ form_input("Telp", "telp", "text", 10, "", "") }}
                    {{ form_input("Pemilik", "pemilik", "text", 10, "", "required") }}
                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input class='btn btn-default' type="button" name="back" value="Kembali" onclick="msf_btn_back()">
                            <input class='btn btn-warning' type="button" name="next" value="Lanjut" onclick="msf_btn_next()">
                        </div>
                    </div>
                    <div class="msf_bullet_o"></div>
                    <div class="msf_line"></div>
                </fieldset>

                <fieldset class="msf_hide">
                    <h2>This is form 2</h2>
                    {{ form_start_combobox("Kategori", "kategori", 6, "", "required", "select", false) }}
                    <option>Distributor</option>
                    <option>Penyosoh</option>
                    <option>Pasar</option>
                    {{ form_end_combobox() }}

                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input class='btn btn-default' type="button" name="back" value="Kembali" onclick="msf_btn_back()">
                            <input class='btn btn-warning' type="button" name="next" value="Lanjut" onclick="msf_btn_next()">
                        </div>
                    </div>
                    <div class="msf_bullet_o"></div>
                    <div class="msf_line"></div>
                </fieldset>

                <fieldset class="msf_hide">
                    <h2>The last form</h2>
                    {{ form_input("Telp", "telp", "text", 10, "", "") }}
                    {{ form_input("Telp", "telp", "text", 10, "", "") }}

                    <div class="form-group">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <input class='btn btn-default' type="button" name="back" value="Kembali" onclick="msf_btn_back()">
                            <input class='btn btn-warning' type="button" name="next" value="Lanjut" onclick="msf_btn_next()">
                            <input type="submit" name="submit" class="btn btn-primary" value="Save Data" onclick="">
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
