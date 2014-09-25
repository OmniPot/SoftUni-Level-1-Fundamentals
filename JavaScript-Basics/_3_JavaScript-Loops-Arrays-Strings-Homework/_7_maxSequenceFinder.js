function maxSequenceFinder(arr) {
    var sequences = [];
    var bestlen = 1;
    function generateSequences(array) {
        var currentSeq = [];
        for (var i = 1; i <= array.length; i++) {
            if (array[i-1] < array[i]){
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
    if (bestlen == 1){
        console.log('no');
        return;
    } else {
        for (var i = 0; i < sequences.length; i++){
            if (sequences[i].length == bestlen){
                console.log(sequences[i]);
                return;
            }
        }
    }
}
maxSequenceFinder([3, 2, 3, 4, 2, 2, 4]	);
maxSequenceFinder([3, 5, 4, 6, 1, 2, 3, 6, 10, 32]);
maxSequenceFinder([3, 2, 1]);
