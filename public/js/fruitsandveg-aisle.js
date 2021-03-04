function decrement(input) {
    var curr_amount = document.getElementById(input);
    if(curr_amount.value>1){
        curr_amount.value = parseInt(curr_amount.value) - 1;
    }
}

function increment(input) {
    var curr_amount = document.getElementById(input);
    curr_amount.value = parseInt(curr_amount.value) + 1;
}