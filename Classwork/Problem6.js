//WAP to generate electricity bill using condition
let ebill= 200
if(ebill <= 50){
    cost = ebill * 5
    console.log("Cost of "+ebill+" Units is "+cost)
}
else if(ebill > 50 && ebill <= 150){
    cost = (50 * 5) + ((ebill - 50) * 7)
    console.log("Cost of "+ebill+" Units is "+cost)
}
else{
    cost = (50 * 5) + (100 * 7) + ((ebill - 150)*10)
    console.log("Cost of "+ebill+" Units is "+cost)
}