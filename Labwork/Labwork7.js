let people = [
  { name: "Bipin", age: 19},
  { name: "Anush", age: 20},
  { name: "Ishan", age: 19}
];

console.log(people);

people.push({ name: "Ruksan", age: 21});
console.log(people);

let removedPerson = people.pop();
console.log(people);
console.log(removedPerson);