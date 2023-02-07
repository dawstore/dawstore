"use strict";
  
  var range = document.getElementById('range');
        noUiSlider.create(range, {
            range: {
                'min': 0,
                'max': 2000
            },
            step: 5,
            start: [100, 1000],
            margin: 300,
            connect: true,
            direction: 'ltr',
            orientation: 'horizontal',
            behaviour: 'tap-drag',
            tooltips: true,
            format: {
              to: function ( value ) {
                return '$' + value;
              },
              from: function ( value ) {
                return value.replace('', '');
              }
            }
        });
    