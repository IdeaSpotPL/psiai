var app = {
    pictureSource: null,
    destinationType: null,

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
    },

    // Update DOM on a Received Event
    receivedEvent: function(id) {
    },

    // take picture using device camera and retrieve image as base64-encoded string
    capturePhoto: function() {
        navigator.camera.getPicture(this.onPhotoDataSuccess, this.onFail, {
            quality: 50,
            encodingType: Camera.EncodingType.JPEG,
            destinationType: Camera.DestinationType.DATA_URL //base64 encoded data
        });
    },

    // get image file location from specified source
    getPhoto: function(source) {
        navigator.camera.getPicture(this.onPhotoURISuccess, this.onFail, {
            quality: 50,
            destinationType: Camera.DestinationType.FILE_URI, //file URI
            sourceType: source //where to get photo from
        });
    },

    onPhotoDataSuccess: function(imageData) {
        console.log(imageData); //show base64 data in console

        // get image handle
        var cameraImage = document.getElementById('cameraImage');

        // put the base64 image into the src of the img tag
        cameraImage.src = "data:image/jpeg;base64," + imageData;
    },

    onPhotoURISuccess: function(imageURI) {
        console.log(imageURI); //show image URI

        var galleryImage = document.getElementById('galleryImage');
        galleryImage.src = imageURI;
    },

    onFail: function(message) {
        alert("Failure: " + message);
    }
};

app.initialize();
