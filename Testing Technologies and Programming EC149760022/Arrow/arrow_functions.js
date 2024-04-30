/* 
    In this course we will learn about Arrow Functions and how to convert
    traditional functions to Arrow Functions.
    I really like backticks so I will use them for the output.
    I find them easier.
    Also for the parameters, I know when we use a single parameter
    it's recommended to not use () but I think it's a better practice
    to use them.
    ----------------------------------------------------------------------
    It looks like in the course we have to transform traditional to anonymous
    and then to arrow. So we will do the same here.
*/

//Traditional function
function greet(name) {
    return `hello, my name is ${name}`;
}

//Now into anonymous function:
let greet = function (name) {
    return `hello, my name is ${name}`;
}

/*
    To convert the anonymous to an arrow function we have to:
        1. Remove "function"
        2. We use => then the curly brackets (if needed)
        3. In our case, we will be able to have it on a single line without curly brackets
*/

let greet = (name) => `hello, my name is ${name}`;

//If we have only one parameter we can remove the () around it but I think it's better not to

//Now, for no arguments, we simply use () meaning empty arguments => 0, none, no arguments

let greet = () => `This function takes no arguments`;

console.log(greet());

/* 
    Activities:
    ----------------------------------------------------------------------
*/

/*  
    Q1 Write an arrow function expression called greet(). 
    It should accept a single argument representing a person's name. 
    It should return a greeting string as shown below:
    greet("John"); //"Hi John!"
    greet("James"); //"Hi James!"
*/

let greet = (name) => `Hi ${name}!`;

/* 
    Q2 Convert the function isEven() into an equivalent arrow function.
    function isEven(num) {
    return num % 2 === 0;
    }
*/

let isEven = (num) => num % 2 === 0;

/*
    Q3 Convert the following JavaScript function declaration to arrow function syntax:
    function counterFunc(counter) {
        if (counter > 100) {
            counter = 0;
        } else {
            counter++;
        }
    return counter;
    }
*/

let counterFunc = (counter) => counter > 100 ? 0 : counter + 1;

/*
    Q4 Write an arrow function for the following JavaScript function:
    function nameAge(name, age) {
        console.log("Hello " + name);
        console.log("You are " + age + " years old");
    }
*/

let nameAge = (name, age) => console.log(`Hello ${name}\nYou are ${age} years old`);

/* 
   Q5 Write the arrow function for the following:
    function printOnly() {
        console.log("printing");
    }
*/

let printOnly = () => console.log(`printing`);

/*
    Q6 Write the arrow function for the following:
    function sum(num1, num2) {
        return num1 + num2
    }
*/

let sum = (num1, num2) => num1 + num2;

