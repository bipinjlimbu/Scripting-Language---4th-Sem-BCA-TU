//WAP to input 5 marks and calculate the percentage and grade the student
marks1 = 80 
marks2 = 45
marks3 = 55
marks4 = 50
marks5 = 75

percentage = ((marks1 + marks2 + marks3 + marks4 + marks5)/500)*100

console.log("Percentage:"+percentage)

if(percentage >= 90){
    console.log("Excellent")
}
else if(percentage >= 80 && percentage < 90){
    console.log("Very Good")
}
else if(percentage >= 70 && percentage < 80){
    console.log("Good")
}
else if(percentage >= 60 && percentage < 70){
    console.log("Average")
}
else if(percentage >= 50 && percentage < 60){
    console.log("Fine")
}
else{
    console.log("Fail")
}