@extends('layout')

@section('content')

<section class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif

  <table id="myTable" class="table table-striped tablesorter">
    <thead>
      <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Author</td>
        <td>Price</td>
        <td>Publisher</td>
        <td>Cover Image</td>
      </tr>
    </thead>
    <tbody id="books-results">
      @foreach($books as $book)
      <tr>
          <td>{{$book->id}}</td>
          <td><a href="{{ route('books.show',$book->id)}}">{{$book->name}}</a></td>
          <td><a href="{{ route('books.show',$book->id)}}">{{$book->author}}</a></td>
          <td>{{$book->price}}</td>
          <td>{{$book->publisher}}</td>
          <td><img class="popable" src="{{$book->image_url}}" alt="" width="100"/></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="show">
    <div class="overlay"></div>
    <div class="img-show">
      <a id="closeLink">X</a>
      <img src="noimagejpg.jpg" alt="" />
    </div>
  </div>
</section>

@endsection

@section('search')

<div class="form-group">
  <input type="text" class="form-controller" id="search" name="search"/>
  <p id="test"></p>
</div>

@endsection





