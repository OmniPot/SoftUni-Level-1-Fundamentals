function reverseString(str) {
    var reversedStr = '';
    for (var i = str.length-1; i >= 0; i-=1) {
        reversedStr += str.substr(i,1);
    }
    console.log(reversedStr);
    return reversedStr;
}
reverseString('sample');
reverseString('softUni');
reverseString('java script');