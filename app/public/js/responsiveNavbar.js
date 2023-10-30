let dropdown = document.getElementById('hamburger-bttn');


let dropdownbox = document.getElementById('mobile-navbar');
console.log(dropdownbox);

dropdown.addEventListener('click', function(){
    if( dropdownbox.style.display == "none"){
        
    dropdownbox.style.display = "block";
    }
    else{
        dropdownbox.style.display = "none";
    }
});