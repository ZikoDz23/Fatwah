<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Avatar</title>
</head>
<body>
    <form id="avatar" method="POST" action="/change-avatar">
        @csrf
    <input type="file" name="avatar">
    <button type="submit">Change Avatar</button>
    </form>
</body>
</html>