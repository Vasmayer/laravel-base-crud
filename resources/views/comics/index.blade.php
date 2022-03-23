@extends('layouts.main')

@section('content')
<h1 class="text-center text-success d-flex align-items-center justify-content-center">COMICS <a href="{{ route('comics.create')}}" class="ms-3 btn btn-success"><i class="fa-solid fa-plus"></i></a> </h1>   
<div class="container">
    <div class="row g-5">
        @foreach ($comics as $comic)
            <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                @include('includes.card')
                <div class="d-flex">
                    <a class="btn btn-success" href="{{ route('comics.show',$comic->id)}}">Dettaglio</a>
                    <a class="btn btn-warning ms-2" href="{{ route('comics.edit',$comic->id)}}">Modifica</a>
                    <form class="ms-2" action="{{ route('comics.destroy',$comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </div>
                
            </div>
        @endforeach
    </div>
</div> 
    
@endsection