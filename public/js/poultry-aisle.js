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


function updateAllValues(){
var arr=["amount-bm", "amount-cb","amount-cl","amount-ct","amount-gm","amount-sal",'amount-app','amount-ban','amount-kiwi','amount-pap','amount-broc','amount-carr','amount-lett','amount-bell','amount-ore','amount-chips','amount-nvb','amount-pist','amount-pret','amount-pop','amount-ew','amount-sprite','amount-coke','amount-fanta','amount-fp','amount-oj','amount-mon','amount-rb','amount-ssy','amount-sam','amount-qm','amount-qc','amount-be','amount-we','amount-fb','amount-wbl','amount-bbl','amount-nhl','amount-croi','amount-bagel','amount-chocola','amount-tcc'];
arr.forEach((arr)=>{
    
return  updateValue(arr);
})
}

