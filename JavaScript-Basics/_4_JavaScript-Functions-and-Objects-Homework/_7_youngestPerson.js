var people = [
    { firstname : 'George', lastname: 'Kolev', age: 32},
    { firstname : 'Bay', lastname: 'Ivan', age: 81},
    { firstname : 'Baba', lastname: 'Ginka', age: 40}];

function findYoungestPerson(people) {
    //find smallest age
    var youngest = Number.MAX_VALUE;
    for (var i = 0; i < people.length; i += 1) {
        if (people[i].age < youngest) {
            youngest = people[i].age;
        }
    }
    //find and print person with smallest age
    for (person in people) {
        if (people[person].age === youngest) {
            console.log('The youngest person is ' + people[person].firstname + ' ' + people[person].lastname);
        }
    }
}
findYoungestPerson(people);