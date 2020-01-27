@extends('layouts.app')


@section('content')

<section class="container">
    <div class="row">
        <div class="col-3">
            @include('layouts.sidebar')
        </div>

        <div class="col-9">
            <section>
                <p class="lead font-weight-bold">Schedule / Create schedule</p>
                
                <div class="row">
                    <div class="col-6 offset-3">
                        <form method="POST" action="/schedule">
                            @csrf

                            <div class="row">
                                <div class="col-12">
                                    <select id="user" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus>
                                                
                                        <option></option>

                                        @foreach($users as $user)
                                            <option>{{ $user->name_first }}</option>
                                        @endforeach

                                    </select>

                                    @error('user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-4">
                                    <div class="form-group">

                                        <select id="schedule_item" class="form-control @error('schedule_item') is-invalid @enderror" name="schedule_item" value="{{ old('schedule_item') }}" required autocomplete="schedule_item" autofocus>
                                            
                                            <option></option>

                                            @foreach($tracks as $track)
                                                <option>{{ $track->shorthand }}</option>
                                            @endforeach

                                        </select>

                                        @error('schedule_item')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-group">

                                        <input id="lot_number" type="text" placeholder="#" class="form-control @error('lot_number') is-invalid @enderror" name="lot_number" value="{{ old('lot_number') }}" required autocomplete="lot_number" autofocus>
                
                                        @error('lot_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-5">
                                    <div class="form-group">

                                        <select id="item_type" class="form-control @error('item_type') is-invalid @enderror" name="item_type" value="{{ old('item_type') }}" required autocomplete="item_type" autofocus>
                
                                            <option></option>
                                            <option>Trim</option>
                                            <option>Hardware</option>
                                            <option>Punch</option>

                                        </select>

                                        @error('item_type')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-lg btn-block btn-outline-secondary">
                                    Add item
                                </button>
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
