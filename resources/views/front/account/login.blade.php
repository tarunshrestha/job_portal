@extends('front.layouts.app')
@section('main')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Login</h1>
            <p class="lead fw-normal text-white-50 mb-0">Login below:</p>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5 my-5">
<form method="POST" action="#">
    <h3>Login : </h3>
    <br>
  <div class="mb-3">
    <input type="text" class="form-control" name="username" placeholder="Enter your username...">
  </div><br>
  <div class="mb-3">
    <input type="password" class="form-control" name="password"  placeholder="Enter your password...">
  </div><br>

<button type="submit" class="btn btn-secondary mx-auto d-block">Submit</button>

</form>
</div>
@endsection