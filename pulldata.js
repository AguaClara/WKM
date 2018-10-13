// <!-- <!DOCTYPE html>
// <html lang="en">
//     <head>
//         <meta charset="UTF-8">
//         <meta name="viewport" content="width=device-width, initial-scale=1.0">
//         <meta http-equiv="X-UA-Compatible" content="ie=edge">
//         <title>Google Sheet as JSON Data</title>
//     </head>

//     <body>
//         <h1>Google Sheet as JSON Data</h1>
//         <div class="output"></div>
//     </body> -->

//     <script>

// 1d_iDpCfXZtNe5N0-9NMomDHoMBvevzPei-ek4BfipDY
// https://docs.google.com/spreadsheets/d/e/2PACX-1vSUB6grUV2S4kT8XKrXUBlrzD-7rmPgnlyoNQEj-_DE__RZSCymtfjwZfC0-3p_LRVOJciCQgcnchSg/pubhtml
// let url = 'https://spreadsheets.google.com/feeds/list/1d_iDpCfXZtNe5N0-9NMomDHoMBvevzPei-ek4BfipDY/1/public/values?alt=json';

// app will not change from being an Object
    const app = function () {
    const myData = {};
    const leads = document.querySelector('.leads');
    const ras = document.querySelector('.ras');
    const stls = document.querySelector('.stls');

    function init() {
        console.log('Loaded');
        loadJSON();
    }


    function loadOutput() {
        for (let x = 0; x < myData.TeamLead.length; x++) {
            let temp = myData.TeamLead[x];
            leads.innerHTML += temp.name+ ' | '+ temp.email;
            console.log(myData.TeamLead[x]);
        }
        for (let x = 0; x < myData.RA.length; x++) {
            let temp = myData.RA[x];
            ras.innerHTML += '<h1>' + temp.name + '</h1>' + temp.subteams;
            console.log(myData.RA[x]);
        }
        for (let x = 0; x < myData.STL.length; x++) {
            let temp = myData.STL[x];
            stls.innerHTML += '<h1>' + temp.name + '</h1>' + temp.subteam;
            console.log(myData.STL[x]);
        }
        console.log(myData);
    }

    function loadJSON() {
        const id = '1d_iDpCfXZtNe5N0-9NMomDHoMBvevzPei-ek4BfipDY';
        let urls = [];
        // loop through the different sheets
        for (let x = 1; x < 4; x++) {
            urls.push('https://spreadsheets.google.com/feeds/list/' + id + '/' + x + '/public/values?alt=json');
        }
        // iterates through all values, returns promises when resolved
        // waits until all urls are resolved before moving on
        Promise.all(urls.map(url => {
            return fetch(url)
                .then(response => response.json())
                .then(data => {
                    // build out clean version of returned array
                    let tempArray = [];
                    // return the sheet name
                    let sheetName = data.feed.title.$t;
                    data.feed.entry.forEach(element => {
                        let holder = {};
                        for (let key in element) {
                            // get rid of gsx$ in the header name
                            if (key.substring(0, 3) == 'gsx') {
                                holder[key.split('$')[1]] = element[key].$t;
                            }
                        }
                        tempArray.push(holder);
                        //console.log(element);
                    })
                    console.log(tempArray);
                    //console.log(data);
                    return {
                        key: sheetName,
                        value: tempArray
                    }
                })
        })).then(data => {
            for (let i = 0; i < data.length; i++) {
                myData[data[i].key] = data[i].value;
            }
            loadOutput();
        })
        console.log(urls);
    }
    return {
        init: init
    }
}(); // self invoking function

// when document is ready(loaded), launch application
document.addEventListener('DOMContentLoaded', app.init);

//     </script>


// </html>