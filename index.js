// Get the product list and wishlist elements
const productList = document.getElementById('product-list');
const wishlist = document.querySelector('#wishlist ul');

// Add a click event listener to the product list
productList.addEventListener('click', (event) => {
  if (event.target.classList.contains('add-to-wishlist')) {
    // Get the product name
    const productName = event.target.parentNode.textContent.trim();

    // Create a new list item for the wishlist
    const listItem = document.createElement('li');
    listItem.textContent = productName;

    // Add the product to the wishlist
    wishlist.appendChild(listItem);

    // Remove the "Add to Wishlist" button
    event.target.remove();
  }
});

