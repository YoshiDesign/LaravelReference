@extends('layouts.base')

@section('content')
<h1>OAuth Results</h1>

<ul>
    @if($data)
        @foreach($data as $item)

            <li>{{ $item}} </li>

        @endforeach

    @endif
</ul>


@endsection