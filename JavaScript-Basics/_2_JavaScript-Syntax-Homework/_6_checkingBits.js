function bitChecker(number) {
    var isOne = false;
    if (number >> 3 & 1 == 1)
    {
        isOne = true;
    }
    console.log(isOne);
}
bitChecker(333);
bitChecker(425);
bitChecker(512);