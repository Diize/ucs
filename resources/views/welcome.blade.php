<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Display Album</title>
     <link href="{{ mix('css/app.css') }}" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <div id="app">

<albumdisplay-component :albums="{{ json_encode($data) }}" />

    </div>
    <script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>



