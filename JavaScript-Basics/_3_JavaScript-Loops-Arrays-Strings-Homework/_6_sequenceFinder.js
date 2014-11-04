function findMaxSequence(arr) {
    var sequences = [];
    var bestlen = 1;
    function generateSequences(array) {
        var currentSeq = [];
        for (var i = 1; i <= array.length; i++) {
            if (array[i-1] === array[i]){
                currentSeq.push(array[i-1]);
            }else{
                currentSeq.push(array[i-1]);
                sequences.push(currentSeq);
                currentSeq = [];
            }
        }
    }
    function findBestLen(arrays) {
        for (var i = 0; i < arrays.length ; i++){
            if (arrays[i].length > bestlen){
                bestlen = arrays[i].length;
            }
        }
        return bestlen;
    }
    generateSequences(arr);
    findBestLen(sequences);

    for (var i = sequences.length-1; i >= 0; i--){
        if (sequences[i].length == bestlen){
            console.log(sequences[i]);
            return;
        }
    }
}
findMaxSequence([2, 1, 1, 2, 3, 3, 2, 2, 2, 1]);
findMaxSequence(['happy']);
findMaxSequence([2, 'qwe', 'qwe', 3, 3, '3']);