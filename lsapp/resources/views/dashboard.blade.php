@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                        <h3>Your Blog Posts</h3>
                            <a href="/posts/create" class="btn btn-primary">Create Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
