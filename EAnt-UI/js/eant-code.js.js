/* 
 * Project: EnergizedAnt
 */

//--------------------------------------------
// left chart

var ld1 = [[2, 88]];
var ld2 = [[4, 80]];
var ld3 = [[6, 50]];
var ld4 = [[8, 42]];

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
        max: 100
    }



};

var lc = $("#chartl");

var chart_l = $.plot(lc, ld, lo);


//--------------------------------------------
// Right chart

var rd = [
    {label: "Solar", data: 10},
    {label: "Wind", data: 30},
    {label: "Geothermal", data: 100},
    {label: "Series6", data: 60}
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

