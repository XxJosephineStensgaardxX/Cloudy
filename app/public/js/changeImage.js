function changeImage(imgId ,newSrc, removeClass,clickedColor) {
    document.getElementById(imgId).src = newSrc;

    // Remove the "active" class from all colors
    var colors = document.querySelectorAll(removeClass);
    colors.forEach(function(lable) {
        lable.classList.remove('active__choose-style');
    });

    // Add the "active" class to the clicked color 
    clickedColor.classList.add('active__choose-style');
}