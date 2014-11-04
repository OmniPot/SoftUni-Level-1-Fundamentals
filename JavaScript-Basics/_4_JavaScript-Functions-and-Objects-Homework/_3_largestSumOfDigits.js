function findLargestBySumOfDigits(nums) {
    if (arguments.length == 0) {
        return console.log(undefined);
    }
    var num_SumOfDigits = [];
    var bestSumOfD = 0;
    for (a in arguments) {
        //check for non-integers
        if (typeof arguments[a] != 'number' || arguments[a] % 1 != 0) {
            return console.log(undefined);
        }
        //finding best sum of digits
        var sumOfDigits = 0;
        for (var i = 1; i <= Math.abs(arguments[a]) ; i *= 10) {
            sumOfDigits += Math.floor(Math.abs(arguments[a]) / i) % 10;
        }
        if (bestSumOfD < sumOfDigits) {
            bestSumOfD = sumOfDigits;
        }
        //push into object
        num_SumOfDigits.push({num: arguments[a], SoD: sumOfDigits});
    }
    //find and print the number with best sum of Digits
    for (a in num_SumOfDigits) {
        if (num_SumOfDigits[a].SoD == bestSumOfD) {
            console.log(num_SumOfDigits[a].num);
        }
    }
}
findLargestBySumOfDigits(5,10,15,111);
findLargestBySumOfDigits(33, 44, -99, 0, 20);
findLargestBySumOfDigits('hello');
findLargestBySumOfDigits(5, 3.3);