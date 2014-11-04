function arrayBuilder() {
    var arr = Array(20);
    for (var i = 0 ; i < 20 ; i++){
        arr[i] = i*5;
    }
    console.log(arr);
}
arrayBuilder();
