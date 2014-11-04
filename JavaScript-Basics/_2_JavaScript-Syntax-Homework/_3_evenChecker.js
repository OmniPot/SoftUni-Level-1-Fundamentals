function evenNumber(number){
    var isEven = true;
    if(number % 2 != 0){
        isEven = false;
    }
    console.log(isEven);
}
evenNumber(3);
evenNumber(127);
evenNumber(588);