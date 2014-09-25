function countSubstringOccur(arr) {
    var keywordCount = 0;
    var keyword = arr[0].toLowerCase();
    var text = arr[1].toLowerCase();
    for (var i = 0; i < text.length ; i += 1) {
        if (text.substr(i ,keyword.length) == arr[0]) {
            keywordCount += 1;
        }
    }
    console.log(keywordCount);
}
countSubstringOccur(['in', 'We are living in a yellow submarine.' +
    ' We don\'t have anything else.' +
    ' Inside the submarine is very tight.' +
    ' So we are drinking all the day. We will move out of it in 5 days.']);
countSubstringOccur(['your', 'No one heard a single word you said.' +
    ' They should have seen it in your eyes. What was going around your head.']);
countSubstringOccur(['but', 'But you were living in another world' +
    ' tryin\' to get your message through.']);