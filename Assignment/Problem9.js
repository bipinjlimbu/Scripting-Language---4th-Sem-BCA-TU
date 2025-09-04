//WAP to find the root of quadratic equation using discriminant method
let a = 1, b = -3, c = 2;
let D = b*b - 4*a*c;

if (D > 0) {
    let x1 = (-b + Math.sqrt(D)) / (2*a);
    let x2 = (-b - Math.sqrt(D)) / (2*a);
    console.log("Two real roots:", x1, x2);
} else if (D === 0) {
    let x = -b / (2*a);
    console.log("One real root:", x);
} else {
    console.log("No real roots");
}
