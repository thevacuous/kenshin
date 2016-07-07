var images = ['bg.jpg', 'intro-bg.jpg', 'logo.png', 'intro.png'];

function preloadImages(imageArray, index) {
    index = index || 0;
    if (imageArray && imageArray.length > index) {
        var img = new Image ();
        img.onload = function() {
            preloadImages(imageArray, index + 1);
        }
        img.src = 'img/' + images[index];
        var percentage = (100/imageArray.length) * (index + 1);
        $('#overlay #preload #bar').width(percentage + '%');
    }
    else{
        $('#overlay').remove();
    }
}

preloadImages(images);
