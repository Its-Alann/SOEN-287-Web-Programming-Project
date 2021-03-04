function displayText(){
    var text = document.getElementById("description-text");
    if(text.style.display == "none"){
        text.style.display = "block";
    }
    else{
        text.style.display = "none";
    }
    
}

function getTotal(item,rate){
    var total = document.getElementById("totalPrice");
    var quantity = document.getElementById(item);
    if(quantity.value > 0){
        total.innerHTML = "Total Price: $" + Math.round((quantity.value*rate) * 100) / 100;
    }
    else{
        total.innerHTML = "Total Price: $0"
    }
}


