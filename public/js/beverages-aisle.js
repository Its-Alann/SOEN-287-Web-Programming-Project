function increment(input){
    var currentAmount = null;
    var currentAmountHTML = document.getElementById(input);
    if(sessionStorage[input]){
        currentAmount = parseInt(sessionStorage.getItem(input));
    }
    else{
        currentAmount = parseInt(currentAmountHTML.value);
    }
    currentAmount = parseInt(currentAmount) + 1;
    currentAmountHTML.value = currentAmount.toString();
    sessionStorage.setItem(input, currentAmount);
}

function decrement(input){
    var currentAmount = null;
    var currentAmountHTML = document.getElementById(input);
    if(sessionStorage[input]){
        currentAmount = parseInt(sessionStorage.getItem(input));
    }
    else{
        currentAmount = parseInt(currentAmountHTML.value);
    }
    if(currentAmount >= 1){
        currentAmount = parseInt(currentAmount) - 1;
        currentAmountHTML.value = currentAmount.toString();
        sessionStorage.setItem(input, currentAmount);
    }
}


function moreDescription(){
    var description = document.getElementById("description-text")
    if(description.style.display == "none"){
        description.style.display = "block";
    }
    else{
        description.style.display = "none";
    }
}

function updateAllValues(){
    keys = (Object.keys(sessionStorage));
    console.log(keys);
    for(i=0; i<keys.lengthl; i++){
        if(sessionStorage.getItem(keys[i]) != null){
            var itemToUpdate = document.getElementById(keys[i]);
            itemToUpdate.value = (sessionStorage.getItem(keys[i])).toString();
        }
    }

}

function updateValue(input){
    console.log(input);
    console.log(sessionStorage.getItem(input));
    if(sessionStorage.getItem(input) != null){
        console.log(input);
        console.log(sessionStorage.getItem(input));
        var itemToUpdate = document.getElementById(input);
        itemToUpdate.value = (sessionStorage.getItem(input)).toString();
    }

}
