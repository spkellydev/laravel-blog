@extends('main')
@section('title', 'About')
@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Contact</h1>
            <p class="lead">Thank you for visiting. This project has been built with Laravel. Please read my popular post</p>
            <p><a href="#" class="btn btn-primary btn-lg">Contact</a></p>
          </div> <!-- end of jumbrotron -->
        </div> <!-- end of columns -->
      </div> <!-- end of row -->
      <form>
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
            <textarea id="message" name="message" class="form-control">Type ur message</textarea>
          </div>
          <input type="submit" name="submit" value="Send" class="btn btn-success">
      </form>
@endsection