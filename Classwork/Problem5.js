//WAP to input 5 marks and calculate the percentage and determine the division of the student
marks1 = 80;
marks2 = 45;
marks3 = 55;
marks4 = 50;
marks5 = 75;

percentage = ((marks1 + marks2 + marks3 + marks4 + marks5)/500)*100;

console.log("Percentage:"+percentage);

if (percentage >= 90) {
    console.log("Distinction");
} else if (percentage >= 80 && percentage < 90) {
    console.log("First Division");
} else if (percentage >= 70 && percentage < 80) {
    console.log("Second Division");
} else if (percentage >= 60 && percentage < 70) {
    console.log("Third Division");
} else if (percentage >= 50 && percentage < 60) {
    console.log("Fourth Division");
} else {
    console.log("Fail");
}