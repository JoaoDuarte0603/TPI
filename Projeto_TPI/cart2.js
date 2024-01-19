document.addEventListener('DOMContentLoaded', function () {
        var tableBody = document.querySelector('table tbody');
        var subtotalElement = document.querySelector('.total-price td:first-child');
        var cartIcon = document.getElementById('cart');

        function loadCartItems() {
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            tableBody.innerHTML = '';

            cart.forEach(function (item, index) {
                var newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>
                        <div class="cart-info">
                            <img src="${item.image}" alt="Product Image">
                            <div>
                                <p>${item.name}</p>
                                <small>Price: ${item.price.toFixed(2)}€</small>
                                <br>
                                <a href="#" class="remove-item" data-index="${index}">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><span>${item.quantity}</span></td>
                    <td class="subtotal">${(item.price * item.quantity).toFixed(2)}€</td>
                `;
                tableBody.appendChild(newRow);
            });

            // Adiciona um ouvinte de eventos aos botões de remove
            document.querySelectorAll('.remove-item').forEach(function (button) {
                button.addEventListener('click', removeItem);
            });

            // Atualiza os totais
            updateTotals();
        }

        function removeItem(event) {
            var indexToRemove = event.target.dataset.index;
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            // Remover apenas um produto
            if (cart[indexToRemove].quantity > 1) {
                cart[indexToRemove].quantity--;
            } else {
                cart.splice(indexToRemove, 1);
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            loadCartItems();
        }

        function updateTotals() {
            var subtotal = 0;

            document.querySelectorAll('.subtotal').forEach(function (subtotalElement) {
                subtotal += parseFloat(subtotalElement.textContent);
            });

            var tax = subtotal * 0.1; // Taxa de 10%
            var total = subtotal + tax;

            subtotalElement.textContent = subtotal.toFixed(2) + '€';
        }

        // Carrega os itens do carrinho ao carregar a pagina
        loadCartItems();
    });