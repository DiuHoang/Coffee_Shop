document.getElementById("edit-form").style.display = "none";
document.getElementById("order-form").style.display = "none";

function seeMore() {
    alert(" Please Login Account");
}

function onEditClicked() {
    alert("Edit");
    document.getElementById("edit-form").style.display = "block";
}

function onOrderClicked() {
    alert("Order");
    document.getElementById("order-form").style.display = "block";
    document.getElementById("products-form").style.display = "none";
}