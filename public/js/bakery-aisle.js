function increment(elementID){
  var element = document.getElementById(elementID);
  var amount = parseInt(element.value);
  //console.log("amount:" + amount);

  //Verify for the maximum number of items per order
  if(amount <99){
    element.value = (++amount).toString();
  }
}

function decrement(elementID){
  var element = document.getElementById(elementID);
  var amount = parseInt(element.value);
  //console.log("amount:" + amount);

//Verify for the minimum number of items per order
  if(amount >1){
    element.value = (--amount).toString();
  }
}

function updateValues(){
  keyList = (Object.keys(sessionStorage));
  console.log(keyList);
}

function showDescription(){
  var description = document.getElementById("descriptionText");
  if(description.style.display == "none"){
    description.style.display = "block" ;

  }
  else{
    description.style.display = "none";
  }
}
