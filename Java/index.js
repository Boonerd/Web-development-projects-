console.log("External Js file");
/*this is a comment*/
// this is a single line comment
// js datatypes
var firstName ="Clara";// string
var firstName= "Lara";
console.log (firstName);
let lastName =true;//boolean
//let lastName= "Larry";
const  age= 12;
var unit= null;
var school;// undefined
let ourArray= [12,13,15,11]
let ourObject={
firstName:"Clara",
lastName:true,
//age: 12 ,
studentDetails: function(){
console.log("This student is called "
+ this.firstName +" She is " 
+this.age + " years old.")
}
}

console.log(typeof lastName) ;
console.log(typeof firstName);
console.log(typeof age);
console.log(typeof unit);
console.log(typeof school);
console.log( "type of our array is",typeof ourArray);
console.log("Age of the third studet is",ourArray);
ourObject.studentDetails();
// arithmetic operators : + - * /
let sum;
sum=age + age //addition
console.log(sum);
sum += 1;
console.log(sum);
// comparison operators: < > == >= <= !=
console.log (12>13);
console.log ("hello"=="Hello")