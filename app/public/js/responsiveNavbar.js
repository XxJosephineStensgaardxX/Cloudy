let dropdown = document.getElementById('hamburger-bttn');


let dropdownbox = document.querySelector('.header__list');
let dropdownwrapper = document.querySelector('.header__inner');
console.log(dropdownbox);

dropdown.addEventListener('click', function(){
    // if( dropdownbox.style.display == "none"){
        
    // dropdownbox.style.display = "block";
    // }
    // else{
    //     dropdownbox.style.display = "none";
    // }
    dropdownwrapper.parentElement.appendChild(dropdownbox)
    dropdownbox.classList.toggle("active")

    if(dropdownbox.classList.contains("active")) {
        document.body.style.overflow = "hidden"
    } else {
        document.body.style.overflow = null
    }
});