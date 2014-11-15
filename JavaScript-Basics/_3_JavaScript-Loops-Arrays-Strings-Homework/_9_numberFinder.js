function numberFinder(arr) {
    var bestCount = 1;
    var bestNum = arr[0];
    for (var i = 0; i < arr.length; i+= 1) {
        var number = arr[i];
        var numCount = 1;
        for (var j = i + 1; j < arr.length; j += 1) {
            if (arr[j] === number) {
                numCount += 1;
            }
        }
        if (bestCount < numCount) {
            bestCount = numCount;
            bestNum = number;
        }
        numCount = 1;
    }
    console.log(bestNum + ' (' + bestCount + ' times)');
}
numberFinder([4, 1, 1, 4, 2, 3, 4, 4, 1, 2, 4, 9, 3]);
numberFinder([2, 1, 1, 5, 7, 1, 2, 5, 7, 3, 87, 2, 12, 634, 123, 51, 1]);
numberFinder([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13]);
