function clone(obj) {
    var cloned = JSON.parse(JSON.stringify(obj));
    return cloned;
}
function compareObjects(obj, objCopy) {
    var isEqual = true;
    if (obj != objCopy) {
        isEqual = false;
    }
    console.log('a' + ' == ' + 'b' + ' --> ' + isEqual)
}

var a = {name: 'Pesho', age: 21};
var b = clone(a);       // A DEEP COPY !
compareObjects(a, b);

a = {name: 'Pesho', age: 21} ;
b = a;            // NOT A DEEP COPY!
compareObjects(a, b);
