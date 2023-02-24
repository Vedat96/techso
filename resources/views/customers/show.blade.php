@extends('layouts.app')

@section('content')

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
<div class="row">
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
      <!-- Jumbotron -->
        <div class="jumbotron">



            <h1>{{ $customer->voornaam }}</h1>
            @if(Auth::check())

                <p class="lead">{{ $customer->email}}</p>
                
            @endif
            {{-- <p class="lead">{{ $customer->password}}</p> --}}
        </div> 


        </div>

        @if(Auth::check())
            @if(Auth::user()->id)
          
                <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
                    <div class="sidebar-module">
                        {{-- <h4>Actions</h4> --}}
                        <ol class="list-unstyled">
                            <li><a href="/customers/{{$customer->id}}/edit"><i class="fas fa-user-edit"></i> Edit</a></li>
                            {{-- <li><a href="/customers"><i class="fas fa-users"></i> All users</a> --}}
                            </li>
                            <br>
                            <li>

                            <a href="#" onclick="
                                  var result = confirm('Are you sure you wish to delete this user?');
                                      if( result ){
                                              event.preventDefault();
                                              document.getElementById('delete-form').submit();
                                      }
                                          "
                                          >
                                  <i class="fas fa-trash-alt"></i> Delete
                              </a>

                            <form id="delete-form" action="{{ route('customers.destroy',[$customer->id]) }}" 
                                method="POST" style="display: none;">
                                        <input type="hidden" name="_method" value="delete">
                                        {{ csrf_field() }}
                            </form>

                            </li>
                        </ol>
                    </div>

                    {{-- <a class="btn btn-primary" href="{{ route('like', ['id' => Auth::id()]) }}">Like me</a> --}}
            @endif
        @endif
    </div>
</div>
@endsection