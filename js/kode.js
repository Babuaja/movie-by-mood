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

let title_fitur = document.querySelector('.title-fitur');

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
const search_btn = document.querySelector(`.search-button`);
search_btn.addEventListener('click', (e) => {
    const target_movie = document.querySelector('.search-value').value;

    movie_location.innerHTML = '';
    movie_temp = ``;

    let movie = undefined;
    title_fitur.innerHTML = `<h1 class="text-center movie-stats">Stats a Movie</h1>`

    for (m of movies) {
        if (target_movie == m.data.judul) {
            movie = m;
        }
    }

    if (movie === undefined) {
        movie_temp += `
            <div class="container">
                <div class="shadow row mb-5">
                    <div class="col-md-3">
                        <img
                            src="img/BabuAja.png"
                            class="img-fluid mx-auto d-block"
                            alt="img06"/>
                    </div>
                    <div class="col-md-5">
                        <h3>Judul film tidak ditemukan</h3>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <canvas id="myChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        `
    } else {
        let mood_list = '';
        for (mood of movie.completions[0].result) {
            mood_list += `<h4>${mood.value.labels[0]}: ${mood.value.text}</h4>`
        }

        movie_temp += `
            <div class="container">
                <div class="shadow row mb-5">
                    <div class="col-md-3">
                        <img
                            src="${movie.data.gambar}"
                            class="img-fluid mx-auto d-block targetImg"
                            alt="img06"/>
                    </div>
                    <div class="col-md-5">
                        <h3>Judul: ${movie.data.judul}</h3>
                        <h3>Synopsis: ${movie.data.synopsis}</h3>
                        <h3>Mood List:</h3>
                        ${mood_list}
                    </div>
                    <div class="col-md-4">
                        <div>
                            <canvas id="myChart4"></canvas>
                        </div>
                    </div>
                </div>
           </div>
        `
 
    }
    movie_location.innerHTML = movie_temp;
    addClickImageDetail();
});

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

        title_fitur.innerHTML = `<h1 class="text-center movie-stats">Film Dengan Mood ${e.currentTarget.innerText}</h1>`
        movie_location.innerHTML = '';
        movie_temp = ``;
        movie_temp += `<h2 class="pt-3 text-center"></h2>`
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

// tombol descending ascending 
const compare = function(a, b) {
    if (a.data.judul > b.data.judul) {
        return 1;
    }

    if (a.data.judul < b.data.judul) {
        return -1;
    }

    return 0;
}

const sort_btn = document.querySelectorAll('.sort-button');
for (sort of sort_btn) {
    sort.addEventListener('click', (e) => {
        filtered_movie.sort(compare);

        if (e.currentTarget.innerText === 'Descending') {
            filtered_movie.reverse();
        }

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