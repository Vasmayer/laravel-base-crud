@extends('layouts.main')

@section('content')
<h1 class="text-center text-success">{{ $comic->title}}</h1>   
<div class="container">
    <div class="row g-5">
            <div class="col-8 offset-2 d-flex justify-content-center">
               @include('includes.card')
            </div>
    </div>
</div> 
    
@endsection