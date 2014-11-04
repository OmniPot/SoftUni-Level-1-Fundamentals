function countDivs(html) {
    var divCount = 0;
    for (var i = 0; i < html.length - 4; i += 1) {
        if (html.substr(i,4) === '<div') {
            divCount++;
        }
    }
    console.log(divCount);
}
countDivs('<!DOCTYPE html>' +
    '<html>' +
    '<head lang="en">' +
        '<meta charset="UTF-8">' +
        '<title>index</title>' +
        '<script src="/yourScript.js" defer></script>' +
    '</head>' +
    '<body>' +
        '<div id="outerDiv">' +
            '<div> ' +
    '   class="first">' +
                '<div><div>hello</div></div>' +
            '</div>' +
            '<div>hi<div></div></div>' +
            '<div>I am a div</div>' +
        '</div>' +
    '</body>' +
    '</html>');
