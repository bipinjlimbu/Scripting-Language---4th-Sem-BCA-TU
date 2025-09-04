//WAP to print prime numbers between 1 and 100 using for loop
console.log("Prime Numbers:");
for(let i = 2;i<100;i++){
    let count = 0;
    for(let j = 2;j<=i;j++){
        if(i%j==0){
            count++;
        }
    }
    if(count == 1){
        console.log(i);
    }
}