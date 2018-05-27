@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

        <div class="card">
            <div class="card-header">
                Edit your profile
            </div>
    
            <div class="card-body">
              
            <form action="{{ route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="name">New Password</label>
                            <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="name">Upload new avatar</label>
                            <input type="file" name="avatar" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="name">Facebook profile</label>
                            <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="name">Youtube profile</label>
                            <input type="text" name="youtube"  value="{{ $user->profile->youtube }}" class="form-control">
                    </div>

                    <div class="form-group">
                            <label for="name">About you</label>
                            <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                    </div>

                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">Update profile</button>
                        </div>
                    </div>


                </form>
            </div>
        </div>

@stop