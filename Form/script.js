function show1(){
    document.getElementById('div1').style.display = 'block';
}
function check_name() {
    let emp_name = document.getElementById("emp_name").value;
    let first_letter = emp_name.substring(0,1);
    if(isNaN(first_letter)) {
        document.getElementById("name_error").innerHTML=""
    }
    else {
        document.getElementById("name_error").innerHTML="The first letter of name cannot start with number"
    }
}

$(document).ready(function(){
//checkbox necessary
$("#submit").click(function() {
    if($('div.checkbox.group:checkbox:checked').length == 0){
        alert("You must check one checkbox");
    }
});
});

function check_name(element) {
    let my_name =element.value;
    let first_letter = my_name.substring(0,1);
    if(isNaN(first_letter)) {
        document.getElementById("name_error").innerHTML=""
    }
    else {
        document.getElementById("name_error").innerHTML="The first letter of name cannot start with number"
    }
}

