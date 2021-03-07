function increment(input) {

    var curr_amount = null;
    var curr_amount_html = document.getElementById(input);

    if(localStorage[input]){
        curr_amount = parseInt(localStorage.getItem(input));
    }
    else{
        curr_amount = parseInt(curr_amount_html.value);
    }

    curr_amount = parseInt(curr_amount) + 1;
    curr_amount_html.value = curr_amount.toString();
    localStorage.setItem(input, curr_amount);

}

function decrement(input) {

    var curr_amount = null;
    var curr_amount_html = document.getElementById(input);

    if(localStorage[input]){
        curr_amount = parseInt(localStorage.getItem(input));
    }
    else{
        curr_amount = parseInt(curr_amount_html.value);
    }

    if(curr_amount > 1){
        curr_amount = parseInt(curr_amount) - 1;
        curr_amount_html.value = curr_amount.toString();
        localStorage.setItem(input, curr_amount);
    }

}


function updateValues(){

    keys = (Object.keys(localStorage));
    console.log(keys);
    for(i=0; i<keys.length; i++){
        if(localStorage.getItem(keys[i]) != null){
            var itemToUpdate = document.getElementById(keys[i]);
            itemToUpdate.value = (localStorage.getItem(keys[i])).toString();
            
        }
    }

}