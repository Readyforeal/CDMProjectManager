@extends('layouts.app')


@section('content')

<section class="container">
    <div class="row">
        <div class="col-3">
            @include('layouts.sidebar')
        </div>

        <div class="col-9">
            <section class="mt-4">
                <p class="lead font-weight-bold">Employees</p>
            @foreach($users as $user)
                <p>{{ $user->name_first }} {{ $user->name_last }}</p>
            @endforeach
            </section>
        </div>
    </div>  
</section>
@endsection
