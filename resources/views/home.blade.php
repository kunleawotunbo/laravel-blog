@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="panel panel-default">
    <div class="panel-heading">Dashboard</div>
    <div class="panel-body">
        Welcome !
    </div>
</div> --}}

        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">               

                You are logged in!
            </div>
        </div>
@endsection
