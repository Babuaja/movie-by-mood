//inisial awal section for hide
const sec_choose_mood = document.querySelector(`#choose-mood`);
const sec_popular = document.querySelector(`#popular`);
const sec_file = document.querySelector(`#file`);
const sec_user = document.querySelector(`#user`);
const sec_stats = document.querySelector(`#stats`);
sec_file.style.display = "none";
sec_user.style.display = "none";
sec_stats.style.display = "none";

//inisial buat modal
var modal = document.getElementById("myModal");
//get body for overflow (scroll) disable
var body = document.getElementById("body-pd");
//get image var img = document.getElementsByClassName('targetImg'); get close
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
//get image to modal
var img = document.querySelectorAll('.targetImg');
//get button close
var buttonClose = document.getElementById("bclose");
//button mood, default no active
var btn_mood = document.getElementById("btn_mood");
btn_mood.style.display = "none";
//button sort
var btn_sort = document.getElementById("btn_sort");
btn_sort.style.display ="none";

//buat navbar:
document.addEventListener("DOMContentLoaded", function (event) {
    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = document.getElementById(toggleId),
            nav = document.getElementById(navId),
            bodypd = document.getElementById(bodyId),
            headerpd = document.getElementById(headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.addEventListener('click', () => {
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
    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))
    // Your code to run since DOM is loaded and ready
});

//tittle mood
let title_fitur_mood = document.querySelector('.title-mood');

// fungsi klik image detail
const addClickImageDetail = function () {
    img = document.querySelectorAll('.targetImg');
    for (const img_movie of img) {
        img_movie.addEventListener('click', (e) => {
            let this_movie;

            // search img source that match
            for (movie of movies) {
                if (e.currentTarget.src === movie.data.gambar) {
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

    buttonClose.onclick = function () {
        modal.style.display = 'none';
        body.style.overflow = 'visible';

    }
}
//section index/dashboard
const nav_dashboard = document.querySelector(`#nav_dashboard`);
nav_dashboard.addEventListener('click', (e)=>{
    //hide all section except file section
    sec_choose_mood.style.display = "block";
    sec_popular.style.display = "block";
    sec_stats.style.display = "none";
    sec_user.style.display = "none";
    sec_file.style.display = "none";
    btn_mood.style.display = "none";
    btn_sort.style.display = "none";
});

// Section files
let movie_location = document.querySelector('#data-film');
const nav_files = document.querySelector(`#nav_file`);
let count_movie = 0;
let movie_temp = ``;
const load_movie = function() {
    movie_temp = ``;
    for (let i=0; i < 3 && count_movie < movies.length; i++) {
        // baris
        movie_temp += `<div class="row mb-2">`;

        for (let j=0; j<4 && count_movie < movies.length; j++) {
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
    addClickImageDetail();
}

nav_files.addEventListener('click', (e) => {

    if(count_movie < 12){
        load_movie();
    }
   
    //hide all section except file section
    sec_choose_mood.style.display = "none";
    sec_popular.style.display = "none";
    sec_stats.style.display = "none";
    sec_user.style.display = "none";
    sec_file.style.display = "block";
    btn_mood.style.display = "block";
    btn_sort.style.display = "block";
    if(count_movie < 12)
        movie_location.innerHTML += movie_temp;
    addClickImageDetail();
});

const infinite_movie = document.querySelector(`.infinite-scrolls`);

infinite_movie.addEventListener('click', function() {
    load_movie();
});


//section user
const nav_user = document.querySelector(`#nav_user`);
nav_user.addEventListener('click', (e)=>{
    sec_choose_mood.style.display = "none";
    sec_popular.style.display = "none";
    sec_stats.style.display = "none";
    sec_user.style.display = "block";
    sec_file.style.display = "none";
    btn_mood.style.display = "none";
    btn_sort.style.display = "none";
});

//section stats
const nav_stats = document.querySelector(`#nav_stats`);
nav_stats.addEventListener('click', (e)=>{
    sec_choose_mood.style.display = "none";
    sec_popular.style.display = "none";
    sec_stats.style.display = "block";
    sec_user.style.display = "none";
    sec_file.style.display = "none";
    btn_mood.style.display = "none";
    btn_sort.style.display = "none";
})

// tombol search
var labels_mood = [];
const search_btn = document.querySelector(`.search-button`);
const stats_id = document.querySelector(`#data-stats`);
search_btn.addEventListener('click', (e) => {
    const target_movie = document.querySelector('.search-value').value;
    const linkColor = document.querySelector(`#nav_stats`);
    const allLinkColor = document.querySelectorAll('.nav_link');
    allLinkColor.forEach(l => l.classList.remove('active'));
    stats_id.innerHTML = '';
    movie_temp = ``;
    labels_mood = [];

    let movie = undefined;

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
                            src="img/BigBabuAja.png"
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
            mood_list += `<p>${mood.value.labels[0]}: ${mood.value.text}</p>`;
            labels_mood.push(mood.value.labels[0]);   
        }
        
        movie_temp += `
                <h1 class="text-center">Stats a Movie</h1>
                <div class="shadow row mb-5">
                    <div class="col-md-3">
                        <img
                            src="${movie.data.gambar}"
                            class="img-fluid mx-auto d-block targetImg"
                            alt="img06"/>
                    </div>
                    <div class="col-md-5">
                        <h3>${movie.data.judul}</h3>
                        <p>${movie.data.synopsis}</p>
                        <p>Mood List:</p>
                        ${mood_list}
                    </div>
                    <div class="col-md-4">
                        <div>
                            <canvas id="chartjs"></canvas>
                        </div>
                    </div>
                </div>
            `;
    }
    stats_id.innerHTML = movie_temp;
    sec_choose_mood.style.display = "none";
    sec_popular.style.display = "none";
    sec_stats.style.display = "block";
    sec_user.style.display = "none";
    sec_file.style.display = "none";
    btn_mood.style.display = "none";
    btn_sort.style.display = "none";
    linkColor.classList.add('active');
    resetChartMovieStats();
    addClickImageDetail();
});

// tombol mood
const mood_btn = document.querySelectorAll(`.mood-button`);
let filtered_movie = [];
for (mood of mood_btn) {
    mood.addEventListener('click', (e) => {
        movie_location.innerHTML = '';
        filtered_movie = movies.filter((movie) => {
            for (value of movie.completions[0].result) {
                if (e.currentTarget.innerText == value.value.labels[0]) {
                    return true;
                }
            }
        });

        title_fitur_mood.innerHTML = `<h1 class="text-center movie-stats">Movies with Mood ${e.currentTarget.innerText}</h1>`
        
        movie_temp = ``;

        let count_movie = 0;
        for (let i = 0; count_movie < filtered_movie.length; i++) {
            // baris
            movie_temp += `<div class="row mb-2">`;

            for (let j = 0; (j < 4) && count_movie < filtered_movie.length; j++) {
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
const compare = function (a, b) {
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
        for (let i = 0; count_movie < filtered_movie.length; i++) {
            // baris
            movie_temp += `<div class="row mb-2">`;

            for (let j = 0; (j < 4) && count_movie < filtered_movie.length; j++) {
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