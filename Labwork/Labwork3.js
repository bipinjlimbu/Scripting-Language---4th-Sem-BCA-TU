//WAP to reverse string using do while loop
let name = "hallelujah";
let reverse = "";
let i = name.length-1;
do{
    reverse += name[i];
    i--;
}while(i>=0);
console.log(reverse);