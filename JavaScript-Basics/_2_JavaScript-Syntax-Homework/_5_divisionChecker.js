function divisionBy3(number) {
    var sumOfDigits = 0;
    for (i = 0 ; i < number.toString().length ; i += 1){
        sumOfDigits += parseInt(number.toString().substr(i,1));
    }
    if (sumOfDigits % 3 == 0){
        console.log('the number is divided by 3 without remainder');
    } else {
        console.log('the number is not divided by 3 without remainder')
    }
}
divisionBy3(12);
divisionBy3(188);
divisionBy3(591);