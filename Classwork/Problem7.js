//WAP to check whether the number is palindrome or not
let num = 121
let rev = num.toString().split("").reverse().join("")
if(num == rev){
    console.log(num+" is a Palindrome Number.")
}
else{
    console.log(num+" is not a Palindrome Number.")
}