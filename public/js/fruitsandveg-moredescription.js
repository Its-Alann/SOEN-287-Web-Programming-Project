function displayText(){
    var text = document.getElementById("description-text");
    if(text.style.display == "none"){
        text.style.display = "block";
    }
    else{
        text.style.display = "none";
    }
    
}


function getTotal(item){
    var priceArray = document.getElementsByClassName("pricing");
    var rate = priceArray[0].innerHTML;
    rate = parseFloat(rate.slice(1, rate.indexOf("/")));

    var total = document.getElementById("totalPrice");
    var quantity = document.getElementById(item);
    if(quantity.value > 0){
        total.innerHTML = "Total Price: $" + Math.round((quantity.value*rate) * 100) / 100;
    }
    else{
        total.innerHTML = "Total Price: $0"
    }
}


function updateValue(input){


    console.log(input);
    console.log(localStorage.getItem(input));
    
    if(localStorage.getItem(input) != null){
        console.log(input);
        console.log(localStorage.getItem(input));

        var itemToUpdate = document.getElementById(input);
        itemToUpdate.value = (localStorage.getItem(input)).toString();
        getTotal(input);
    }
}

