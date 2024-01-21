<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Cars</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('cars')}}">Home</a></li>
      <li ><a href="createCar">Insert Car</a></li>
      <li><a href="cars">Cars</a></li>
      <li><a href="posts">Posts</a></li>
      <li><a href="{{route('trashed')}}">Trashed Car</a></li>
      <li><a href="{{route('trashedPost')}}">Trashed Post</a></li>
      <!-- <li><a href={{ LaravelLocalization::getLocalizedURL('en') }}>English</a></li>
      <li><a href={{ LaravelLocalization::getLocalizedURL('en') }}>Arabic</a></li> -->
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>