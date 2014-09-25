function findCardFrequency(cardsArr) {
    var cards = cardsArr.substring(0,cardsArr.length - 1).split(/[^A-Z0-9]+/);
    var cardsLen = cards.length;
    var cardsObj = [];
    for (var i = 0; i < cards.length; i += 1) {
        var cardOccurance = 1;
        for (var j = cards.length - 1; j >= i + 1; j -= 1) {
            if (cards[i] === cards[j]) {
                cardOccurance += 1;
                cards.splice(j,1);
            }
        }
        cardsObj.push({card: cards[i], freq: (cardOccurance * 100/cardsLen).toFixed(2)+'%'});
        cardOccurance = 1;
    }
    console.log(cardsObj);
}
findCardFrequency('8♥ 2♣ 4♦ 10♦ J♥ A♠ K♦ 10♥ K♠ K♦');
findCardFrequency('J♥ 2♣ 2♦ 2♥ 2♦ 2♠ 2♦ J♥ 2♠');
findCardFrequency('10♣ 10♥');