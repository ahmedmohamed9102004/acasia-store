function addToCart(productName) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.push(productName);
  localStorage.setItem("cart", JSON.stringify(cart));
  alert(productName + " تم إضافته إلى سلة المشتريات.");
}
function goToCheckout() {
  window.location.href = "checkout.html";
}

function clearCart() {
  localStorage.removeItem("cart");
  alert("تم تفريغ السلة.");
  location.reload();
}
