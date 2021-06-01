<html>
    <head>
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5fec31707004c1001968ef3a&product=sticky-share-buttons' async='async'></script>
        <style>
            .container {
                position: relative;;
                width: 1260px;
                height:520px;
                border:1px red  solid;
            }
            .toolbox {
                position: absolute;
                bottom: 0px;
                border:1px red  solid;
                width: 100%;
                height:50px;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://meet.jit.si/external_api.js"></script>
        <script src="script.js"></script>
        
        <script>
            $(function(){
                BindEvent();

                $('#btnStart').on('click',function(){
                    var meetingId = $('#txtMeetingId').val();
                    var dispNme = $('#txtDispNme').val();
                    StartMeeting(meetingId,dispNme);
                });
            });
            
        </script>
    </head>
    <body>
        Display Name: <input id='txtDispNme' type="text"> <br>
        <button id='btnStart'>Start</button>
        <input type="text" id="txtMeetingId">
        <div class="container">
            <div id="toolbox" class="toolbox" style="display:none;">
                <button id='btnHangup'>Hangup</button>
                <button id='btnCustomMic'>Mic</button>
                <button id='btnCustomCamera'>Camera</button>
                <button id='btnCustomTileView'>Toggle Tileview</button>
                <button id='btnScreenShareCustom'>SS</button>
                <button id='btnCustomchat'>chat</button>
            </div>
            <div id='jitsi-meet-conf-container'></div>
        </div>
    </body>
</html>
