function calcSupply(age, maxAge, favFood, foodPerDay) {
    var reqAmount = ((maxAge - age) * 365)* foodPerDay;
    console.log(reqAmount + 'kg of ' + favFood + ' would be enough until I am ' + maxAge
        + ' years old.');
}
calcSupply(10,70,'bread',1);
calcSupply(22,53,'jelly',0.2);
calcSupply(38,91,'beer',3);