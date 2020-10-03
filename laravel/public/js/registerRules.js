// FUNÇÃO LETRA MINÚSCULA NO USERNAME

function forceLower(strInput) {
    strInput.value = strInput.value.toLowerCase();
}


// FUNÇÃO SEM ESPAÇO NO INPUT DO USERNAME

function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}
