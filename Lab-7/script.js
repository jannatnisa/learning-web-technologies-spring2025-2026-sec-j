let unitPrice = 1000;
 
let quantityInput = document.getElementById("quantity");
let totalPriceInput = document.getElementById("totalPrice");
 
quantityInput.addEventListener("input", function () {
    let quantity = parseInt(quantityInput.value);
 
    if (isNaN(quantity)) {
        quantity = 0;
    }
 
    if (quantity < 0) {
        alert("Quantity cannot be less than 0");
        quantity = 0;
        quantityInput.value = 0;
    }
 
    let total = unitPrice * quantity;
    totalPriceInput.value = total;
 
    if (total > 1000) {
        alert("You are now eligible for gift coupon!");
    }
});