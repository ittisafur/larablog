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
		  <!-- form start -->
		  <form role="form">
		    <div class="card-body">
		    	
	    		<div class="form-group">
	    		  <label for="title">Title</label>
	    		  <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
	    		</div>

	    		<div class="form-group">
	    		  <label for="subtitle">Sub Title</label>
	    		  <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Enter Subtitle">
	    		</div>
	    		<div class="form-group">
	    		  <label for="slug">Post Slug</label>
	    		  <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug">
	    		</div>
	    	
	    	
	    		<div class="form-group">
	    		  <label for="image">File input</label>
	    		  <div class="input-group">
	    		    <div class="custom-file">
	    		      <input name="image" type="file" class="custom-file-input" id="image">
	    		      <label class="custom-file-label" for="image">Choose file</label>
	    		    </div>
	    		    <div class="input-group-append">
	    		      <span class="input-group-text" id="">Upload</span>
	    		    </div>
	    		  </div>
	    		</div>


	    		<div class="form-check">
	    		  <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    		  <label name="status" class="form-check-label" for="exampleCheck1">Publish</label>
	    		</div>
		    	     
	
		      
		      
		    </div>
		    <!-- /.card-body -->

		    <div class="card-header">
		      <h3 class="card-title">
		        WYSIWYG
		      </h3>
		      <!-- tools box -->
		      <div class="card-tools">
		        <button type="button" class="btn btn-tool btn-sm" data-widget="collapse" data-toggle="tooltip"
		                title="Collapse">
		          <i class="fa fa-minus"></i></button>
		      </div>
		      <!-- /. tools -->
		    </div>
		    <!-- /.card-header -->
		    <div class="card-body pad">
		      <div class="mb-3">
		        <textarea name="body" class="textarea" placeholder="Place some text here"
		                  style="width: 100%; height: 350px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
		      </div>
		      <p class="text-sm mb-0">
		        Editor <a href="https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg">Documentation and license
		        information.</a>
		      </p>
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