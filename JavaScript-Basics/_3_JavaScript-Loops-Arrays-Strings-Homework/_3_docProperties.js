function displayProperties(){
    var properties = Object.keys(document);
    for (var i = 0 ; i < properties.length ; i++){
        console.log(properties[i]);
    }
}
displayProperties();