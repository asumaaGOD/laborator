@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-8">

         <div class="card">
             <div class="card-header">Зураг оруулах</div>
              <form action="{{ route('image.store') }}" method="POST"
            enctype="multipart/form-data">
             @csrf
              <div class="card body">
            <div class="form-group">
            <label>Оруулах зураг сонгох</label>
            <input type="file" name="image" class="form-control">

           </div>
             <div class="form-group">
            <button type="submit" class="btn btn-primary">Хадгалах</button>
            </div>
              </form>
            @foreach ($images as $image)
           <img src="{{ asset('storage/'.$image->name) }}"
             class="img-thumbnail">
            @endforeach
    </div>
      </div>
   </div>
</div>  
 @endsection