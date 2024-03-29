<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.87.0">
  <title>Login</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
  
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  
  <!-- Custom styles for this template -->
  <link href="{{url('/')}}/assets/css/login.css" rel="stylesheet">
</head>
<body class="text-center">
    
  <main class="form-signin">
    <form action="{{ route('authenticate') }}" method="POST">
        @csrf
      <img class="mb-4" src="{{url('/')}}/assets/images/logo.png" alt="Logo" width="55" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    
      <div class="form-floating">
        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', 'snow@gmail.com') }}" id="email" name="email" placeholder="snow@gmail.com">
        <label for="email">Email address</label>
        @error('email')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" value=123456 name="password" id="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
      </div>
    
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" href="{{route('dashboard')}}" type="submit">Sign in</button>
      <h4 class="mt-3">Don't have an account?<span><a href="{{route('register')}}"> Sign up</a></span></h4>
      <p class="mt-5 mb-3">&copy; Kelompok 7 - 2023</p>
    </form>
  </main>
  
</body>
</html>