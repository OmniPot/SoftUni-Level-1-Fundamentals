function printNumbers (n) {
    var dividables = [];
    for (var i = 1; i <= n; i++) {
        if (i % 4 != 0 && i % 5 != 0) {
            dividables.push(i);
        }
    }
    if(dividables.length == 0) {
        console.log('no');
    }else{
        console.log(dividables.toString())
    }
}
printNumbers(20);
printNumbers(-5);
printNumbers(13);