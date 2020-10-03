// FUNÇÃO SEM ESPAÇO NO INPUT DO USERNAME

function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32) return false;
}
