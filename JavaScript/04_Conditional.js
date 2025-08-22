let marks = 75;

// if statement
if (marks > 90) {
  console.log("Excellent: Grade A+");
}

// if...else statement
if (marks >= 50) {
  console.log("Pass");
} else {
  console.log("Fail");
}

// if...else if...else chain
if (marks >= 90) {
  console.log("Grade A");
} else if (marks >= 75) {
  console.log("Grade B");
} else if (marks >= 50) {
  console.log("Grade C");
} else {
  console.log("Grade D");
}

// switch statement
let day = 4;
switch(day) {
  case 1: console.log("Monday"); break;
  case 2: console.log("Tuesday"); break;
  case 3: console.log("Wednesday"); break;
  case 4: console.log("Thursday"); break;
  case 5: console.log("Friday"); break;
  default: console.log("Weekend");
}

// Ternary operator (short if...else)
let isMember = true;
let fee = isMember ? "$2" : "$10";
console.log("Entry Fee:", fee);
