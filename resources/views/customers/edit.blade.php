@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Wijzig klant
                </div>
                <div class="card-body">
                @if(Session::has('customer_updated'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('customer_updated')}}
                    </div>
                @endif
<!--     <form method="PUT" action="{{ route('customers.update',[$customer->id]) }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$customer->id}}}"> -->

    <form method="post" action="{{ route('customers.update',[$customer->id]) }}">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="PUT">

        <div class="form-group">
            <label for="customer-voornaam">Voornaam<span class="required">*</span></label>
            <input   placeholder="Voornaam"  
                      id="customer-voornaam"
                      required
                      name="voornaam"
                      spellcheck="false"
                      class="form-control"
                      value="{{$customer->voornaam}}" 
                       />
        </div>

        <div class="form-group">
            <label for="customer-tussenvoegsel">Tussenvoegsel</label>
            <input   placeholder="Tussenvoegsel"  
                      id="customer-tussenvoegsel"
                      name="tussenvoegsel"
                      spellcheck="false"
                      class="form-control"
                      value="{{$customer->tussenvoegsel}}" 
                       />
        </div>        
        <div class="form-group">
            <label for="customer-achternaam">Achternaam<span class="required">*</span></label>
            <input   placeholder="Achternaam"  
                      id="customer-achternaam"
                      required
                      name="achternaam"
                      spellcheck="false"
                      class="form-control"
                      value="{{$customer->achternaam}}" 
                       />
        </div>
        <div class="form-group">
            <label for="customer-email">Email<span class="required">*</span></label>
            <input   placeholder="Enter email"  
                      id="customer-email"
                      required
                      name="email"
                      spellcheck="false"
                      class="form-control"
                      value="{{$customer->email}}" 
                       />
        </div>  
        <div class="form-group">
            <label for="customer-telefoon">Telefoon<span class="required">*</span></label>
            <input   placeholder="Telefoon"  
                      id="customer-telefoon"
                      required
                      name="telefoon"
                      spellcheck="false"
                      class="form-control"
                      value="{{$customer->telefoon}}" 
                       />
        </div>        
        <div class="form-group">
            <label for="customer-adres">Adres<span class="required">*</span></label>
            <input   placeholder="Adres"  
                      id="customer-adres"
                      required
                      name="adres"
                      spellcheck="false"
                      class="form-control"
                      value="{{$customer->adres}}" 
                       />
        </div>

        <div class="form-group">
            <label for="customer-postcode">Postcode<span class="required">*</span></label>
            <input   placeholder="Postcode"  
                      id="customer-postcode"
                      required
                      name="postcode"
                      spellcheck="false"
                      class="form-control"
                      value="{{$customer->postcode}}" 
                       />
        </div>
        <div class="form-group">
            <label for="customer-plaats">Plaats<span class="required">*</span></label>
            <input   placeholder="Plaats"  
                      id="customer-plaats"
                      required
                      name="plaats"
                      spellcheck="false"
                      class="form-control"
                      value="{{$customer->plaats}}" 
                       />
        </div>


        <div class="form-group">
            <input type="submit" class="btn btn-success"
                   value="Wijzig"/>
        </div>
    </form>
</div>
@endsection