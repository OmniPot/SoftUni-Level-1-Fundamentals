function findPalindromes(text) {
    var words = text.split(/[ ,.?!:;]+/);
    var rx = /^([A-Z]+)([A-Z])\2*\1$/;
    var polindromes = '';
    for (var i = 0 ; i < words.length ; i += 1) {
        if (rx.test(words[i].toUpperCase()) || words[i].length == 1) {
            polindromes += words[i].toLowerCase() + ', ';
        }
    }
    polindromes = polindromes.substr(0, polindromes.length - 2);
    console.log(polindromes);
}
findPalindromes('There is a man, his name was Bob.');