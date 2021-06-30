/*========================*/
/*==== Using Chartjs =====*/
/*========================*/

/*==== setup ====*/
const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July'
];
//data
const data = {
    labels: labels,
    datasets: [
        {
            label: 'My First dataset',
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(54, 162, 235)',
                'rgb(255, 205, 86)',
                'rgb(205, 105, 86)',
                'rgb(155, 105, 6)',
                'rgb(255, 255, 86)'
              ],
            borderColor: 'rgb(255, 99, 132)',
            data: [
                0,
                10,
                5,
                2,
                20,
                30,
                45
            ],
            hoverOffset: 4
        }
    ]
};
/*=== config ====*/
const config = {
    type: 'pie',
    data,
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Custom Chart Title',
                font: {
                    family: "Georgia, serif",
                    size: 16
                }
            },
        }
    }
};

/*===== render graphic =====*/
var myChartExmaple=[];
var idchart = '';
for(var i = 0; i < 4; i++){
    idchart = 'myChart';
    idchart += i+1;
    console.log(idchart);
    myChartExmaple[i] = new Chart(
        document.getElementById(idchart),
        config
    );
}