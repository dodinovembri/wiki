<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Knowledge</title>
</head>

<body>
    <form method="POST" action="{{ url('store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Type here..."> Title <br> 
        <textarea name="knowledge" cols="30" rows="10"></textarea> Knowlege <br>
        <button type="submit">store</button>
        <a href="{{ url('/') }}"><button type="button">cancel</button></a>
    </form>
</body>

</html>