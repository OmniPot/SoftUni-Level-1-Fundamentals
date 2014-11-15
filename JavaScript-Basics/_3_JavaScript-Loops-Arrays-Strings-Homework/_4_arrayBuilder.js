function arrayBuilder() {
    var arr = Array(20);
    var result = "";
    for (var i = 0; i <= 20; i++) {
        arr[i] = i * 5;
        result += arr[i] + " ";
    }
    console.log(result);
}
arrayBuilder();
