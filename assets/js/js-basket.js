// basket start
;(function() {
const cartDOMElement = document.querySelector('.js-cart');

    if (!cartDOMElement) {
        return;
    }
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    const cartItemsCounterDOMElement = document.querySelector('.js-cart-total-count-items');
    const cartTotalPriceDOMElement = document.querySelector('.js-cart-total-price');
    const cartTotalPriceInputDOMElement = document.querySelector('.js-cart-total-price-input');
    const cartWrapperDOMElement = document.querySelector('.js-cart-wrapper');

    const renderCartItem = ({id, name, src, price, quantity}) => {
        const cartItemDOMElement = document.createElement('div');
        
        const cartItemTemplate = `
            <div class="order">
                <button class="cart-item__btn js-btn--remove" type="button">&times;</button>

                <div class="order-img">
                    <img src="${src}" alt="braslet">
                </div>

                <div class="order-info">
                    <input type="hidden" name="${id}-Браслет" value="${name}">
                    <input class="js-cart-input-price" type="hidden" name="${id}-Цена" value="${price * quantity},00 руб">
                    <input type="hidden" name="${id}-Артикул" value="${id}">
                    <input class="js-cart-input-quantity" type="hidden" name="${id}-Кол-во" value="${quantity}">

                    <span class="cart-product__name">Пульсар ${name}</span>
                    <span class="cart-product__price js-cart-product__price">${price * quantity},00 руб</span>
                    <p class="cart-product__size">Размер &#8226; M</p>
                    <span class="cart-product__article">Артикул ${id}</span>
                </div>

                <div class="order__card-actions">
                    <button class="card-item__btn js-btn-product-decrease-quantity" type="button">&#8212;</button>
                    <span class="card-item__quantity js-card-item-quantity">${quantity}</span>
                    <button class="card-item__btn js-btn-product-inccrease-quantity" type="button">+</button>
                </div>
            </div>
        `;

        cartItemDOMElement.innerHTML = cartItemTemplate;
        cartItemDOMElement.setAttribute('data-product-id', id);
        cartItemDOMElement.classList.add('js-cart-item');

        cartDOMElement.appendChild(cartItemDOMElement);
    };

    const saveCart = () => {
        localStorage.setItem('cart', JSON.stringify(cart));
    };

    const updateCartTotalPrice = () => {
        const totalPrice = Object.keys(cart).reduce((acc, id) => {
            const { quantity, price } = cart[id];
            return acc + price * quantity;
        }, 0);

        if (cartTotalPriceDOMElement) {
            cartTotalPriceDOMElement.textContent = totalPrice;
        }

        if (cartTotalPriceInputDOMElement) {
            cartTotalPriceInputDOMElement.value = totalPrice;
        }
    };

    const updateCartTotalItemsCounter = () => {
        const totalQuantity = Object.keys(cart).reduce((acc, id) => {
            const { quantity } = cart[id];
            return acc + quantity;
        }, 0);

        if (cartItemsCounterDOMElement) {
            cartItemsCounterDOMElement.textContent = totalQuantity;
        }

        return totalQuantity;
    };

    const updateCart = () => {
        const totalQuantity = updateCartTotalItemsCounter();

        updateCartTotalPrice();
        saveCart();

        if (totalQuantity === 0) {
            cartWrapperDOMElement.classList.add('is-empty');
        } else {
            cartWrapperDOMElement.classList.remove('is-empty');
        }

    };


    const deleteCartItem = (id) => {
        const cartItemDOMElement = cartDOMElement.querySelector(`[data-product-id="${id}"]`);

        cartDOMElement.removeChild(cartItemDOMElement);
        delete cart[id];
        updateCart();
    };

    const addCartItem = (data) => {
        const { id}  = data;

        if (cart[id]) {
            increaseQuantity(id);
            return;
        }

        cart[id] = data;

        renderCartItem(data);
        updateCart();
    };

    const updateQuantity = (id, quantity) => {
        const cartItemDOMElement = cartDOMElement.querySelector(`[data-product-id="${id}"]`);
        const cartItemQuantityDOMElement = cartItemDOMElement.querySelector('.js-card-item-quantity');
        const cartItemPriceDOMElement = cartItemDOMElement.querySelector('.js-cart-product__price');
        const cartItemInputPriceDOMElement = cartItemDOMElement.querySelector('.js-cart-input-price');
        const cartItemInputQuantityDOMElement = cartItemDOMElement.querySelector('.js-cart-input-quantity');

        cart[id].quantity = quantity;
        cartItemQuantityDOMElement.textContent = quantity;
        cartItemPriceDOMElement.textContent = quantity * cart[id].price + ',00 руб';
        cartItemInputPriceDOMElement.value = quantity * cart[id].price + ',00 руб';
        cartItemInputQuantityDOMElement.value = quantity;

        updateCart();
    };

    const decreaseQuantity = (id) => {
        const newQuantity = cart[id].quantity - 1;
        if (newQuantity >= 1) {
            updateQuantity(id, newQuantity);
        };
    };

    const increaseQuantity = (id) => {
        const newQuantity = cart[id].quantity + 1;
        updateQuantity(id, newQuantity);
     };

    const getProductData = (productDOMElement) => {
        const name = productDOMElement.getAttribute('data-product-name');
        const price = productDOMElement.getAttribute('data-product-price');
        const src = productDOMElement.getAttribute('data-product-src');
        const id = productDOMElement.getAttribute('data-product-id');
        const quantity = 1;

        return { name, price, src, id, quantity };
    };

    const renderCart = () => {
        const ids = Object.keys(cart);
        ids.forEach((id) => renderCartItem(cart[id]));
    };

    const resetCart = () => {
        const ids = Object.keys(cart);
        ids.forEach((id) => deleteCartItem(cart[id].id));
    };

    // setTimeout(() => resetCart(), 2000);

    const cartInit = () => {
        renderCart();
        updateCart();

        document.addEventListener('reset-cart', resetCart);

        document.querySelector('body').addEventListener('click', (e) => {
            const target = e.target;

            if (target.classList.contains('js-btn-add-to-cart')) {
                e.preventDefault();
                const productDOMElement = target.closest('.js-product');
                const data = getProductData(productDOMElement)
                addCartItem(data);
            };
            if (target.classList.contains('js-btn--remove')) {
                e.preventDefault();
                const cartItemDOMElement = target.closest('.js-cart-item');
                const productID = cartItemDOMElement.getAttribute('data-product-id');
                deleteCartItem(productID);
            };

            if (target.classList.contains('js-btn-product-inccrease-quantity')) {
                e.preventDefault();
                const cartItemDOMElement = target.closest('.js-cart-item');
                const productID = cartItemDOMElement.getAttribute('data-product-id');
                increaseQuantity(productID);
            };

            if (target.classList.contains('js-btn-product-decrease-quantity')) {
                e.preventDefault();
                const cartItemDOMElement = target.closest('.js-cart-item');
                const productID = cartItemDOMElement.getAttribute('data-product-id');
                decreaseQuantity(productID);
            };

            
        });
    };

    cartInit();
})();
// basket end

///////////////////////////////////////

// form start

;(function() {
    var forms = document.querySelectorAll('.form-send');
  
    if (forms.length === 0) {
      return;
    }
  
    var serialize = function(form) {
      var items = form.querySelectorAll('input, select, textarea');
      var str = '';
      for (var i = 0; i < items.length; i += 1) {
        var item = items[i];
        var name = item.name;
        var value = item.value;
        var separator = i === 0 ? '' : '&';
  
        if (value) {
          str += separator + name + '=' + value;
        }
      }
      return str;
    };
  
    var formSend = function(form) {
      var data = serialize(form);
      var xhr = new XMLHttpRequest();
      var url = 'https://poolsar.live/wp-content/themes/poolsar/assets/mail/mail.php';
      
      xhr.open('POST', url);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
      xhr.onload = function() {
        var activePopup = document.querySelector('.popup.is-active');
  
        if (activePopup) {
          activePopup.classList.remove('is-active');
        } else {
          myLib.toggleScroll();
        }
  
        if (xhr.response === 'success') {
          document.querySelector('.popup-thanks').classList.add('is-active');
          document.dispatchEvent(new CustomEvent('reset-cart'));
        } else {
          document.querySelector('.popup-error').classList.add('is-active');
        }
  
        form.reset();
      };
  
      xhr.send(data);
    };
  
    for (var i = 0; i < forms.length; i += 1) {
      forms[i].addEventListener('submit', function(e) {
        e.preventDefault();
        var form = e.currentTarget;
        formSend(form);
      });
    }
  })();



  ;(function() {
    var showPopup = function(target) {
      target.classList.add('is-active');
    };
  
    var closePopup = function(target) {
      target.classList.remove('is-active');
    };
  
    myLib.body.addEventListener('click', function(e) {
      var target = e.target;
      var popupClass = myLib.closestAttr(target, 'data-popup');
  
      if (popupClass === null) {
        return;
      }
  
      e.preventDefault();
      var popup = document.querySelector('.' + popupClass);
  
      if (popup) {
        showPopup(popup);
        myLib.toggleScroll();
      }
    });
  
    myLib.body.addEventListener('click', function(e) {
      var target = e.target;
  
      if (target.classList.contains('popup__btn-close') ||
          target.classList.contains('popup__inner')) {
            var popup = myLib.closestItemByClass(target, 'popup');
  
            closePopup(popup);
            myLib.toggleScroll();
      }
    });
  
    myLib.body.addEventListener('keydown', function(e) {
      if (e.keyCode !== 27) {
        return;
      }
  
      var popup = document.querySelector('.popup.is-active');
  
      if (popup) {
        closePopup(popup);
        myLib.toggleScroll();
      }
    });
  })();