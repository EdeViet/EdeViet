let operand2 = ''
let opt

function buttondandler(btn) {
    const pressedValue = btn.innerText

    const resultInput = document.getElementsByClassName('input')
    if(isNaN(pressedValue)){
        operand2 += pressedValue;
        resultInput.value = operand2;
    }
}