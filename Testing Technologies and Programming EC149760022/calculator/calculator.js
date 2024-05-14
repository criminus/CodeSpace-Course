let display = document.getElementById("calc-display");

function add(param) {
    display.value += param;
}

function calcThis() {
    let operation = display.value;
    display.value = eval(display.value);
    logOperation(operation, eval(display.value));
}

function clearCalc() {
    display.value = '';
}

const operations = [];
function logOperation(param1, param2) {
   operations.push(`${param1} = ${param2}`);
   // console.log(`Operation ${param1} = ${param2}`);
   // console.log(operations);
   updateDisplay();
}

function updateDisplay() {
    const calcMem = document.getElementById("calc-mem");
    calcMem.innerHTML = "";

    operations.forEach(operation => {
        const operationElement = document.createElement("span");
        operationElement.textContent = operation;
        calcMem.appendChild(operationElement);
    });
}