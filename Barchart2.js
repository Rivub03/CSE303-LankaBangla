var data = {
     x: ['Division A', 'Division B', 'Division C', 'Division D', 'Division E'],
     y: [35, 18, 28, 32, 26],
     marker: {
          color: 'rgba(100, 190, 102, 0.8)'
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
