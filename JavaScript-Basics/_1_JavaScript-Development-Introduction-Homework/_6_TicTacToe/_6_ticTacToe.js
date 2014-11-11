var turns = 1;
var cells = document.getElementsByTagName('td');
var rows = document.getElementsByTagName('tr');

var playerX = [];
var playerO = [];

var gameEnded = false;

var winningCombo = [
    [1, 4, 7],
    [2, 5, 8],
    [3, 6, 9],
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
    [1, 5, 9],
    [3, 5, 7]
];

function addOrder() {
    for (var j = 0; j < cells.length; j++) {
        cells[j].ORDER = j + 1;
        cells[j].addEventListener("click", function () {
            setSymbol(this)
        }, true)
    }
}

function setSymbol(cell) {
    if (!gameEnded){
        if (turns % 2 == 0 && cell.innerHTML == '') {
            cell.innerHTML = 'X';
            playerX.push(cell.ORDER);

        } else if (turns % 2 == 1 && cell.innerHTML == '') {
            cell.innerHTML = 'O';
            playerO.push(cell.ORDER);
        }

        checkForWinner();

        turns++;
    }
}

function checkForWinner() {
    playerX = playerX.sort();
    playerO = playerO.sort();

    for (var i = 0; i < winningCombo.length; i++) {
        if (compare(playerX, winningCombo[i])) {
            document.getElementById('result').innerHTML = 'Player X wins!';
            gameEnded = true;
        } else if (compare(playerO, winningCombo[i])) {
            document.getElementById('result').innerHTML = 'Player O wins!';
            gameEnded = true;
        }
    }
}

function compare(player, combo) {
    var contained = [false, false, false];

    for (var i = 0; i < combo.length; i++) {
        for (var j = 0; j < player.length; j++) {
            if (combo[i] == player[j]) {
                contained[i] = true;
            }
        }
    }
    for (var i = 0; i < contained.length; i++) {
        if (!contained[i]) {
            return false;
        }
    }
    return true;
};
