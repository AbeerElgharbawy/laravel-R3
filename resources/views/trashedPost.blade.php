
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cars List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<div class="container">
  <h2>Trashed List</h2>
  <!-- <p>The .table-hover class enables a hover state on table rows:</p>             -->
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Published</th>
        <th>Force Delete</th>
        <th>Restore</th>
      </tr>
    </thead>
    <tbody>
       @foreach($posts as $post)
      <tr>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td>
            @if($post->published)
                Yes
            @else
                No
            @endif
        </td>
        <!-- <td><a href="deletepost/{{ $post->id }}" onclick="return confirm('Are you sure you want to delete?')">forceDelete</a></td> -->
        <td><a href="forceDelete/{{ $post->id }}" onclick="return confirm('Are you sure you want to delete?')">forceDelete</a></td>
        <td><a href="restorePost/{{$post->id}}">Restore</a></td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>
