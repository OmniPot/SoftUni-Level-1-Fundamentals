function isPrime(number){
    var prime = true;
    for (i = 2 ; i < number / 2 ; i += 1){
        if (number % i == 0){
            prime = false;
        }
    }
    console.log(prime);
}
isPrime(7);
isPrime(254);
isPrime(587);