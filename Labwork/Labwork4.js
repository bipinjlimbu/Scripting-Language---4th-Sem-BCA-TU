function fact(n){
    let f = 1;
    if(n==0||n==1){
        return 1;
    }
    else{
        for(let i = n;i>0;i--){
        f *= i;
        }
        return f;
    }
}
console.log(`Factorial:${fact(2)}`)