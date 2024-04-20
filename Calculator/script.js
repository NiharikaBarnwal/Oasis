function inputvalue(value){
    document.getElementById("entry").value += value;
}
function deleteValue(){
    let disp = document.getElementById("entry");
    entry.value = disp.value.slice(0, -1);
}
function clearValue(){
    document.getElementById("entry").value = '';
    document.getElementById("display").value = '';
}
function calculateValue(){
    let result = eval(document.getElementById('entry').value);
    document.getElementById('display').value = result;
}