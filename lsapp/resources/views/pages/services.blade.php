@extends('layouts.base')
@section('content')
    <h2>SERVICES</h2>
    @if(count($services))
        <ul>
            @foreach($services as $serv)
                <li class="list-group-item">{{$serv}}</li>

            @endforeach

        </ul>

    @endif
@endsection