document.addEventListener("DOMContentLoaded", function(event) {

    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
    // Your code to run since DOM is loaded and ready
});

//get modal
var modal = document.getElementById("myModal");
//get body for overflow (scroll) disable
var body = document.getElementById("body-pd");
//get image
var img = document.getElementsByClassName('targetImg');
//get close
var fclose = document.getElementById("close");
//get tittle
var ftittle = document.getElementById("ftitle");
//get imgModal
var fImg = document.getElementById('fImg');
//get details
var details = document.getElementById("fdetails");
//get button close
var buttonClose=document.getElementById("bclose");
//when image onclick
console.log(img);
img[0].onclick = function(){
    modal.style.display = "block";
    ftittle.innerHTML = 'Tittle of The Movie';
    fImg.src = this.src;
    details.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum metus eu leo pretium, a sagittis sem tempus. Quisque gravida est eu nibh dapibus cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas sed suscipit lectus. Praesent varius imperdiet felis, et lacinia lectus porttitor eu. Nullam bibendum orci ut vehicula auctor. Nulla blandit scelerisque tortor, non ultrices urna efficitur quis. In accumsan erat dapibus libero scelerisque gravida. Nunc tempor dui ut convallis ornare.<br><br>tahun : 1xxx<br>genre: xxx<br>artis: a, b, c<br>dsb';
    body.style.overflow = "hidden";
}

img[1].onclick = function(){
    modal.style.display = "block";
    ftittle.innerHTML = 'Tittle of The Movie';
    fImg.src = this.src;
    details.innerHTML = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin bibendum metus eu leo pretium, a sagittis sem tempus. Quisque gravida est eu nibh dapibus cursus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas sed suscipit lectus. Praesent varius imperdiet felis, et lacinia lectus porttitor eu. Nullam bibendum orci ut vehicula auctor. Nulla blandit scelerisque tortor, non ultrices urna efficitur quis. In accumsan erat dapibus libero scelerisque gravida. Nunc tempor dui ut convallis ornare.<br><br>tahun : 1xxx<br>genre: xxx<br>artis: a, b, c<br>dsb';
    body.style.overflow = "hidden";
}

buttonClose.onclick = function(){
    modal.style.display = 'none';
    body.style.overflow = 'visible';
    console.log("masujk sad");
}
// // Get the modal
// var modal = document.getElementById('myModal');
        
// // Get the image and insert it inside the modal - use its "alt" text as a caption
// var img = document.getElementById('myImg');
// var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
// img.onclick = function(){
//   modal.style.display = "block";
//   modalImg.src = this.src;
//   captionText.innerHTML = this.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // When the user clicks on <span> (x), close the modal
// span.onclick = function() { 
//   modal.style.display = "none";
// }