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
    <!-- <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Position</th>
              <th>Office</th>
              <th>Age</th>
              <th>Start date</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <td>Hermione Butler</td>
              <td>Regional Director</td>
              <td>London</td>
              <td>47</td>
              <td>2011/03/21</td>
              <td class="text-center">
                  <a class="btn btn-info btn-xs" href="#"><i class="fa fa-search"></i> Detail</a>
                  <a class="btn btn-success btn-xs" href="#"><i class="fa fa-pencil"></i> Ubah</a>
                  <a class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
            <tr>
              <td>Raka Butler</td>
              <td>aa Director</td>
              <td>London</td>
              <td>47</td>
              <td>2011/03/21</td>
              <td class="text-center">
                  <a class="btn btn-info btn-xs" href="#"><i class="fa fa-search"></i> Detail</a>
                  <a class="btn btn-success btn-xs" href="#"><i class="fa fa-pencil"></i> Ubah</a>
                  <a class="btn btn-danger btn-xs" href="#"><i class="fa fa-trash"></i> Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> -->
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
</div>
</div> 
@stop