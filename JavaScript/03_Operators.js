// Arithmetic Operators
let a = 10, b = 3;
console.log("Addition:", a + b);       
console.log("Subtraction:", a - b);    
console.log("Multiplication:", a * b); 
console.log("Division:", a / b);       
console.log("Modulus:", a % b); 
console.log("Exponentiation:", a ** b);
console.log("Increment:", ++a);  
console.log("Decrement:", --b); 

// Assignment Operators
let x = 5;
x += 3; 
x -= 2;
x *= 4; 
x /= 6;
x %= 3;
console.log("Final value of x:", x);

// Comparison Operators
console.log("5 == '5':", 5 == "5");  
console.log("5 === '5':", 5 === "5"); 
console.log("5 != '5':", 5 != "5");  
console.log("5 !== '5':", 5 !== "5"); 
console.log("10 > 5:", 10 > 5);       
console.log("10 < 5:", 10 < 5);       
console.log("10 >= 10:", 10 >= 10);   
console.log("5 <= 10:", 5 <= 10);    

// Logical Operators
console.log("true && false:", true && false); 
console.log("true || false:", true || false); 
console.log("!true:", !true);                 

// typeof Operator
console.log("typeof 123:", typeof 123);       
console.log("typeof 'hello':", typeof "hello"); 
console.log("typeof true:", typeof true);    

// Ternary Operator
let age = 20;
let status = (age >= 18) ? "Adult" : "Minor";
console.log("Age check:", status);
