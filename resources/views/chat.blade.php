<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
 <meta name="csrf-token" content="{{csrf_token()}}">
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">
 <style>
  .list-group{
   overflow-y: scroll;
   height: 200px;
  }
 </style>
</head>
<body>
 <div class="container">
  <div class="row" id="app">
   <h1>Chat room</h1>
   <div class="offset-4 col-md-4">
    <li class="list-group-item active">Chat</li>
    <ul class="list-group" v-chat-scroll>
     <message v-for="value in chat.message">
      @{{value}}
     </message>
    </ul>
    <input type="text" class="form-control" placeholder="Type your message here.." v-model='message' @keyup.enter='send'>
   </div>
  </div>
 </div>
 <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>