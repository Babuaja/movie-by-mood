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
// var img = document.getElementsByClassName('targetImg');
//get close
var fclose = document.getElementById("close");
//get tittle
var ftittle = document.getElementById("ftitle");
//get imgModal
var fImg = document.getElementById('fImg');
//get details
var details = document.getElementById("fdetails");
var year = document.getElementById("fyear");
var rating = document.getElementById("frating");
var duration = document.getElementById("fduration");
var directors = document.getElementById("fdirectors");
var stars = document.getElementById("fstars");

//get button close
var buttonClose=document.getElementById("bclose");

//hide section login
var flogin = document.getElementById("Graph");

// fungsi klik image detail
const addClickImageDetail = function() {
    const img = document.querySelectorAll('.targetImg');
    for (const img_movie of img) {
        img_movie.addEventListener('click', (e) => {
            let this_movie;
        
            // search img source that match
            for (movie of movies) {
                if ( e.currentTarget.src === movie.data.gambar) {
                    this_movie = movie.data;
                }
            }
        
            modal.style.display = "block";
            ftittle.innerHTML = this_movie.judul;
            fImg.src = this_movie.gambar;
            details.innerHTML = this_movie.synopsis;
            year.innerHTML = this_movie.tahun;
            rating.innerHTML = this_movie.rating;
            duration.innerHTML = this_movie.durasi;
            directors.innerHTML = this_movie.director;
            stars.innerHTML = this_movie.stars;
            body.style.overflow = "hidden";
        
        });
    }
    
    buttonClose.onclick = function(){
        modal.style.display = 'none';
        body.style.overflow = 'visible';
        console.log("masujk sad");
    }
}

// show all film
let movie_location = document.querySelector('#data-film');
let movie_temp = ``;


let count_movie = 0;
for (let i=0; i<25; i++) {
    // baris
    movie_temp += `<div class="row mb-2">`;

    for (let j=0; j<4; j++) {
        // kolom
        movie_temp += `
            <div class="col-sm">
                <img
                    src="${movies[count_movie].data.gambar}"
                    class="img-fluid mx-auto d-block targetImg lozad"
                    />
            </div>`

        count_movie++;
    } 

    movie_temp += `</div>`;
}

movie_location.innerHTML += movie_temp;

// tombol search
// const search_btn = document.querySelector(`.button-sach`)

// tombol mood
const mood_btn = document.querySelectorAll(`.mood-button`);
let filtered_movie = [];
for (mood of mood_btn) {
    mood.addEventListener('click', (e) => {
        filtered_movie = movies.filter( (movie) => {
            for (value of movie.completions[0].result) {
                if (e.currentTarget.innerText == value.value.labels[0]) {
                    return true;
                }
            }
        });

        movie_location.innerHTML = '';
        movie_temp = ``;

        let count_movie = 0;
        for (let i=0; count_movie < filtered_movie.length; i++) {
            // baris
            movie_temp += `<div class="row mb-2">`;
        
            for (let j=0; (j<4) && count_movie < filtered_movie.length; j++) {
                // kolom
                movie_temp += `
                    <div class="col-sm">
                        <img
                            src="${filtered_movie[count_movie].data.gambar}"
                            class="img-fluid mx-auto d-block targetImg lozad"
                            />
                    </div>
                `
                count_movie++;
            } 
            movie_temp += `</div>`;
        }
        movie_location.innerHTML += movie_temp;

        addClickImageDetail();
    });

}

addClickImageDetail();