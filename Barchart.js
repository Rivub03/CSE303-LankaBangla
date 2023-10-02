var data = {
     x: ['Dhaka', 'Sylhet', 'Chittagong', 'Rajshahi', 'Rangpur'],
     y: [35, 18, 28, 32, 26],
     marker: {
          color: 'rgba(20, 150, 140, 0.8)'
     },
     type: 'bar'
};

var layout = {
     title: 'Number of BO A/C holders per division',
     xaxis: {
          title: 'Division'
     },
     yaxis: {
          title: 'Number of A/C holders'
     }
};

Plotly.newPlot('barchart1', [data], layout);
