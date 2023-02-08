@extends('index2')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="POST">
                @csrf
              <h1 class="h3 mb-3 fw-bold">Register form</h1>
              <div class="form-floating">
                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="floatingInput" placeholder="First Name">
                <label for="floatingInput">First Name : Re</label>
                @error('first_name')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                @enderror
              </div>

            <div class="form-floating">
                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="floatingInput" placeholder="Last Name">
                <label for="floatingInput">Last Name</label>
                @error('last_name')
                    <div class="invalid-feedback text-start mb=3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
                @error('email')
                    <div class="invalid-feedback text-start mb=3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <select id="" name="role_id" class="form-select">
                <option value="">Select Role</option>
                <option value="Male">User</option>
                <option value="Female">Admin</option>
                </select>
                @error('role_id')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <select id="" name="gender_id" class="form-select">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </select>
                @error('gender_id')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="password" name="confirm_password" class="form-control @error('confirm_password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
                @error('confirm_password')
                    <div class="invalid-feedback text-start mb-3">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="hidden" name="role_id" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name" value="User">
              <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>

            </form>
            <small>Allready registered? <a href="/login">Login Now</a></small>
        </main>
    </div>
</div>
@endsection

