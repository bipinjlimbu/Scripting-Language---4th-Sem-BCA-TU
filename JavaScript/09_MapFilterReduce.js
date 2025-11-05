//Map
let arr = [1,2,3,4,5];
let a = arr.map((value,index,a)=>{
    return value+index;
})
console.log(a);

//Filter
let b = arr.filter((v)=>{
    return v>2;
})

console.log(b);
