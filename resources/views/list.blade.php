@extends('navbar')
@section('content') 
<div style="padding-left: 20px">
    <a href="/create"><button class="btn btn-success" > + DATA </button></a>
</div>

<h1 class="d-flex justify-content-center">Database SouthMountain</h1>
<br>
<!-- Memunculkan Database Dengan List -->
<table class="table">
    <tr>
        <td>ID</td>
        <td>Nama Gunung</td>
        <td>Nama Event</td>
        <td>Waktu</td>
        <td>Gambar</td>
        <td>Actions</td>
    </tr>

    <tr>
    @foreach ($data as $item)
    <td>{{$item->id}}</td>
    <td>{{$item->NamaGunung}}</td>
    <td>{{$item->NamaEvent}}</td>
    <td>{{$item->Waktu}}</td>
    <td><img src="{{asset('img/'. $item->Gambar)}}"></td>

    <td> 
        <a href="/update/{{$item->id}}">
               <button class="btn btn-warning">
                Update
                   </button> 
        </a>

        <form action="/list/{{$item->id}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger"> 
                Delete
                </button>

        </form>    
    </td>
    </tr>
    @endforeach
    
</table>
   
@endsection
