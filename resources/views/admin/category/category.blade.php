@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Text Editors</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Text Editors</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">

		<!-- general form elements -->
		<div class="card card-primary">
      @include('errors.error')
		  <!-- form start -->
		  <form role="form" action="{{route('category.store')}}" method="POST">
		    <div class="card-body">
	    	{{csrf_field()}}
	    		<div class="form-group">
	    		  <label for="name">Category Title</label>
	    		  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Category">
	    		</div>

	    		<div class="form-group">
	    		  <label for="slug">Category Slug</label>
	    		  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug">
	    		</div>
	    	
	    	

		    <div class="card-footer">
		      <button type="submit" class="btn btn-primary">Submit</button>
		    </div>
		  </form>
		</div>
		<!-- /.card -->
      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@stop