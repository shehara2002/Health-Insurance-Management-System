let canvasElement = document.querySelector('#policy-piechart');

function displayChart(policytypes, policynumber){

    let canvasElement = document.getElementById('policy-piechart').getContext('2d');

    const policy_piechart = new Chart(canvasElement, {
        type: 'pie',  
        data: {
            labels: policytypes,  
            datasets: [{
                label: 'Policy Types',
                data: policynumber,  
                backgroundColor: ['red','green','blue','yellow'],
                borderColor: ['red','green','blue','yellow'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: false
        }
    });
}