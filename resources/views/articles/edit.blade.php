@extends('dashboard')
@section('content')
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active"> Edit Artikel</li>
    </ol>
      <div class="row">
          <div class="col-md-12 raw-margin-bottom-24">
                {!! Form::model($article, ['route' => ['articles.update', $article->id], 'method' => 'patch', 'files' =>true]) !!}
                  {!! csrf_field() !!}
                  {!! method_field('PATCH') !!}

                        <div class="form-group">
                          <label class="control-label"><h5>Judul Artikel</h5></label>
                          <input type="text" class="form-control" name="title" value="{{ $article->title}}" id="title">
                        </div>

                        <div class="form-group">
                          <label class="control-label"><h5>Tulis Artikel</h5></label>
                          <textarea type="text" class="form-control" name="body" value="" id="body">
                            {{ $article->body }}
                          </textarea>
                        </div>


                        <div class="raw-margin-top-24">
                          <a class="btn btn-default pull-left" href="{!! route('articles.index') !!}">Cancel</a>
                          <button class="btn btn-primary pull-right" type="submit">Create</button>
                        </div>
          </div>
              {!! Form::close() !!}
      </div>    
</div>
</div> 
@stop