@extends('layouts.base')

@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
    <!--Other form fields above the button-->
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-user"></i> MockUp Form
                </button>
            </div>
        </div>
        <hr>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <a href="{{ url('/login/google') }}" class="btn btn-google"><i class="fa fa-google"></i> Google</a>
               
            </div>
        </div>
    </form>


@endsection