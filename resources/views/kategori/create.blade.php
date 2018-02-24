@extends('dashboard')
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active"> Tambah Kategori</li>
    </ol>
    <!-- Example DataTables Card-->
      <div class="row">
          <div class="col-md-12 raw-margin-bottom-24">
              {!! Form::open(['route' => 'kategori.store', 'files' => true]) !!}
                      {!! csrf_field() !!}

                        <div class="form-group">
                          <label class="control-label"><h5>Kategori Baru</h5></label>
                          <input type="text" class="form-control" name="nama" value="" id="nama">
                        </div>

                        <div class="raw-margin-top-24">
                          <a class="btn btn-default pull-left" href="{!! route('kategori.index') !!}">Cancel</a>
                          <button class="btn btn-primary pull-right" type="submit">Create</button>
                        </div>
          </div>
              {!! Form::close() !!}
      </div>   
</div>
</div> 
@stop