/*========================*/
/*==== Using Chartjs =====*/
/*========================*/

/*==== setup ====*/
const bgColor_mood_stats = [
    '#c96858', //angry
    '#89dbfb', //sad
    '#857570', //stress
    '#bbdda4', //lonely
    '#fbb040', //fighting
    '#ad90bf', //happy
    '#ffb0b2', //romantic
    '#fae878', //humorous
    '#51aaaf', //hopeful
    '#af9d6a' //tense
];

    // var labels_movie_stats = [
    //     'Angry',
    //     'Sad',
    //     'Stressed',
    //     'Lonely',
    //     'Fighting',
    //     'Happy',
    //     'Romantic',
    //     'Humorous',
    //     'Hopeful',
    //     'Tense'
    // ];


var HashMapColorMood = {
    'Angry'     : '#c96858',  
    'Sad'       : '#89dbfb', 
    'Stressed'  : '#857570', 
    'Lonely'    : '#bbdda4', 
    'Fighting'  : '#fbb040', 
    'Happy'     : '#ad90bf', 
    'Romantic'  : '#ffb0b2', 
    'Humorous'  : '#fae878', 
    'Hopeful'   : '#51aaaf', 
    'Tense'     : '#af9d6a'  
}

function searchValueMapFromKey(key){
    for(color in HashMapColorMood){
        if(key == color){
            return HashMapColorMood[color];
        }
    }
    return "rgb(0, 0, 0)";
}

/*===== render graphic =====*/
function resetChartMovieStats(){
    var labels_movie = [];
    var data_mood = [];
    var bgColor = [];
    var count = 1;
    var strNameMood =labels_mood[0];
    labels_movie.push(strNameMood);
    bgColor.push(searchValueMapFromKey(strNameMood));
    for(var i=1; i<labels_mood.length; i++){
        if(strNameMood != labels_mood[i]){
            strNameMood = labels_mood[i];
            bgColor.push(searchValueMapFromKey(strNameMood));
            labels_movie.push(strNameMood);
            data_mood.push(count);
            count = 1;
        }else{
            count++;
        }
    }
    data_mood.push(count);
    console.log(bgColor, data_mood);
    var data_movie_stats = {
        labels: labels_movie,
        datasets: [
            {
                label: 'My First dataset',
                backgroundColor: bgColor,
                borderColor: "rgb(255, 255, 255)",
                data: data_mood,
                hoverOffset: 4
            }
        ]
    };
    /*=== config ====*/
    var config_movie_stats = {
        type: 'pie',
        data : data_movie_stats,
        options: {
            plugins: {
                title: {
                    display: true,
                    text: 'Movie Moody Stats',
                    font: {
                        family: "Georgia, serif",
                        size: 16
                    }
                },
            }
        }
    };
    var movieChart = new Chart(document.querySelector(`#chartjs`), config_movie_stats);
}