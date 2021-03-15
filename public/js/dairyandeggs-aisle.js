function increment(amount) {

  var i = document.getElementById(amount).value;
  i++;
  document.getElementById(amount).value = i;
  sessionStorage.setItem(amount, i);

}

function decrement(amount) {

  var i = document.getElementById(amount).value;

  if (i > 0){

    i--;
    document.getElementById(amount).value = i;
    sessionStorage.setItem(amount, i);
  }

}

function setValues(){

  keys = (Object.keys(sessionStorage));
  console.log(keys);

  for(i=0; i<keys.length; i++){

    var itemToUpdate = document.getElementById(keys[i]);
    itemToUpdate.value = sessionStorage.getItem(keys[i])
  }

}
