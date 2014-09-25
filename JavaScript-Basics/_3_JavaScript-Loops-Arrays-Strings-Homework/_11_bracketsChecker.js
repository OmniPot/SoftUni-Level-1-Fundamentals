function checkBrackets(expression) {
    var brackets = 0;
    for (var i = 0; i < expression.length; i += 1) {
        expression.substr(i,1) === '(' ? brackets += 1 : brackets = brackets;
        expression.substr(i,1) === ')' ? brackets -= 1: brackets = brackets;
    }
    if (brackets == 0) {
        console.log('correct');
    }else{
        console.log('incorrect');
    }
}
checkBrackets('( ( a + b ) / 5 – d )');
checkBrackets(') ( a + b ) )');
checkBrackets('( b * ( c + d *2 / ( 2 + ( 12 – c / ( a + 3 ) ) ) )');