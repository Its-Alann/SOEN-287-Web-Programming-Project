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

function plus(price, product) {
    var btn = document.getElementsByClassName("quantity-plus")[0];
    var qty = document.getElementsByClassName("quantity-input-" + product)[0];
    qty.value ++;

    productSubtotal(price, product);
}

function minus(price, product) {
    var btn = document.getElementsByClassName("quantity-minus")[0];
    var qty = document.getElementsByClassName("quantity-input-" + product)[0];
    if (qty.value <= 1) {
        qty.value = 1;
    } else {
        qty.value --;
    }

    productSubtotal(price, product);
}

function productSubtotal(price, product) {
    var qty = document.getElementsByClassName("quantity-input-" + product)[0];
    var subtotal = qty.value * price;
    document.getElementsByClassName("subtotal-" + product)[0].textContent = "(Subtotal: $" + subtotal.toFixed(2) + ")";
}