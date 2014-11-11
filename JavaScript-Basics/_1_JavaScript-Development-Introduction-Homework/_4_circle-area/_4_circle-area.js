var r1 = 7;
var r2 = 1.5;
var r3 = 20;

document.write(
    'r1 = ' + r1 + '; area = ' + calcCircleArea(r1) + "<br>" +
    'r2 = ' + r2 + '; area = ' + calcCircleArea(r2) + "<br>" +
    'r3 = ' + r3 + '; area = ' + calcCircleArea(r3)
    );

function calcCircleArea(r) {
    return Math.PI * Math.pow(r, 2);
}