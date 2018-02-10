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

        var options = {
            frequency: 500
        };

        var watchID = navigator.accelerometer.watchAcceleration(this.onSuccess, this.onFail, options);
    },

    onSuccess: function(acceleration) {
        var x = document.getElementById('x');
        var y = document.getElementById('y');
        var z = document.getElementById('z');
        var t = document.getElementById('t');

        x.value = parseInt(acceleration.x);
        y.value = parseInt(acceleration.y);
        z.value = parseInt(acceleration.z);
        t.value = parseInt(acceleration.timestamp);
    },

    onError: function() {
        alert('error!');
    }
};

app.initialize();
