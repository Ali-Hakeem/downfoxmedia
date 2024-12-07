@extends('layouts.layouts')
@section('page_header')
    {{ "Login" }}
@endsection
@section('content')
    <div class="col-lg-8 mb-3">
        <h3 class="fw-bold mb-3 text-white text-center text-capitalize">Welcome!</h3>
            <div class="card p-3 text-black">

            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control rounded-0">
                </div>

                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control rounded-0">
                </div>
                    <button type="submit" class="btn rounded-0 text-white fw-bold" style="background-color:#483d8b">Login</button>
            </form >
            </div>
        </div>
@endsection