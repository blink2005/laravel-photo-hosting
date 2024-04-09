<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Hosting</title>
</head>
<body>
    <h1>Ваше фото опубликовано, снизу будет ссылка</h1>
    <hr>
    <p>Полный путь до фотографии: <a href="{{ $result_photo_url }}">{{ $result_photo_url }}</a></p>
    <p>Ссылка с разметкой: <a href="{{ $frontend_url }}">{{ $frontend_url }}</a></p>
</body>
</html>