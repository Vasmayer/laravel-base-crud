@extends('layouts.main')

@section('content')
<h1 class="text-center text-success d-flex align-items-center justify-content-center">MODIFICA</h1>   
<div class="container">
   <form action="{{ route('comics.update',$comic->id)}}" method="post">
       @csrf
       @method('PUT')
       @include('includes.form')
   </form>
</div> 
    
@endsection