function findMostFreqWord(text) {
    var words = text.split(/[ ,.?!:;]+/);
    var wordsObj = [];
    var word;
    var count = 1;
    var bestcount = 1;
    for (var i = 0; i < words.length; i += 1) {
        word = words[i].toLowerCase();
        for (var j = i + 1; j < words.length; j += 1) {
            if (word === words[j].toLowerCase()) {
                count += 1;
            }
        }
        if (count > bestcount) {
            bestcount = count;
        }
        wordsObj.push({word: word, count: count});
        count = 1;
    }
    for (var i = 0; i < wordsObj.length; i += 1) {
        if (wordsObj[i].count == bestcount) {
            console.log(wordsObj[i].word + ' -> ' + bestcount + ' times');
        }
    }
    console.log();
}
findMostFreqWord('in the middle of the night');
findMostFreqWord('Welcome to SoftUni. Welcome to Java. Welcome everyone.');
findMostFreqWord('Hello my friend, hello my darling. Come on, come here. Welcome, welcome darling.');