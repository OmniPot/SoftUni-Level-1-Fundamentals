function selectionSort(arr) {
    for (var i = 0; i < arr.length - 1; i += 1) {
        var smallest, temp;
        var index = i;
        for (var j = i + 1; j < arr.length; j += 1) {
            if (arr[j] < arr[index]) {
                index = j;
            }
        }
        temp = arr[index];
        arr[index] = arr[i];
        arr[i] = temp;
    }
    console.log(arr);
}
selectionSort([12, 12, 50, 2, 6, 22, 51, 712, 6, 3, 3]);
selectionSort([5, 4, 3, 2, 1]);