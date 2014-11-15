function variablesTypes(arr) {
    var person = {
        "My name": arr[0],
        "My age": arr[1],
        "I am male": arr[2],
        "My favorite foods are": [arr[3][0], arr[3][1], arr[3][2]]
    };
    for (var thing in person) {
        console.log(thing + ": " + person[thing] + " \\\\ " + "type is " + typeof person[thing]);
    }
}

variablesTypes(['Pesho', 22, true, ['fries', 'banana', 'cake']]);

//output
//"My name: Pesho //type is string
//My age: 22 //type is number
//I am male: true //type is boolean
//My favorite foods are: fries,banana,cake //type is object"
