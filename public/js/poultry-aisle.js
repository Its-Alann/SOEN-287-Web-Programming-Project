function ShowDescription(){
var description = document.getElementById("description")
if(description.style.display === "none"){
    description.style.display = "block";}
else{
    description.style.display="none";
}
}


function increment(amount) {


    if(sessionStorage[amount]){
    var setAmount=parseInt(sessionStorage.getItem(amount));
    }
     else{
      var setAmount=parseInt(document.getElementById(amount).value);
     }

    setAmount++;
    document.getElementById(amount).value = setAmount;
    sessionStorage.setItem(amount, setAmount);

}


function decrement(amount) {

    if(sessionStorage[amount]){
        setAmount=parseInt(sessionStorage.getItem(amount));
        }
        else{
         setAmount=parseInt(document.getElementById(amount).value);
        }
    
    if(setAmount > 1){
        setAmount--; 
        document.getElementById(amount).value = setAmount;
        sessionStorage.setItem(amount, setAmount);
    }

}

function updateValue(amount){
    if(sessionStorage.getItem(amount) != null){
        var itemToUpdate = document.getElementById(amount);
        itemToUpdate.value = (sessionStorage.getItem(amount)).toString();
    }
}


function updateValues(){

    keys = (Object.keys(sessionStorage));
    console.log(keys);
    for(i=0; i<keys.length; i++){
        if(sessionStorage.getItem(keys[i]) != null){
            var temp = document.getElementById(keys[i]);
            if(temp){
                var itemToUpdate = document.getElementById(keys[i]);
                itemToUpdate.value = (sessionStorage.getItem(keys[i])).toString();
            }
        }
    }

}

