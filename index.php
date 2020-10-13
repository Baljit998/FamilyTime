<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>It's FamilyTime...Click Below to Start Meeting</title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body class="m-2 p-2">
    <h1 class="p-2d">It's FamilyTime...Click Below to Start Meeting</h1>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

   
    <button id="start" class="btn btn-primary m-1">Start Video Chat</button>
    <br>

    
    <script type="text/javascript" src="https://arvia.chat/js/arvia.chat.js" ></script>
    <div id="arvia.chat" class="float-left m-2"></div>
    
    <script type="text/javascript">

     
      var arviaChat;

     
      document.getElementById('start').onclick = function(){
        document.getElementById('start').onclick = undefined;

        arviaChat = new ArviaChat('5b4f145ac4dbc95dcf926a52');
        arviaChat.init("arvia.chat");
        arviaChat.setRoomName("test-room-1");
        arviaChat.setTestUser(true);
        arviaChat.connect();
        document.getElementById('start').classList.add('disabled');
      };

    </script>

  </body>
</html>