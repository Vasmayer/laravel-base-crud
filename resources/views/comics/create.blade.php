@extends('layouts.main')

@section('content')
<h1 class="text-center text-success d-flex align-items-center justify-content-center">CREA</h1>   
<div class="container">
   <form action="{{ route('comics.store')}}" method="post">
       @csrf
       @include('includes.form')
   </form>
</div> 
    
@endsection