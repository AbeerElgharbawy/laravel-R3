<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
    <h3>Post title: <mark>{{ $posts->title }}</mark></h3>
    <h3>Post description:<mark> {{ $posts->description }}</mark></h3>
    <h3>Post published: <mark>{{ $posts->title?"Yes":"No" }}</mark></h3>
    <h3>Created At:<mark> {{ $posts->created_at }}</mark></h3>
    <h3>Updated At:<mark> {{ $posts->updated_at }}</mark></h3>
    
</body>
</html>