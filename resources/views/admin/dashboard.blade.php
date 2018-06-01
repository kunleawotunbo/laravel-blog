@extends('layouts.app')

@section('content')
<div class="card-deck">
    <div class="card border-info">
        <div class="card-header text-center bg-info">
             POSTED
        </div>
        <div class="card-body">
            <h1 class="text-center">
                {{ $posts_count }}
            </h1>
        </div>
    </div>

    <div class="card border-danger">
        <div class="card-header text-center bg-danger">
            TRAHSED POST
        </div>
        <div class="card-body">
            <h1 class="text-center">
                {{ $trashed_count }}
            </h1>
        </div>
    </div>

    <div class="card border-success">
        <div class="card-header text-center bg-success">
            USERS
        </div>
        <div class="card-body">
            <h1 class="text-center">
                {{ $users_count }}
            </h1>
        </div>
    </div>

    <div class="card border-info">
        <div class="card-header text-center bg-info">
            CATEGORIES
        </div>
        <div class="card-body">
            <h1 class="text-center">
                {{ $categories_count }}
            </h1>
        </div>
    </div>
</div>
      

        
@endsection
