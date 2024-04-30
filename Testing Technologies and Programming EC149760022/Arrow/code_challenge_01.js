/*  Coding Task 1:
        Write a function expression called reverseString(). 
        It should accept a single argument representing a person's name. 
        It should return a reverse string as shown below:
        reverseString("John");
        reverseString("James");
        Output
            nhoJ
            semaJ
*/


/* 
    For this I will use the builtin functions split, reverse, join 
    Reason: a lot faster than iteration.
    I will also use a boolean to have more control over the output and function usage
*/

let reverseString_new = (argument, log = true) => {
    let toSplit = argument.split("");
    let arrayToJoin = toSplit.reverse();
    let toJoin = arrayToJoin.join("");

    //By default, console log
    if (log == true) {
        console.log(toJoin);
    } else {
        return toJoin;
    }
}

/*
    Now, we can directly use reverseString(argument) to console log directly
    the result, or, we can set the log to false when calling the function 
    and we can use it for example in a different context since console log
    would instantly output the result.
    let consoleThis = reverseString(argument, false);
    console.log(consoleThis);
    Sadly, this method would fail since only one argument it's required so we make
    another function below:
*/

let reverseString = (argument) => {
    let toSplit = argument.split("");
    let arrayToJoin = toSplit.reverse();
    let toJoin = arrayToJoin.join("");
    console.log(toJoin);
}

/*  Coding Task 2:
        Write a function expression called reverseArray(). 
        It should accept an array as a single argument. 
        It should return a reversed array and it should work for any data type.
        reverseArray([1, 2, 3, 4, 5]);
        reverseArray(["I", "like", "JavaScript"])
        Output:
            [5, 4, 3, 2, 1]
            ["JavaScript", "like", "I"]
*/

/*
    For this I will also use the builtin reverse function.
    It's a lot farster and easier. And it does the same thing ;)
*/

let reverseArray = (argument) => {
    let arrayToReverse = argument.reverse();
    console.log(arrayToReverse);
}

/*  Coding Task 3:
    Write a function expression called mostExpensiveItem(). 
    It should accept an array of items as a single argument. 
    It should return the item that has the most cost tied up, calculated by the amount in stock * price.
    Test Data
        [
            { item: "irn bru", price: 3.25, stock: 50 },
            { item: "fanta", price: 3.98, stock: 45 },
            { item: "diet coke", price: 4.40, stock: 38 }, 
            { item: "7up", price: 3.99, stock: 42 }, 
        ]
    Output:
        { item: 'fanta', price: 3.98, stock: 45 }
*/

/* 
    For this exercise, I will have to use a iteration.
    We have to do a multiplication between argument[i].price and argument[i].stock
    to get the result and then based on that, we then output the index of the 
    item in that list.
*/

const dataItems = [
    { item: "irn bru", price: 3.25, stock: 50 },
    { item: "fanta", price: 3.98, stock: 45 },
    { item: "diet coke", price: 4.40, stock: 38 }, 
    { item: "7up", price: 3.99, stock: 42 },    
]

let mostExpensiveItem = (argument) => {
    //Highest price * stock for the first item in the list
    let highestValue = argument[0].price * argument[0].stock;
    //Get it's index
    let itemIndex = argument[0];

    //loop
    for (let i = 1; i < argument.length; i++) {
        //Get highest price * stock for each item in the list
        let currentValue = argument[i].price * argument[i].stock;
        //if currentValue > highestValue
        if (currentValue > highestValue) {
            //Update the highestValue
            highestValue = currentValue;
            //Get the index of this curernt item
            itemIndex = argument[i];
        }
    }

    //Get the item with the highest price * stock
    return itemIndex;
}

// console.log(mostExpensiveItem(dataItems));