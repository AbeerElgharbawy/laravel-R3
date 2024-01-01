<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Car</title>
</head>
<body>
    <h2>Title Car:{{$cars-> title}}</h2>
    <h2>Car Description:{{$cars-> description}}</h2>
    <h2>Published:{{$cars-> published? " Yes":" No"}}</h2>
    <h2>Created At:{{$cars-> created_at}}</h2>
    <h2>Updated AT:{{$cars-> updated_at}}</h2>
    <h2>Category:{{$cars->category->cat_name}}</h2>
</body>
</html>