@extends('layouts.app')
@section('content')
    <div class="">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route("profile.index") }}">Profile</a></li>
                <li class="breadcrumb-item"><a href="{{ route("profile.change-password") }}">Change Password</a></li>

            </ol>
        </nav>
    </div>
    <div class="row mb-4">

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="border-bottom mb-4 d-flex justify-content-between align-items-center pb-3">
                        <h4 class="mb-0">Change Your Password</h4>
                    </div>
                    <div class="">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input type="password" name="current_password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" required>
                                    <label class="form-check-label" for="flexSwitchCheckDefault">
                                        I agree
                                    </label>
                                </div>
                                <button class="btn btn-primary">Change Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="border-bottom mb-4 d-flex justify-content-between align-items-center pb-3">
                        <h4 class="mb-0">Upload Photo</h4>
                    </div>
                    <div class="mx-auto">
                        <div class="mb-3">
                            <img src="{{ asset("storage/user-photo/".\Illuminate\Support\Facades\Auth::user()->photo) }}" class="d-block mx-auto w-75" alt="">
                        </div>
                        <form action="{{ route("profile.change-photo") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <button class="btn btn-primary float-end">Upload Photo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
