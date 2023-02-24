@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Voeg klant toe
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('customers.store') }}">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                            <label for="customer-voornaam">Voornaam<span class="required">*</span></label>
                            <input   placeholder="voornaam"  
                                      id="customer-voornaam"
                                      required
                                      name="voornaam"
                                      spellcheck="false"
                                      class="form-control" 
                                       />
                            </div>

                            <div class="form-group">
                                <label for="customer-tussenvoegsel">Tussenvoegsel</label>
                                <input   placeholder="tussenvoegsel"  
                                          id="customer-tussenvoegsel"
                                          name="tussenvoegsel"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>

                                                        <div class="form-group">
                                <label for="customer-achternaam">Achternaam<span class="required">*</span></label>
                                <input   placeholder="achternaam"  
                                          id="customer-achternaam"
                                          required
                                          name="achternaam"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>
                            <div class="form-group">
                                <label for="customer-email">Email<span class="required">*</span></label>
                                <input   placeholder="email"  
                                          id="customer-email"
                                          required
                                          name="email"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>

                            <div class="form-group">
                                <label for="customer-telefoon">Telefoon<span class="required">*</span></label>
                                <input   placeholder="telefoon"  
                                          id="customer-telefoon"
                                          required
                                          name="telefoon"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>



                            <div class="form-group">
                                <label for="customer-adres">Adres<span class="required">*</span></label>
                                <input   placeholder="adres"  
                                          id="customer-adres"
                                          required
                                          name="adres"
                                          spellcheck="false"
                                          class="form-control"
                                          />
                            </div>

                            <div class="form-group">
                                <label for="customer-postcode">Postcode<span class="required">*</span></label>
                                <input   placeholder="postcode"  
                                          id="customer-postcode"
                                          required
                                          name="postcode"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>
                            <div class="form-group">
                                <label for="customer-plaats">Plaats<span class="required">*</span></label>
                                <input   placeholder="plaats"  
                                          id="customer-plaats"
                                          required
                                          name="plaats"
                                          spellcheck="false"
                                          class="form-control"
                                           />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success"
                                       value="Voeg toe"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
