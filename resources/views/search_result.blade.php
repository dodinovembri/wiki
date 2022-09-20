<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
</head>

<body>
    <form method="POST" action="{{ url('search') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="keywords" placeholder="Type here...">
        <button type="submit">search</button>
        <a href="{{ url('create') }}"><button type="button">add new</button></a>
    </form><br>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Knowledge</th>
            <th>Action</th>
        </tr>
        <?php foreach ($search_result as $key => $value) { ?>
            <tr>
                <td>{{ $value->title }}</td>
                <td>{{ $value->knowledge }}</td>
                <td><a href="{{ url('edit', $value->id) }}">Edit</a></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>