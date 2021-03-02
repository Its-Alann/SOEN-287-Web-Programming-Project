function moreDescription() {
    var description = document.getElementsByClassName("more-description")[0];
    if (description.style.display != "block") {          
        description.style.display = "block";
    } else {
        description.style.display = "none";
    }
}

function plus(price) {
    var btn = document.getElementsByClassName("quantity-plus")[0];
    var qty = document.getElementsByClassName("quantity-input")[0];
    qty.value ++;

    productSubtotal(price);
}

function minus(price) {
    var btn = document.getElementsByClassName("quantity-minus")[0];
    var qty = document.getElementsByClassName("quantity-input")[0];
    if (qty.value <= 1) {
        qty.value = 1;
    } else {
        qty.value --;
    }

    productSubtotal(price);
}

function productSubtotal(price) {
    var qty = document.getElementsByClassName("quantity-input")[0];
    var subtotal = qty.value * price;
    document.getElementsByClassName("subtotal")[0].textContent = "(Subtotal: $" + subtotal.toFixed(2) + ")";
}