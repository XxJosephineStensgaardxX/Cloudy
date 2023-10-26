function changeImage(imgId ,newSrc, removeClass,clickedColorDiv) {
    document.getElementById(imgId).src = newSrc;

    // Remove the "active" class from all color divs
    var colorDivs = document.querySelectorAll(removeClass);
    colorDivs.forEach(function(div) {
        div.classList.remove('active__choose-style');
    });

    // Add the "active" class to the clicked color div
    clickedColorDiv.classList.add('active__choose-style');
}