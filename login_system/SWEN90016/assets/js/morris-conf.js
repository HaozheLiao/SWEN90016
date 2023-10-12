var Script = function () {

    //morris chart

    $(function () {
      // data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type
      var tax_data = [
           {"period": "2022 Q3", "Sold": 3407, "Unsold": 660},
           {"period": "2022 Q2", "Sold": 3351, "Unsold": 629},
           {"period": "2022 Q1", "Sold": 3269, "Unsold": 618},
           {"period": "2021 Q4", "Sold": 3246, "Unsold": 661},
           {"period": "2020 Q4", "Sold": 3171, "Unsold": 676},
           {"period": "2019 Q4", "Sold": 3155, "Unsold": 681},
           {"period": "2018 Q4", "Sold": 3226, "Unsold": 620},
           {"period": "2017 Q4", "Sold": 3245, "Unsold": null},
           {"period": "2016 Q4", "Sold": 3289, "Unsold": null}
      ];
      Morris.Line({
        element: 'hero-graph',
        data: tax_data,
        xkey: 'period',
        ykeys: ['Sold', 'Unsold'],
        labels: ['Sold', 'Unsold'],
        lineColors:['#4ECDC4','#ed5565']
      });

      Morris.Donut({
        element: 'hero-donut',
        data: [
          {label: 'Carpet 1', value: 25 },
          {label: 'Carpet 2', value: 40 },
          {label: 'Carpet 3', value: 25 },
          {label: 'Carpet 4', value: 10 }
        ],
          colors: ['#3498db', '#2980b9', '#34495e'],
        formatter: function (y) { return y + "%" }
      });

      Morris.Area({
        element: 'hero-area',
        data: [
          {period: '2021 Q1', Carpet1: 2666, Carpet2: null, Carpet3: 2647},
          {period: '2021 Q2', Carpet1: 2778, Carpet2: 2294, Carpet3: 2441},
          {period: '2021 Q3', Carpet1: 4912, Carpet2: 1969, Carpet3: 2501},
          {period: '2021 Q4', Carpet1: 3767, Carpet2: 3597, Carpet3: 5689},
          {period: '2022 Q1', Carpet1: 6810, Carpet2: 1914, Carpet3: 2293},
          {period: '2022 Q2', Carpet1: 5670, Carpet2: 4293, Carpet3: 1881},
          {period: '2022 Q3', Carpet1: 4820, Carpet2: 3795, Carpet3: 1588},
          {period: '2022 Q4', Carpet1: 15073, Carpet2: 5967, Carpet3: 5175},
          {period: '2023 Q1', Carpet1: 10687, Carpet2: 4460, Carpet3: 2028},
          {period: '2023 Q2', Carpet1: 8432, Carpet2: 5713, Carpet3: 1791}
        ],

          xkey: 'period',
          ykeys: ['Carpet1', 'Carpet2', 'Carpet3'],
          labels: ['Carpet1', 'Carpet2', 'Carpet3'],
          hideHover: 'auto',
          lineWidth: 1,
          pointSize: 5,
          lineColors: ['#4a8bc2', '#ff6c60', '#a9d86e'],
          fillOpacity: 0.5,
          smooth: true
      });

      Morris.Bar({
        element: 'hero-bar',
        data: [
          {device: 'Carpet', Total: 136},
          {device: 'Carpet 2', Total: 137},
          {device: 'Carpet 3', Total: 275},
          {device: 'Carpet 4', Total: 380},
          {device: 'Carpet 5', Total: 655},
          {device: 'Carpet 6', Total: 1571}
        ],
        xkey: 'device',
        ykeys: ['Total'],
        labels: ['Total'],
        barRatio: 0.4,
        xLabelAngle: 35,
        hideHover: 'auto',
        barColors: ['#ac92ec']
      });

      new Morris.Line({
        element: 'examplefirst',
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value'],
        data: [
          {year: '2018', value: 20},
          {year: '2019', value: 10},
          {year: '2020', value: 5},
          {year: '2021', value: 5},
          {year: '2022', value: 20}
        ]
      });

      $('.code-example').each(function (index, el) {
        eval($(el).text());
      });
    });

}();




