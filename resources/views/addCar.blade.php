<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add New Car Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Add New Car</h2>
  <form action="{{route('storeCar')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="description">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter Car title" name="title" value="{{old('title')}}">
      @error('title')
       {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">description:</label>
      <textarea class="form-control" name="description" id="" cols="60" rows="3">{{old('description')}}</textarea>   
      @error('description')
       {{ $message }}
      @enderror
    </div>
      
    <div class="checkbox">
      <label><input type="checkbox" name="published"> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">Insert</button>
  </form>
</div>

</body>
</html>
