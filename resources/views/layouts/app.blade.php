<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <title>Microposts2</title>
</head>
<body>
     {{-- ナビゲーションバー --}}
     @include('commons.navbar')

     <div class="container">
         {{-- エラーメッセージ --}}
         @include('commons.error_messages')

         @yield('content')
     </div>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
     <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    
</body>
</html>