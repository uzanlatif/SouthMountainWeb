<br>
<br>
<br>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>

<!-- FORM REGISTRASI -->

<main class="form-signin">
  <form method="POST" action="/register">
    @csrf
    <h1 class="h3 mb-3 fw-normal"> REGISTRATION</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="username" id="floatingInput" required>
      <label for="floatingInput">Username / email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" required>
      <label for="floatingPassword">Password</label>
    </div>
    <br>

    <button class="w-100 btn btn-lg btn-primary" type="submit">UNROLL</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>

</main>