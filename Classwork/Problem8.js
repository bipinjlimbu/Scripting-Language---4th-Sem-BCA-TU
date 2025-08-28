//WAP to check whether the number is Armstrong or not
let num = 123;
let temp = num;
let sum = 0;
let digits = num.toString().length;

while (temp > 0) {
    let digit = temp % 10;
    sum += digit ** digits;
    temp = Math.floor(temp / 10);
}

if (sum === num) {
    console.log(num+" is an Armstrong number")
} else {
    console.log(num+" is not an Armstrong number")
}
