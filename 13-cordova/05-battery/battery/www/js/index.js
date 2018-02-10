var app = {
    // Application Constructor
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    // deviceready Event Handler
    //
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function() {
        this.receivedEvent('deviceready');
        window.addEventListener('batterystatus', this.onBatteryStatus, false);
        window.addEventListener('batterycritical', this.onBatteryCritical, false);
    },

    // Update DOM on a Received Event
    receivedEvent: function(id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    },

    onBatteryStatus: function(info) {
        navigator.notification.alert("Level: " + info.level + " isPlugged: " + info.isPlugged);
    },

    onBatteryCritical: function(info) {
        navigator.notification.alert("Battery Level Critical " + info.level + "%. Recharge!");
    }
};

app.initialize();
