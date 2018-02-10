var app = {
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        // navigator.geolocation.getCurrentPosition(this.onSuccess, this.onError);

        var options = {
            enableHighAccuracy: true, // needs to use GPS or network is fine?
            timeout: 5000, // max time to wait before PositionError.TIMEOUT
            maximumAge: 1000 // accept cached position with age no greater than ... ms
        };
        var watchId = navigator.geolocation.watchPosition(this.onSuccess, this.onError, options);
    },

    onSuccess: function(position) {
        var latitude = document.getElementById('latitude');
        var longitude = document.getElementById('longitude');
        var altitude = document.getElementById('altitude');
        var accuracy = document.getElementById('accuracy');
        var altitudeAccuracy = document.getElementById('altitudeAccuracy');
        var heading = document.getElementById('heading');
        var speed = document.getElementById('speed');
        var timestamp = document.getElementById('timestamp');

        latitude.value = position.coords.latitude;
        longitude.value = position.coords.longitude;
        altitude.value = position.coords.altitude;
        accuracy.value = position.coords.accuracy;
        altitudeAccuracy.value = position.coords.altitudeAccuracy;
        heading.value = position.coords.heading;
        speed.value = position.coords.speed;
        timestamp.value = position.timestamp;
    },

    onError: function(error) {
        alert("Error. Code: " + error.code + "; Message: " + error.message);
    }
};

app.initialize();
