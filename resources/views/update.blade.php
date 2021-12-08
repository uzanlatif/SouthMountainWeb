@extends('navbar')
@section('content')

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    
    <!-- FORM UNTUK UPDATE DATA -->
    
    <main class="form-signin">
      <form method="POST" action="/update/{{$eventgunung->id}}">
        @csrf
        <h1 class="h3 mb-3 fw-normal">UPDATE DATA</h1>

        <div class="form-floating">
          <input type="text" class="form-control" name="NamaGunung" id="floatingPassword" value="{{$eventgunung->NamaGunung}}">
          <label for="floatingPassword">Nama Gunung</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" name="EventGunung" id="floatingInput" value="{{$eventgunung->NamaEvent}}">
          <label for="floatingInput">Event Gunung</label>
        </div>

        <div class="form-floating">
          <input type="text" class="form-control" name="Waktu" id="floatingInput" value="{{$eventgunung->Waktu}}">
          <label for="floatingInput">Waktu(YYYY/MM/DD)</label>
        </div>

        <div>
          <input type="File" class="form-control" name="Gambar" id="floatingPassword" value="{{$eventgunung->Gambar}}">
        </div>
        
        <br>
    
        <button class="w-100 btn btn-lg btn-primary" type="submit">create</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
      </form>
    </main>

@endsection