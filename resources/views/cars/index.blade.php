@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Model</th>
              <th>Year</th>
              <th>Kilometers</th>
              <th>Colour</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cars as $car)
              <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->model }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->kilometers }}</td>
                <td>{{ $car->colour }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>  
    </div>
  </div>
@endsection
