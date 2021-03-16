function moreDescription() {
    var description = document.getElementsByClassName("more-description")[0];
    var button = document.getElementsByClassName("btn-more-descr")[0];
    if (description.style.display != "block") {          
        description.style.display = "block";
        button.textContent = "Less Description";
    } else {
        description.style.display = "none";
        button.textContent = "More Description";
    }
}

function plus(product) {
    var qty = document.getElementById("qty-" + product);
    qty.value++;

    localStorage.setItem("qty-" + product, qty.value.toString());
}

function minus(product) {
    var qty = document.getElementById("qty-" + product);
    if (qty.value <= 0) {
        qty.value = 0;
    } else {
        qty.value--;
    }

    localStorage.setItem("qty-" + product, qty.value.toString());
}

function productSubtotal(price, product) {
    var qty = localStorage.getItem("qty-" + product);
    var subtotal = qty * price;
    document.getElementsByClassName("subtotal-" + product)[0].textContent = "(Subtotal: $" + subtotal.toFixed(2) + ")";
}

function updateQuantities() {
    var keys = Object.keys(localStorage);
    for (i = 0; i < keys.length; i++) {
        var val = localStorage.getItem(keys[i]);
        if (val != null) {
            var element = document.getElementById(keys[i]);
            if (element != null) {
                element.value = parseInt(val);
            }
        }
    }
}