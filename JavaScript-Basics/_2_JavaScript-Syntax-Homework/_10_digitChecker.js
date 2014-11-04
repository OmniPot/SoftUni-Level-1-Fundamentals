function checkDigit(number) {
    var is3 = false;
    if (Math.floor(number/100)%10 == 3){
        is3 = true;
    }
    console.log(is3);
}
checkDigit(1235);
checkDigit(25368);
checkDigit(123456);