var createSlider = function() {
    var images = ["bike1.jpg", "bike2.jpg", "bike3.jpg", "swim1.jpg", "swim2.jpg", "swim3.jpg", "run1.jpg", "run2.jpg", "run3.jpg"];
    var currentImage = 0;
    
    function switchImage(imageTag, path, direction) {
        if(direction === "forward") {
            currentImage++;
        } else {
            currentImage--;
        }
        if(currentImage < 0) {
            if(Math.abs(currentImage % images.length) === 0) {
                // console.log("mod: " + currentImage % images.length);
                imageTag.src = path + images[currentImage % images.length];
            } else {
                // console.log("mod: " + ((currentImage % images.length) + images.length));
                imageTag.src = path + images[((currentImage % images.length) + images.length)];
            }
        } else {
            // console.log("mod: " + currentImage % images.length);
            imageTag.src = path + images[currentImage % images.length];
        }
    }
    
    return function() {
        var leftBtn = document.getElementsByClassName("left_slide_btn")[0]; 
        var rightBtn = document.getElementsByClassName("right_slide_btn")[0]; 
        var imageTag = document.getElementById("slideshow");
        var imagePath = "images/event/";
        // Make the slideshow change images automatically every 5 seconds
        var timer = setInterval(function() {
            switchImage(imageTag, imagePath, "forward");
        }, 5000);
        
        imageTag.src = imagePath + images[currentImage];
        leftBtn.addEventListener("click", function() {
            clearInterval(timer);
// Would start slideshow again
//            timer = setInterval(function() {
//                switchImage(imageTag, imagePath, "forward");
//            }, 5000);
            switchImage(imageTag, imagePath, "back");
        });
        rightBtn.addEventListener("click", function() {
            clearInterval(timer);
// Would start slideshow again
//            timer = setInterval(function() {
//                switchImage(imageTag, imagePath, "forward");
//            }, 5000);
            switchImage(imageTag, imagePath, "forward");
        });
    }
}();

window.addEventListener("load", function() {
    createSlider();
});