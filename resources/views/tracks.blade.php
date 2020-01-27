@extends('layouts.app')


@section('content')

<section class="container">
    <div class="row">
        <div class="col-3">
            @include('layouts.sidebar')
        </div>

        <div class="col-9">

            <section class="border-bottom mt-4">
                <p class="lead font-weight-bold">Tracks <a href="/tracks/c" class="btn btn-outline-dark float-right">+ Add track</a></p>

                <div class="row pt-5 font-weight-bold">
                    <div class="col-3">
                        <p>Builder</p>
                    </div>

                    <div class="col-3">
                        <p>Community</p>
                    </div>

                    <div class="col-1">
                        <p>ID</p>
                    </div>

                    <div class="col-4">
                        <p>Cross streets</p>
                    </div>

                    <div class="col-1">
                        <p>Units</p>
                    </div>
                </div>
            </section>

            <section class="mt-5">

                @foreach($tracks as $track)
                    <div class="row">
                        <div class="col-3">
                            <p>{{ $track->builder }}</p>
                        </div>

                        <div class="col-3">
                            <p>{{ $track->neighborhood }}</p>
                        </div>

                        <div class="col-1">
                            <p>{{ $track->shorthand }}</p>
                        </div>

                        <div class="col-4">
                            <p>{{ $track->cross_street }}</p>
                        </div>

                        <div class="col-1">
                            <p>{{ $track->lot_count }}</p>
                        </div>
                    </div>
                @endforeach

                <a href="/tracks/c" class="btn btn-outline-dark float-right">+ Add track</a>
            </section>
        </div>
    </div>  
</section>
@endsection
