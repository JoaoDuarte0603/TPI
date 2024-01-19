    document.addEventListener('DOMContentLoaded', function () {
        // Vê os detalhes dos produtos
        var productDetails = {
            name: document.querySelector('.name_price h3').textContent,
            price: parseFloat(document.querySelector('.name_price p').textContent.replace('€', '')),
            image: document.querySelector('.images img').getAttribute('src'),
            quantity: 1
        };

        var addToCartButton = document.getElementById('addToCart');

        function addToCart() {
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            var found = false;

            // Verifica se o produto já está adicionado no carrinho
            cart.forEach(function (item) {
                if (item.name === productDetails.name) {
                    item.quantity += 1;
                    found = true;
                }
            });

            // Caso não esteja adiciona o mesmo ao carrinho
            if (!found) {
                cart.push(productDetails);
            }

            localStorage.setItem('cart', JSON.stringify(cart));

            // Atualiza o número de produtos adicionado aos carrinho (icon)
            updateCartIcon();
        }

        addToCartButton.addEventListener('click', addToCart);

        function updateCartIcon() {
            var cartIcon = document.getElementById('cart');
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            var cartItemCount = cart.reduce(function (total, item) {
                return total + item.quantity;
            }, 0);

            cartIcon.innerHTML = ` Shopping_Bag (${cartItemCount}) `;
        }
    });
