function findMaxSequence(arr) {
    var sequences = [];
    var bestlen = 1;

    function generateSequences(array) {
        var currentSeq = [];
        for (var i = 1; i <= array.length; i++) {
            if (array[i - 1] === array[i]) {
                currentSeq.push(array[i - 1]);
            } else {
                currentSeq.push(array[i - 1]);
                sequences.push(currentSeq);
                currentSeq = [];
            }
        }
        return sequences;
    }

    function findBestLen(arrays) {
        for (var i = 0; i < arrays.length; i++) {
            if (arrays[i].length > bestlen) {
                bestlen = arrays[i].length;
            }
        }
        return bestlen;
    }

    function printBestSequence(arr, length) {
        for (var i = arr.length - 1; i >= 0; i--) {
            if (arr[i].length == length) {
                console.log(arr[i]);
                return;
            }
        }
    }

    printBestSequence(generateSequences(arr), findBestLen(sequences));

}
findMaxSequence([2, 1, 1, 2, 3, 3, 2, 2, 2, 1]);
findMaxSequence(['happy']);
findMaxSequence([2, 'qwe', 'qwe', 3, 3, '3']);