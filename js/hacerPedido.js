// Get the table element
const table = document.querySelector('table');

// Add event listeners for 'Agregar' (Add) button
const addButtons = document.querySelectorAll('#agregar');
addButtons.forEach(button => {
  button.addEventListener('click', (event) => {
    const row = event.target.closest('tr');
    const quantityCell = row.querySelector('td:nth-child(2)');
    const currentQuantity = parseInt(quantityCell.textContent);
    if (currentQuantity > 0) {
      quantityCell.textContent = currentQuantity + 1;
      updateTotalPrice();
    }
  });
});

// Add event listeners for 'Disminuir' (Decrease) button
const decreaseButtons = document.querySelectorAll('#disminuir');
decreaseButtons.forEach(button => {
  button.addEventListener('click', (event) => {
    const row = event.target.closest('tr');
    const quantityCell = row.querySelector('td:nth-child(2)');
    const currentQuantity = parseInt(quantityCell.textContent);
    if (currentQuantity > 1) {
      quantityCell.textContent = currentQuantity - 1;
      updateTotalPrice();
    }
  });
});

// Add event listeners for 'Eliminar' (Delete) button
const deleteButtons = document.querySelectorAll('#eliminar');
deleteButtons.forEach(button => {
  button.addEventListener('click', (event) => {
    const row = event.target.closest('tr');
    table.removeChild(row);
    updateTotalPrice();
  });
});

// Function to update the total price
function updateTotalPrice() {
  const totalCell = table.querySelector('.footerTabla td');
  let totalPrice = 0.0;

  // Calculate the total price by iterating through each row
  const rows = table.querySelectorAll('tbody tr:not(.footerTabla)');
  rows.forEach(row => {
    const quantityCell = row.querySelector('td:nth-child(2)');
    const priceCell = row.querySelector('td:nth-child(3)');
    const quantity = parseInt(quantityCell.textContent);
    const price = parseFloat(priceCell.textContent.replace('S/.', ''));
    totalPrice += quantity * price;
  });

  // Update the total price in the footer cell
  totalCell.textContent = `S/.${totalPrice.toFixed(2)}`;
}