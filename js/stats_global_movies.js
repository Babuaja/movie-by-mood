/*========================*/
/*==== Using Chartjs =====*/
/*========================*/


function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min) ) + min;
  }
function generateRandomColor(){
    var color = [];
    for(var i =0; i < labels_genre.length ;i++){
        var red =getRndInteger(0, 255) , green = getRndInteger(0, 255), blue=getRndInteger(0, 255);
        var strColor = 'rgb(' + red + ', ' + green + ', ' + blue +')';
        color.push(strColor);
    }
    return color;
}
var GenreMovies = movies.map(function(e){
    return e.data.genre;
});
var MoodMovies = movies.map(function(e){
    return e.completions.map(function(r){
        return r.result;
    })
});
console.log(MoodMovies);
/*==== setup ====*/
const labels_genre = [
    'Action',
    'Adventure',
    'Animation',
    'Biography',
    'Comedy',
    'Crime',
    'Drama',
    'Family',
    'Fantasy',
    'Film-Noir',
    'History',
    'Horror',
    'Music',
    'Musical',
    'Mystery',
    'Romance',
    'Sci-Fi',
    'Sport',
    'Thriller',
    'War',
    'Western'
];
const labels_movie_stats = [
    'Angry',
    'Sad',
    'Stressed',
    'Lonely',
    'Fighting',
    'Happy',
    'Romantic',
    'Humorous',
    'Hopeful',
    'Tense'
];
// var HashMapMood = (function(){
//     var tempHashMapMood = [];
//     var totalMood;
//     for()
// })
var HashMapGenre = (function(){
    var tempHashMapGenre = [];
    var totalGenre;
    for(var i =0 ; i < labels_genre.length; i++){
        totalGenre = 0;
        for(var j = 0; j<GenreMovies.length; j++){
            for(var k =0; k<GenreMovies[j].length; k++){
                if(labels_genre[i] == GenreMovies[j][k]){
                    totalGenre++;
                }
            }
        }
        tempHashMapGenre.push({'Genre': labels_genre[i], 'Value': totalGenre})
    }   
    return tempHashMapGenre;
}());
var valueOfEachGenre = HashMapGenre.map(function(e){
    return e.Value;
});

//data
const data_genre = {
    labels: labels_genre,
    datasets: [
        {
            label: 'Genre Chart Movies',
            backgroundColor: generateRandomColor(),
            borderColor: 'rgb(255, 255, 255)',
            data: valueOfEachGenre,
            hoverOffset: 4
        }
    ]
};
//data
const data_mood_movies = {
    labels: labels_movie_stats,
    datasets: [
        {
            label: 'Mood Movies Chart',
            backgroundColor: bgColor_mood_stats,
            borderColor: 'rgb(255, 255, 255)',
            data: [
                3,
                10,
                5,
                2,
                20,
                30,
                45,
                1,
                15,
                21
            ],
            hoverOffset: 4
        }
    ]
};
/*=== config ====*/
const config_genre_movies_chart = {
    type: 'pie',
    data: data_genre,
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Genre Movies Chart',
                font: {
                    family: "Georgia, serif",
                    size: 16
                }
            },
        }
    }
};

const config_mood_movies_chart = {
    type: 'pie',
    data: data_mood_movies,
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Mood Movies Chart',
                font: {
                    family: "Georgia, serif",
                    size: 16
                }
            },
        }
    }
}

/*===== render graphic =====*/
var genreMoviesChart = new Chart(document.getElementById('genre-movies-chart'), config_genre_movies_chart);
var moodMovisChart = new Chart(document.getElementById('mood-movies-chart'), config_mood_movies_chart);