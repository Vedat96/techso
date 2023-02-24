@section('content')

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
<div class="row">
    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <h1>Wijzig klant</h1>
        <div class="row col-lg-12 col-md-12 col-sm-12" style="background: white; margin: 10px;">
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
                              value="{{ $customer->voornaam }}" 
                               />
                </div>

                <div class="form-group">
                    <label for="customer-tussenvoegsel">Tussenvoegsel<span class="required">*</span></label>
                    <input   placeholder="Voornaam"  
                              id="customer-tussenvoegsel"
                              name="tussenvoegsel"
                              spellcheck="false"
                              class="form-control"
                              value="{{ $customer->tussenvoegsel }}" 
                               />
                </div>

                <div class="form-group">
                    <label for="customer-achternaam">Achteraam<span class="required">*</span></label>
                    <input   placeholder="Achteraam"  
                              id="customer-achternaam"
                              required
                              name="achternaam"
                              spellcheck="false"
                              class="form-control"
                              value="{{ $customer->achternaam }}" 
                               />
                </div>

                <div class="form-group">
                    <label for="customer-email">Email<span class="required">*</span></label>
                    <input   placeholder="Email"  
                              id="customer-email"
                              required
                              name="email"
                              spellcheck="false"
                              class="form-control"
                              value="{{ $customer->email }}"
                              width="500" 
                               />
                </div>

                <div class="form-group">
                    <label for="customer-telefoon">Telefoonnummer<span class="required">*</span></label>
                    <input   placeholder="Telefoonnummer"  
                              id="customer-telefoon"
                              required
                              name="telefoon"
                              spellcheck="false"
                              class="form-control"
                              value="{{ $customer->telefoon }}" 
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
                              value="{{ $customer->adres }}" 
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
                              value="{{ $customer->postcode }}" 
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
                              value="{{ $customer->plaats }}" 
                               />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary"
                           value="Wijzig"/>
                </div>
            </form>
        </div>
    </div>
    
      
    <div class="col-md-3 col-lg-3 col-sm-3 pull-right">
        {{-- <div class="sidebar-module">
            <h4>Actions</h4>
            <ol class="list-unstyled">
                <li><a href="/users/{{$customer->id}}">View customer</a></li>
                <li><a href="/users">All users</a></li>
            </ol>
        </div> --}}
    </div>
    
</div>
@endsection