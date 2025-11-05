let arr = [1,2,3,4,5,6,7,8];
let even = [];

arr.forEach(e => {
    if(e%2 == 0){
        even.push(e);
    }
});

console.log(even);