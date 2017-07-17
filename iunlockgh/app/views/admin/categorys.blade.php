@extends('layout.admin')


@section('header')

<i class="glyphicon glyphicon-folder-open yellow"></i> Add Products

@stop



@section('content')

@include('common.notification')
<h3>Create Category</h3>
{{Form::open(array('url'=>'category', 'method'=>'POST'))}}
<input type="text" class="form-control" placeholder="create category" name="name"><br>
<button class="btn btn-success"> create category</button>
{{Form::close()}}
<br>

<h3>Add Products</h3>
{{Form::open(array('url'=>'product', 'method'=>'POST'))}}
<select class="form-control" name="category_id">
@foreach($categorys as $category)
<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach
</select>
<input type="text" class="form-control" placeholder="Enter product name" name="product_name">
<textarea col="10" rows="4" class="form-control" placeholder="Enter Product description" name="description"></textarea>
<br>
<!-- <input type="text" class="form-control" placeholder="create category" name="name"><input type="text" class="form-control" placeholder="create category" name="name"> -->
<button class="btn btn-success"> Create Product</button>
{{Form::close()}}
<br>

<h3>Add Networks</h3>
{{Form::open(array('url'=>'network', 'method'=>'POST'))}}
<select class="form-control" name="category_id">
@foreach($categorys as $category)
<option value="{{$category->id}}">{{$category->name}}</option>
@endforeach
</select>
<input type="text" class="form-control" placeholder="Enter network name" name="network_name">
<input type="text" class="form-control" placeholder="Enter product price" name="price">
<input type="text" class="form-control" placeholder="Enter delivery time" name="delivery_time">
<!-- <textarea col="10" rows="5" class="form-control" placeholder="Enter Product description" name="description"></textarea> -->
<br>
<!-- <input type="text" class="form-control" placeholder="create category" name="name"><input type="text" class="form-control" placeholder="create category" name="name"> -->
<button class="btn btn-success"> Create Product</button>
{{Form::close()}}
@stop


