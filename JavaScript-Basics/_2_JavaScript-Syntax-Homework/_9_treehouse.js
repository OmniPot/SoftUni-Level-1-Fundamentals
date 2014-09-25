function treeHouseCompare(a ,b) {
    var houseArea = a*a + (a*b)/2;
    var treeArea = b*1 + Math.PI*(b-1)*(b-1);
    if (houseArea > treeArea) {
        console.log('house/' + houseArea.toFixed(2));
    }else{
        console.log('tree/' + treeArea.toFixed(2));
    }
}
treeHouseCompare(3,2);
treeHouseCompare(3,3);
treeHouseCompare(4,5); // !!!