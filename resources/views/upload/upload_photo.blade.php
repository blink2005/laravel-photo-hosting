<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Hosting</title>
</head>
<body>
    <h1>Выберите фотографию для загрузки</h1>
    <hr>
    <form action="{{ route('upload.result') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <p><input type="file" name="file"></p>
        <p><input type="submit" value="Загрузить"></p>
    </form>
</body>
</html>