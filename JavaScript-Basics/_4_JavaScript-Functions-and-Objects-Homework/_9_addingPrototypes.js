Array.prototype.removeItem = function removeItem(value) {
    for (var i = 0; i < this.length; i++) {
        if (this[i] === value) {
            this.splice(i, 1);
            i--;
        }
    }
    return console.log(this);
}
var arr = [1, 2, 1, 4, 1, 3, 4, 1, 111, 3, 2, 1, '1'];
arr.removeItem(1);
arr = ['hi', 'bye', 'hello' ];
arr.removeItem('bye');

