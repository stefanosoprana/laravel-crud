@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Add new car</h1>
        <form class="form-group" action="{{ route('cars.store') }}" method="post">
          @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Insert the name">
          </div>
          <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control" placeholder="Insert the model">
          </div>
          <div class="form-group">
            <label for="year">Year</label>
            <input type="number" name="year" class="form-control" placeholder="Insert the year">
          </div>
          <div class="form-group">
            <label for="kilometers">Kilometers</label>
            <input type="number" name="kilometers" class="form-control" placeholder="Insert the kilometers">
          </div>
          <div class="form-group">
            <label for="colour">Colour</label>
            <input type="text" name="colour" class="form-control" placeholder="Insert the colour">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control" value="Save New Car">
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
