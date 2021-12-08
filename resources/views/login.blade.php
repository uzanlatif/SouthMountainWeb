<br>
<br>
<br>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<!-- Form Login -->
<main class="form-signin">
  <form method="POST" action="/login">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="ussername" id="floatingInput" required>
      <label for="floatingInput">Username / email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" required>
      <label for="floatingPassword">Password</label>
    </div>
    <br>
    <a style="text-decoration-color: white" href="/register">register</a>
    <br>
    <br>

    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>

<div class="flash-message">
  @foreach (['danger','warning','succes','info'] as $msg)
  @if (Session::has('alert-' . $msg))
  <p class="alert alert-{{$msg}}">{{Session::get('alert-' . $msg)}} </p>
    
  @endif
      
  @endforeach
</div>