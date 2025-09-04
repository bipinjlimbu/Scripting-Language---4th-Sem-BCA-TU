//Normal Function
function show(n){
    let sum = 0;
    for(let i = 1;i<=n;i++){
        sum += i;
    }
    return `${sum}\n`
}
console.log(show(7));
console.log(show(12));

//Arrow Function
const sum=(x,y)=>x+y;
console.log(sum(4,3));