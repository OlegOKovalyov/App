@extends('admin.layouts.app_admin')
@section('content')

<!-- <h1>Admin Dashboard</h1> -->

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="list-group-item active">Categories 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="list-group-item active">Materials 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="list-group-item active">Visitors 0</span></p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p><span class="list-group-item active">Visitors Today 0</span></p>
			</div>
		</div>						
	</div>

	<div class="row">
		<div class="col-sm-6">
			<a class="btn btn-block btn-secondary" href="#">Create Category</a>
			<a class="list-group-item" href="#">
				<h4 class="list-group-item-heading">The First Category</h4>
				<p class="list-group-item-text">
					Quantity of Materials
				</p>
			</a>
		</div>
		<div class="col-sm-6">
			<a class="btn btn-block btn-secondary" href="#">Create Material</a>
			<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">The First Material</h4>
				<p class="list-group-item-text">
					Category
				</p>
			</a>
		</div>		
	</div>
</div>

@endsection