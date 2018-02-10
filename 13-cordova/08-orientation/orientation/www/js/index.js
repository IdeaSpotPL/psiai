var app = {
    initialize: function() {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    onDeviceReady: function() {
        var options = {frequency: 1000};
        var watchID = navigator.compass.watchHeading(this.onSuccess, this.onError, options);
    },

    onSuccess: function(heading) {
        var magneticHeading = document.getElementById('magneticHeading');
        var trueHeading = document.getElementById('trueHeading');
        var headingAccuracy = document.getElementById('headingAccuracy');
        var timestamp = document.getElementById('timestamp');
        magneticHeading.value = heading.magneticHeading;
        trueHeading.value = heading.trueHeading;
        headingAccuracy.value = heading.headingAccuracy;
        timestamp.value = heading.timestamp;
    },

    onError: function(compassError) {
        alert("Compass error: " + compassError.code);
    }
};

app.initialize();
