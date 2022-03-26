let labels1 = ['Wild Elephants Arrival', 'Wild Animals Arrival', 'Elephants fence damages', 'Crop Damages', 'Illigal Happening', 'Wildanimal is in danger'];

let colors1 = ['#49A9EA', '#36CAAB', '#884EA0', '#A6ACAF', '#0E6251'];

// let myChart1 = document.getElementById("myChart1").getContext('2d');

let mychart1 = new Chart(myChart1, {
    type: 'doughnut',
    data: {
        labels: labels1,
        datasets: [{
            data: data1,
            backgroundColor: colors1
        }]
    },
    options: {
        title: {
            text: "",
            display: true
        }
    }
});

let labels3 = ['12.00 am', '01.00 am', '02.00 am', '03.00 am', '04.00 am', '05.00 am', '06.00 am', '07.00 am', '08.00 am', '09.00 am', '10.00 am', '11.00 am', '12.00 pm', '01.00 pm', '02.00 pm', '03.00 pm', '04.00 pm', '05.00 pm', '06.00 pm', '07.00 pm', '08.00 pm', '09.00 pm', '10.00 pm', '11.00 pm', ];

let colors3 = ['#49A9EA', '#36CAAB', '#884EA0', '#A6ACAF', '#0E6251'];



let mychart3 = new Chart(myChart3, {
    type: 'line',
    data: {
        labels: labels3,
        datasets: [{
            label: 'Hourly Update',
            data: data3,

            fill: false,
            borderColor: 'red',

        }]
    },
    // options: {
    //     title: {
    //         text:"",
    //         display: true 
    //     }
    // }
});
let labels4 = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Octomber', 'November', 'December'];

let colors4 = ['#49A9EA', '#36CAAB', '#884EA0', '#A6ACAF', '#0E6251'];

// let myChart1 = document.getElementById("myChart1").getContext('2d');

let mychart4 = new Chart(myChart4, {
    type: 'bar',
    data: {
        labels: labels4,
        datasets: [{
            // label: 'Hourly Update',
            data: data4,
            backgroundColor: colors4
                //fill: false,
                //   borderColor: 'red',

        }]
    },
    options: {
        title: {
            text: "",
            display: true
        }
    }
});


// let labels = Utils.hours({count: 24});
// const data = {
//   labels: labels,
//   datasets: [{
//     label: 'My First Dataset',
//     data: [65, 59, 80, 81, 56, 55, 40,80,70,90,7,9,8,6,5,1,2,3,4,7,6,5,4,3],
//     fill: false,
//     borderColor: 'rgb(75, 192, 192)',
//     tension: 0.1
//   }]
// };