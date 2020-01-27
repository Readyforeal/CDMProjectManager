@extends('layouts.app')


@section('content')

<section class="container">
    <div class="row">
        <div class="col-3">
            @include('layouts.sidebar')
        </div>

        <div class="col-9">
            <section>
                <p class="lead font-weight-bold">Tracks / Create Track</p>
                
                <div class="row">
                    <div class="col-6 offset-3">
                        <form method="POST" action="/tracks">
                            @csrf

                            <div class="form-group">

                                <input id="builder" type="builder" placeholder="Builder" class="form-control @error('builder') is-invalid @enderror" name="builder" value="{{ old('builder') }}" required autocomplete="builder" autofocus>
        
                                @error('builder')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input id="neighborhood" type="neighborhood" placeholder="Neighborhood" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" value="{{ old('neighborhood') }}" required autocomplete="neighborhood" autofocus>
        
                                @error('neighborhood')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input id="shorthand" type="shorthand" placeholder="Shorthand" class="form-control @error('shorthand') is-invalid @enderror" name="shorthand" value="{{ old('shorthand') }}" required autocomplete="shorthand" autofocus>
        
                                @error('shorthand')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input id="cross_street" type="cross_street" placeholder="Cross street" class="form-control @error('cross_street') is-invalid @enderror" name="cross_street" value="{{ old('cross_street') }}" required autocomplete="cross_street" autofocus>
        
                                @error('cross_street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">

                                <input id="lot_count" type="lot_count" placeholder="Lot count" class="form-control @error('lot_count') is-invalid @enderror" name="lot_count" value="{{ old('lot_count') }}" required autocomplete="lot_count" autofocus>
        
                                @error('lot_count')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-block btn-outline-secondary">
                                    Create
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>  
</section>
@endsection
