@foreach ($cars as $car)
  <ul>
    <li><b>ID: </b>{{ $car->id }}</li>
    <li><b>Name: </b>{{ $car->name }}</li>
    <li><b>Model: </b>{{ $car->model }}</li>
    <li><b>Year: </b>{{ $car->year }}</li>
    <li><b>Kilometers: </b>{{ $car->kilometers }}</li>
    <li><b>Colour: </b>{{ $car->colour }}</li>
  </ul>
@endforeach
