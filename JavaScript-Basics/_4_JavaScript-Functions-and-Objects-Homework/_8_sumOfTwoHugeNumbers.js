function sumTwoHugeNumbers(values) {
    var firstNum = values[0];
    var secondNum = values[1];
    var sum = '';
    var remain = 0;
    var longerLen = 0;
    while (firstNum.length > secondNum.length) {
        secondNum = '0' + secondNum.slice(0);
    }
    while (secondNum.length > firstNum.length) {
        firstNum = '0' + firstNum.slice(0);
    }
    for (var i = firstNum.length - 1; i >= 0; i -= 1) {
        var tempSum = parseInt(firstNum[i]) + parseInt(secondNum[i]) + remain;
        if (tempSum >= 10) {
            sum = (tempSum % 10) + sum.slice(0);
            remain = 1;
        }else{
            sum = tempSum + sum.slice(0);
            remain = 0;
        }
    }
    if (remain == 1 && Math.abs(values[0].length - values[1].length) >= 1) {
        sum = remain + sum.slice(0);
    }
    console.log(sum);
}
sumTwoHugeNumbers(['155', '65']);
sumTwoHugeNumbers(['123456789', '123456789']);
sumTwoHugeNumbers(['887987345974539', '4582796427862587']);
sumTwoHugeNumbers(['347135713985789531798031509832579382573195807', '817651358763158761358796358971685973163314321']);

