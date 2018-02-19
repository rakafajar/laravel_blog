@extends('dashboard')
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Artikel</li>
    </ol>
    <!-- Example DataTables Card-->
    <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> 
      Data Artikel
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Judul Artikel</th>
              <th>Tulis Artikel</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Judul Artikel</th>
              <th>Tulis Artikel</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($articles as $article)
            <tr>
              <td>{{ $article->id }}</td>
              <td>{{ $article->title }}</td>
              <td>{{ $article->body }}</td>
              <td class="text-center">
                  <a class="btn btn-info btn-xs" href="{!! url('articles/show') !!}"><i class="fa fa-search"></i> Detail</a>
                  <a class="btn btn-success btn-xs" href="{!! route('articles.edit', [$article->id]) !!}"><i class="fa fa-pencil"></i> Edit</a>
                  <a class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
</div> 
@stop