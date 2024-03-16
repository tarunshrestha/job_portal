@extends('front.layouts.app')

@section('main')

<header class="bg-secondary py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Registration</h1>
            <p class="lead fw-normal text-white-50 mb-0">Login below:</p>
        </div>
    </div>
</header>

<div class="container px-4 px-lg-5 my-5">
    <form name="registrationForm" id="registrationForm" action="">
        <h3>Register Below:</h3>
        <br>
        <div class="mb-3">
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your fullname...">
            <p></p>
        </div><br>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email address...">
            <p></p>
        </div><br>
        <div class="mb-3">
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password...">
            <p></p>
        </div><br>
        <div class="mb-3">
            <input type="password" class="form-control" name="password2" id="password2" placeholder="Enter your password again...">
            <p></p>
        </div><br>

        <button class="btn btn-secondary mx-auto d-block">Register</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $("#registrationForm").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '{{ route("account.processRegistration") }}',
            type: 'post',
            data: $("#registrationForm").serializeArray(),
            dataType: 'json',
            success: function(response) {
                if (response.status === false) {
                    var errors = response.errors;
                    if (errors.name) {
                        $("#name").addClass('is_invalid').siblings('p').addClass('invalid-feedback').html(errors.name);
                    } else {
                        $("#name").removeClass('is_invalid').siblings('p').removeClass('invalid-feedback').html("");
                    }

                    // Handle errors for other fields similarly
                }
            }
        });
    });
</script>

@endsection
