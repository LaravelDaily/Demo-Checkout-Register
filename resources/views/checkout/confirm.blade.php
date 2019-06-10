@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-info">{!! session('message') !!}</div>
                            <br/>
                        @endif

                        <div>Thank you, order confirmed. <a href="{{ url('/') }}">Back to the homepage</a></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
