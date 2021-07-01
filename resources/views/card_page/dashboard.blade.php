@extends('card_page.master')
@section('content')

<style type="text/css">
	.container-fluid
	{
		margin-top: 100px;
		width: 1400px;
	}
	.text{
		text-align: center;
	}
</style>
@if(session('message'))

<p class="alert alert-success text-center">
  {{session('message')}}
</p>

@endif


<div class="container-fluid">
	<h1 class="text">All Registered Users</h1>
	<div class="row">

<table class="table table-bordered table-dark">
	
  <thead>

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Description</th>
      <th scope="col">Contact</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($data as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->email}}</td>
      <td>{{$data->description}}</td>
  
      <td>{{$data->contact}}</td>
      <td>{{$data->address}}</td>
      <td>
            <a class="btn btn-info"  href="{{url('cardshow/' .$data->id)}}">show </a>
            <a class="btn btn-primary" href="{{url('cardedit/'.$data->id)}}">Edit </a>
            <a class="btn btn-warning" href="{{url('carddel/' .$data->id)}}">Delete </a>

        </td>
    </tr>
  </tbody>
  @endforeach
</table>
</div>
</div>
@endsection