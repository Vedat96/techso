@extends('layouts.app')

@section('title', 'Techsolution')

@section('content')


<h1>Klanten</h1>

<!-- <div class= "col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
	<div class= "panel panel-primary">
		
		<div class= "panel-heading" style= "list-style-type:none;">	
			@if(Auth::check())
				@if(Auth::user()->role_id == 1)
				<ul class="list-group" style= "list-style-type:none;">
					<div class="panel-body">
				@endif
			@endif
		

			@foreach($users as $user)
				<li class="list-group-item"><a href="/customers/{{$user->id}}" >{{ $user->name}}</a></li>
			@endforeach
			
			</ul>
		</div>
	</div>
</div> -->

<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
		<div class="row">
			<div class="col-md-14">
				<div class="card">							 
					<div class="card-header">
						<form action="/search" method="POST" role="search" style="float: left;width:50%;">
			            {{ csrf_field() }}
			            <div class="input-group">
			                <input type="text" class="form-control" name="q"
			                    placeholder="Zoek klant"> <span class="input-group-btn">
			                    <button type="submit" class="btn btn-default">
			                        <span class="glyphicon glyphicon-search"></span>
			                    </button>
			                </span>
			            </div>
			        </form>
			            
			            {{-- <form class="form-inline my-2 my-md-0">
			                <input class="form-control" type="text" placeholder="Search">
			            </form> --}}

						<a href="/customers/create" class="btn btn-success" style="float: right;">Voeg klant toe</a></div>
					<div class="card-body">
						@if(Session::has('customer_created'))
							<div class="alert alert-success" role="alert">
								{{Session::get('customer_created')}}
							</div>
						@endif
						@if(Session::has('customer_deleted'))
							<div class="alert alert-success" role="alert">
								{{Session::get('customer_deleted')}}
							</div>
						@endif
					<div class="table-responsive-sm">
						<table class="table">
							<thead>
								<tr>
									<th>Voornaam</th>
									<th>Tussenvoegsel</th>
									<th>Achternaam</th>
									<th>Email</th>
									<th>Telefoon</th>
									<th>Plaats</th>
									<th>Postcode</th>
									<th>Adres</th>
									<th></th>
									<th></th>

								</tr>
							</thead>
							<tbody>
									
									
								@foreach ($customers as $customer)
								<tr>
									<td>{{$customer->voornaam}}</td>
									<td>{{$customer->tussenvoegsel}}</td>
									<td>{{$customer->achternaam}}</td>
									<td>{{$customer->email}}</td>
									<td>{{$customer->telefoon}}</td>
									<td>{{$customer->plaats}}</td>
									<td>{{$customer->postcode}}</td>
									<td>{{$customer->adres}}</td>
									<!-- <td><a href="/customers/{{$customer->id}}" class="btn btn-info">Details</a></td> -->

									
									<td><a href="{{ route('customers.edit',[$customer->id]) }}" class="btn btn-success">Wijzig</a></td>
									<!-- <td><a href="/customers/{{$customer->id}}/destroy" class="btn btn-danger">Delete</a> -->
									<!-- <td><a href="{{ route('customers.destroy',[$customer->id]) }}" class="btn btn-danger">Verwijder</a></td> -->
<!-- 									<td>
										<a class="btn btn-danger" href="#" onclick="
	                                  var result = confirm('Weet je zeker dat je deze persoon wilt verwijderen?');
	                                      if( result ){
	                                              event.preventDefault();
	                                              document.getElementById('delete-form').submit();
	                                      }
	                                          "
	                                          >
			                                <i class="fas fa-trash-alt"></i> Verwijder
			                            </a>

			                            <form id="delete-form" action="{{ route('customers.destroy',[$customer->id]) }}" 
			                                method="POST" style="display: none;">
			                                        <input type="hidden" name="_method" value="delete">
			                                        {{ csrf_field() }}
			                            </form>
									</td> -->
									<!-- <td><form action="{{route('customers.destroy', ['$customer->id'])}}" class="btn btn-danger">Verwijder</form></td> -->

									<td>
										<form method="POST" action="{{ route('customers.destroy',$customer->id) }}">
										{{ csrf_field() }}
										{{ method_field('DELETE')}}	
											<input type="submit" class="btn btn-danger" onclick="
	                                  var result = confirm('Weet je zeker dat je deze persoon wilt verwijderen?');" value="Delete">

										</form>
									</td>


								@endforeach

								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- 
<div class= "col-md-4 col-lg-4 col-md-offset-3 col-lg-offset-3 pull-right">

		<form action="/search" method="POST" role="search">
		    {{ csrf_field() }}
		    <div class="input-group">
		        <input type="text" class="form-control" name="q"
		            placeholder="Search user"> <span class="input-group-btn">
		            <button type="submit" class="btn btn-default">
		                <span class="glyphicon glyphicon-search"></span>
		            </button>
		        </span>
		    </div>
		</form>

		{{-- <div class="container">
		    @if(isset($details))
		        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
		    <h2>Sample User details</h2>
		    <table class="table table-striped">
		        <thead>
		            <tr>
		                <th>Name</th>
		                <th>Email</th>
		            </tr>
		        </thead>
		        <tbody>
		            @foreach($details as $user)
		            <tr>
		                <td>{{$user->name}}</td>
		                <td>{{$user->email}}</td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		    @endif
		</div> --}}

	</div>
</div> -->

@endsection