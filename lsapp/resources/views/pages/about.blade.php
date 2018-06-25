@extends('layouts.base')
@section('content')
<h2>ABOUT</h2>
@if(count($things))

    <ul>
    @foreach($things as $thing)

        <li>{{ $thing }}</li>
            @if($loop->iteration == 2)
            <p>2nd iteration</p>
            @endif

    @endforeach
    </ul>

@endif
<p></p>
@endsection