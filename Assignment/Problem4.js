//WAP to check if the given character is alphabet, digit or special character
let char = "@";
let ascii = char.charCodeAt(0);

if (ascii >= 48 && ascii <= 57) {
    console.log(char+" is a Digit");
} else if ((ascii >= 65 && ascii <= 90) || (ascii >= 97 && ascii <= 122)) {
    console.log(char+" is an Alphabet");
} else {
    console.log(char+" is an Special Character");
}