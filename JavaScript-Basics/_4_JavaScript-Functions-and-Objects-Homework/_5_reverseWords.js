function reverseWordsInString(str) {
    var words = str.split(/\s+/)
    var reversedWords = [];
    for (var i = 0; i < words.length; i += 1) {
        var wordReversed = '';
        for (var j = words[i].length - 1; j >= 0; j -= 1) {
            wordReversed += words[i].substr(j,1);
        }
        reversedWords.push(wordReversed + ' ');
        wordReversed = '';
    }
    var sentence = '';
    for(var i = 0; i < reversedWords.length; i += 1){
        sentence += reversedWords[i];
    }
    console.log(sentence);
}
reverseWordsInString('Hello, how are you.');
reverseWordsInString('Life is pretty good, isn’t it?');
