//For Loop
let sum = 0;
let n = 7;
for(let i = 1;i<=n;i++){
    sum += i;
}
console.log("For Loop");
console.log(`Sum:${sum}`);

//For-in Loop
const obj = {
    name:"Bipin",
    age:19
};
console.log("\nFor-in Loop");
for (let i in obj){
    console.log(`${i} : ${obj[i]}`)
}

//For-of Loop
const ofbj = [1,2,3,4]
let mul = 1;
console.log("\nFor-of Loop");
for (let i of ofbj){
    mul *= i;
}
console.log(mul);