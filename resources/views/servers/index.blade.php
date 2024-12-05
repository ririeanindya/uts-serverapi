<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server List</title>
    <style>
        .server-card {
            border: 1px solid #ddd;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            width: 300px;
        }
        h4, p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Server List</h1>
    <div class="user-list">
    @foreach ($servers as $server)
    <div class="server-card">
        <h4>{{ $server['name'] }}</h4>
        <p>{{ $server['price'] }}</p>
        <p>{{ $server['quantity'] }}</p>
    </div>
    @endforeach


    </div>
</body>
</html>
