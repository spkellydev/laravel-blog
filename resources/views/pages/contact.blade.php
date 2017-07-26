@extends('main')
@section('title', 'About')
@section('meta_title', 'SPK.Design | Contact Me Here')
@section('meta_description', "Hello! If you need a full stack developer or just want to say hello, feel free to drop me a line!")
@section('content')
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="jumbotron">
            <h1>Hello!</h1>
            <p class="lead">Thank you for visiting. We should talk...</p>
          </div> <!-- end of jumbrotron -->
        </div> <!-- end of columns -->
        <div class="col-md-8 col-md-offset-2">
      <form action="{{ url('contact') }}" method="POST">
      {{ csrf_field() }}
          <div class="form-group">
            <label name="email">Email:</label>
            <input type="email" name="email" class="form-control" id="id">
          </div>
          <div class="form-group">
            <label name="subject">Subject:</label>
            <input type="subject" name="subject" class="form-control" id="id">
          </div>
          <div class="form-group">
            <label name="message">Message:</label>
            <textarea id="message" name="message" class="form-control" placeholder="Let's talk!"></textarea>
          </div>
          <input type="submit" name="submit" value="Send" class="btn btn-success">
      </form>
      </div>
    </div> <!-- end of row -->
@endsection