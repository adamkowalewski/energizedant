/* 
 * Project: EnergizedAnt
 */

var wind;
var solar;
var geo;

function generator(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

wind = generator(10, 130);
solar = generator(50, 100);
geo = generator(30, 90);


//--------------------------------------------
// left chart

var ld1 = [[2, 88]];
var ld2 = [[4, wind]];
var ld3 = [[6, solar]];
var ld4 = [[8, geo]];

var ld = [
    {label: "Average frige A++", data: ld1},
    {label: "Wind", data: ld2},
    {label: "Solar", data: ld3},
    {label: "Geo", data: ld4}
];

var lo = {
    bars: {show: true},
    points: {show: false},
    xaxis: {
        min: 0,
        max: 10
    },
    yaxis: {
        min: 0,
        max: 150
    }

};

var lc = $("#chartl");

var chart_l = $.plot(lc, ld, lo);


//--------------------------------------------
// Right chart

var rd = [
    {label: "Own solar", data: solar},
    {label: "Own wind", data: wind},
    {label: "Own geo", data: geo},
    {label: "Conventional", data: 60}
];

var ro = {
    series: {
        pie: {
            innerRadius: 0.3,
            show: true

        },
        grid: {
            hoverable: true,
            clickable: true
        }
    }
};

var rc = $("#chartr");

var chart_r = $.plot(rc, rd, ro);

