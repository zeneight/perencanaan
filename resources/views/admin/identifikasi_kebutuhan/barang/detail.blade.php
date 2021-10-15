<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')
<p><a title='Return' href="{{ crudbooster::adminPath('tb_ik_barang13') }}"><i class='fa fa-chevron-circle-left '></i>
        &nbsp; Kembali</a></p>

<!-- Your html goes here -->
<div class='panel panel-default'>
    <!-- <div class='panel-heading'>Informasi Detail Data</div> -->
    <div class='panel-body'>      
        <div class='form-group'>
            <label>Perubahan ke</label>
            <p>{{$row->perubahan_ke}}</p>
        </div>
            
        <!-- etc .... -->
        
        </form>
    </div>
</div>
@endsection