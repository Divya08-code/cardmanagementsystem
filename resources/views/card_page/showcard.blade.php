@extends('card_page.master')
@section('title','cardmanagementsystem')
@section('content')
<style type="text/css">
	.box
	{

		border:4   px;
		box-shadow: 0 5px 20px;	
		width: 700px;

	}
	.card
	{
		width: 700px; 
		background: #c5c5b8; 
		margin-top: 12px;

	}
	.user
	{
		text-align: center; 
		color: #615e57;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
		<div class="card box card">
			<div class="card-body">
			
			<h3 class="user"> User Details</h3>
			<br><br>
			<label>NAME:&nbsp;&nbsp;&nbsp;{{$data->name}}</label><br><br>
			EMAIL ID:&nbsp;&nbsp;&nbsp;{{$data->email}}<br><br>
			DESCRIPTION:&nbsp;&nbsp;&nbsp;{{$data->description}}<br><br>
			CONTACT:&nbsp;&nbsp;&nbsp;{{$data->contact}}<br><br>
			ADDRESS:&nbsp;&nbsp;&nbsp;{{$data->address}}<br><br>
		</div>
	</div>
</div>
@endsection