var apiObj = null;

function BindEvent(){
  
        
    
    
    $("#btnHangup").on('click', function () {
        apiObj.executeCommand('hangup');
    });
    $("#btnCustomMic").on('click', function () {
        apiObj.executeCommand('toggleAudio');
    });
    $("#btnCustomCamera").on('click', function () {
        apiObj.executeCommand('toggleVideo');
    });
    $("#btnCustomTileView").on('click', function () {
        apiObj.executeCommand('toggleTileView');
    });
    $("#btnScreenShareCustom").on('click', function () {
        apiObj.executeCommand('toggleShareScreen');
    });
    $("#btnCustomchat").on('click', function () {
        apiObj.executeCommand('toggleChat');
    });
}

function StartMeeting(roomName,dispNme){
    const domain = 'meet.jit.si';

    //var roomName = 'newRoome_' + (new Date()).getTime();
    
    const options = {
        roomName: roomName,
        width: '100%',
        height: '100%',
        parentNode: document.querySelector('#jitsi-meet-conf-container'),
        userInfo: {
            displayName: dispNme
        },
        configOverwrite:{
             disableLocalVideoFlip: false,
             disableDeepLinking: false,
              enableInsecureRoomNameWarning: false,
              enableAutomaticUrlCopy: false,
            enableClosePage: false,
            disableE2EE: false,
            doNotStoreRoom: true,
            startVideoMuted: 0,
            startWithVideoMuted: true,
            startWithAudioMuted: true,
            enableWelcomePage: false,

            prejoinPageEnabled: false,
            disableRemoteMute: true,
            notifications: [
    
        'dialog.maxUsersLimitReached', // shown when maximmum users limit has been reached
       'notify.disconnected', // shown when a participant has left
 
  
    ],

            remoteVideoMenu: {
                disableKick: true
            },
        },
        interfaceConfigOverwrite: {
            
             MOBILE_APP_PROMO: false,
            APP_NAME: 'meeting',
            filmStripOnly: false,
            SHOW_JITSI_WATERMARK: false,
             SHOW_POWERED_BY: false,
    SHOW_PROMOTIONAL_CLOSE_PAGE: false,

            SHOW_WATERMARK_FOR_GUESTS: false,
            DEFAULT_REMOTE_DISPLAY_NAME: 'New User',
            TOOLBAR_BUTTONS: []
        },
        onload: function () {
            //alert('loaded');
            $('#toolbox').show();
        }
    };
    apiObj = new JitsiMeetExternalAPI(domain, options);

    apiObj.addEventListeners({
        readyToClose: function () {
            //alert('going to close');
           $('#jitsi-meet-conf-container').empty();
            $('#toolbox').hide();
            $('#container').hide();
            $('#joinMsg').show().text('Meeting Ended');
        },
        audioMuteStatusChanged: function (data) {
            if(data.muted)
                $("#btnCustomMic").text('Unmute');
            else
                $("#btnCustomMic").text('Mute');
        },
        videoMuteStatusChanged: function (data) {
            if(data.muted)
                $("#btnCustomCamera").text('Start Cam');
            else
                $("#btnCustomCamera").text('Stop Cam');
        },
        tileViewChanged: function (data) {
            
        },
        screenSharingStatusChanged: function (data) {
            if(data.on)
                $("#btnScreenShareCustom").text('Stop SS');
            else
                $("#btnScreenShareCustom").text('Start SS');
        },
        participantJoined: function(data){
            console.log('participantJoined', data);
        },
        participantLeft: function(data){
            console.log('participantLeft', data);
        }
    });

    apiObj.executeCommand('subject', 'New Room 2');
}

