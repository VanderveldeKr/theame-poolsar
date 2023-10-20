// script js skider start
$(document).ready(function(){
  $('.slider').slick({
      autoplay:true,
      autoplaySpeed:1500,
      arrows:false,
      dots:true,
      speed: 500,
      slidesToShow: 1,
      adaptiveHeight: true,
  });
});

var target='.catalog-card__pregnancy , .catalog-card__health , .catalog-card__true , .catalog-card__publicity ,.catalog-card__body , .catalog-card__protection , .catalog-card__abundance , .catalog-card__protection, .slider-item__sfera , .slider-item__activet , .slider-item__about';

jQuery(target).each(function(){
  jQuery(this).click(function(){
      location = jQuery(this).find('a').attr('href');});
  jQuery(this).css('cursor','pointer');
});
// script js skider end

// mask phone start
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});
$('.mask-phone').mask('+7 (999) 999-99-99');
    
$.fn.setCursorPosition = function(pos) {
  if ($(this).get(0).setSelectionRange) {
    $(this).get(0).setSelectionRange(pos, pos);
  } else if ($(this).get(0).createTextRange) {
    var range = $(this).get(0).createTextRange();
    range.collapse(true);
    range.moveEnd('character', pos);
    range.moveStart('character', pos);
    range.select();
  }
};

$('input[type="tel"]').click(function(){
    $(this).setCursorPosition(4);  // set position number
  });
// mask phone end
// mask date start
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):jQuery)}(function(a){var b,c=navigator.userAgent,d=/iphone/i.test(c),e=/chrome/i.test(c),f=/android/i.test(c);a.mask={definitions:{9:"[0-9]",a:"[A-Za-z]","*":"[A-Za-z0-9]"},autoclear:!0,dataName:"rawMaskFn",placeholder:"_"},a.fn.extend({caret:function(a,b){var c;if(0!==this.length&&!this.is(":hidden"))return"number"==typeof a?(b="number"==typeof b?b:a,this.each(function(){this.setSelectionRange?this.setSelectionRange(a,b):this.createTextRange&&(c=this.createTextRange(),c.collapse(!0),c.moveEnd("character",b),c.moveStart("character",a),c.select())})):(this[0].setSelectionRange?(a=this[0].selectionStart,b=this[0].selectionEnd):document.selection&&document.selection.createRange&&(c=document.selection.createRange(),a=0-c.duplicate().moveStart("character",-1e5),b=a+c.text.length),{begin:a,end:b})},unmask:function(){return this.trigger("unmask")},mask:function(c,g){var h,i,j,k,l,m,n,o;if(!c&&this.length>0){h=a(this[0]);var p=h.data(a.mask.dataName);return p?p():void 0}return g=a.extend({autoclear:a.mask.autoclear,placeholder:a.mask.placeholder,completed:null},g),i=a.mask.definitions,j=[],k=n=c.length,l=null,a.each(c.split(""),function(a,b){"?"==b?(n--,k=a):i[b]?(j.push(new RegExp(i[b])),null===l&&(l=j.length-1),k>a&&(m=j.length-1)):j.push(null)}),this.trigger("unmask").each(function(){function h(){if(g.completed){for(var a=l;m>=a;a++)if(j[a]&&C[a]===p(a))return;g.completed.call(B)}}function p(a){return g.placeholder.charAt(a<g.placeholder.length?a:0)}function q(a){for(;++a<n&&!j[a];);return a}function r(a){for(;--a>=0&&!j[a];);return a}function s(a,b){var c,d;if(!(0>a)){for(c=a,d=q(b);n>c;c++)if(j[c]){if(!(n>d&&j[c].test(C[d])))break;C[c]=C[d],C[d]=p(d),d=q(d)}z(),B.caret(Math.max(l,a))}}function t(a){var b,c,d,e;for(b=a,c=p(a);n>b;b++)if(j[b]){if(d=q(b),e=C[b],C[b]=c,!(n>d&&j[d].test(e)))break;c=e}}function u(){var a=B.val(),b=B.caret();if(o&&o.length&&o.length>a.length){for(A(!0);b.begin>0&&!j[b.begin-1];)b.begin--;if(0===b.begin)for(;b.begin<l&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}else{for(A(!0);b.begin<n&&!j[b.begin];)b.begin++;B.caret(b.begin,b.begin)}h()}function v(){A(),B.val()!=E&&B.change()}function w(a){if(!B.prop("readonly")){var b,c,e,f=a.which||a.keyCode;o=B.val(),8===f||46===f||d&&127===f?(b=B.caret(),c=b.begin,e=b.end,e-c===0&&(c=46!==f?r(c):e=q(c-1),e=46===f?q(e):e),y(c,e),s(c,e-1),a.preventDefault()):13===f?v.call(this,a):27===f&&(B.val(E),B.caret(0,A()),a.preventDefault())}}function x(b){if(!B.prop("readonly")){var c,d,e,g=b.which||b.keyCode,i=B.caret();if(!(b.ctrlKey||b.altKey||b.metaKey||32>g)&&g&&13!==g){if(i.end-i.begin!==0&&(y(i.begin,i.end),s(i.begin,i.end-1)),c=q(i.begin-1),n>c&&(d=String.fromCharCode(g),j[c].test(d))){if(t(c),C[c]=d,z(),e=q(c),f){var k=function(){a.proxy(a.fn.caret,B,e)()};setTimeout(k,0)}else B.caret(e);i.begin<=m&&h()}b.preventDefault()}}}function y(a,b){var c;for(c=a;b>c&&n>c;c++)j[c]&&(C[c]=p(c))}function z(){B.val(C.join(""))}function A(a){var b,c,d,e=B.val(),f=-1;for(b=0,d=0;n>b;b++)if(j[b]){for(C[b]=p(b);d++<e.length;)if(c=e.charAt(d-1),j[b].test(c)){C[b]=c,f=b;break}if(d>e.length){y(b+1,n);break}}else C[b]===e.charAt(d)&&d++,k>b&&(f=b);return a?z():k>f+1?g.autoclear||C.join("")===D?(B.val()&&B.val(""),y(0,n)):z():(z(),B.val(B.val().substring(0,f+1))),k?b:l}var B=a(this),C=a.map(c.split(""),function(a,b){return"?"!=a?i[a]?p(b):a:void 0}),D=C.join(""),E=B.val();B.data(a.mask.dataName,function(){return a.map(C,function(a,b){return j[b]&&a!=p(b)?a:null}).join("")}),B.one("unmask",function(){B.off(".mask").removeData(a.mask.dataName)}).on("focus.mask",function(){if(!B.prop("readonly")){clearTimeout(b);var a;E=B.val(),a=A(),b=setTimeout(function(){B.get(0)===document.activeElement&&(z(),a==c.replace("?","").length?B.caret(0,a):B.caret(a))},10)}}).on("blur.mask",v).on("keydown.mask",w).on("keypress.mask",x).on("input.mask paste.mask",function(){B.prop("readonly")||setTimeout(function(){var a=A(!0);B.caret(a),h()},0)}),e&&f&&B.off("input.mask").on("input.mask",u),A()})}})});
$('#date').mask('9999.99.99');

$.fn.setCursorPosition = function(pos) {
  if ($(this).get(0).setSelectionRange) {
    $(this).get(0).setSelectionRange(pos, pos);
  } else if ($(this).get(0).createTextRange) {
    var range = $(this).get(0).createTextRange();
    range.collapse(true);
    range.moveEnd('character', pos);
    range.moveStart('character', pos);
    range.select();
  }
};

$('input[type="text"]').click(function(){
    $(this).setCursorPosition(4);  // set position number
  });
// mask date end

// scroll start
$('a[href*="#"]').on('click', function() {
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
  return false;
});
// scroll end


jQuery(function($){
$('.musicstart_one').on('click', function(){
$('.music_one').addClass('music-active');
$('.img-okey_one').addClass('img-okey-js');
});
});
jQuery(function($){
$('.musicstart_two').on('click', function(){
$('.music_two').addClass('music-active');
$('.img-okey_two').addClass('img-okey-js');
});
});
jQuery(function($){
$('.musicstart_three').on('click', function(){
$('.music_three')[0].play()
$('.music_three').addClass('music-active');
$('.img-okey_three').addClass('img-okey-js');
});
});
jQuery(function($){
$('.musicstart_four').on('click', function(){
$('.music_four').addClass('music-active');
$('.img-okey_four').addClass('img-okey-js');
});
});
jQuery(function($){
$('.musicstart_five').on('click', function(){
$('.music_five').addClass('music-active');
$('.img-okey_five').addClass('img-okey-js');
});
});
// video audio end


// miLib start
;(function() {
  window.myLib = {};

  window.myLib.body = document.querySelector('body');

  window.myLib.closestAttr = function(item, attr) {
    var node = item;

    while(node) {
      var attrValue = node.getAttribute(attr);
      if (attrValue) {
        return attrValue;
      }

      node = node.parentElement;
    }

    return null;
  };

  window.myLib.closestItemByClass = function(item, className) {
    var node = item;

    while(node) {
      if (node.classList.contains(className)) {
        return node;
      }

      node = node.parentElement;
    }

    return null;
  };

  window.myLib.toggleScroll = function() {
    myLib.body.classList.toggle('no-scroll');
  };
})();
// miLib end


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
                      <input type="hidden" name="name_product" value="${name}">
                      <input class="js-cart-input-price" type="hidden" name="price" value="${price * quantity},00 руб">
                      <input type="hidden" name="${id}" value="${id}">
                      <input type="hidden" name="price_one_name" value="${price * quantity}">
                      <input class="js-cart-input-quantity" type="hidden" name="quantity" value="${quantity}">
  
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
 
// Находим необходимые DOM-элементы
const cartTotalPriceDOMElement = document.querySelector('.js-cart-total-price');
const promotionalCodeInputDOMElement = document.querySelector('#promotional_code');

// Функция для обработки ввода промокода
const handlePromotionalCodeInput = () => {
    const enteredPromotionalCode = promotionalCodeInputDOMElement.value.toLowerCase(); // Приводим введенный промокод к нижнему регистру
  
    // Проверяем, является ли введенный промокод "VENERA"
    if (enteredPromotionalCode === 'venera') { // Используем нижний регистр для сравнения
        // Получаем текущую цену из DOM-элемента
        const currentPrice = parseFloat(cartTotalPriceDOMElement.textContent);
      
        // Вычисляем цену с учетом скидки (-10%)
        const discountedPrice = currentPrice * 0.9;
      
        // Устанавливаем новую цену с учетом скидки
        cartTotalPriceDOMElement.textContent = discountedPrice.toFixed(2);
    }
}

// Слушаем событие ввода промокода
promotionalCodeInputDOMElement.addEventListener('input', handlePromotionalCodeInput);
  
// form start
(function() {
  var forms = document.querySelectorAll('.form-send');

  if (forms.length === 0) {
    return;
  }

var serialize = function(form) {
  var items = form.querySelectorAll('.order, .order-form');
  var data = [];

  for (var i = 0; i < items.length; i += 1) {
    var item = items[i];
    var inputs = item.querySelectorAll('input');
    var cardData = {};

    for (var j = 0; j < inputs.length; j += 1) {
      var input = inputs[j];
      var name = input.getAttribute('name');
      var value = input.value;

      cardData[name] = value;
    }

    if (Object.keys(cardData).length > 0) {
      data.push(cardData);
    }
  }

  return data;
};
  
  var formSend = function(form) {
    var data = serialize(form);
    var xhr = new XMLHttpRequest();
    var url = WPJS.ajaxUrl + '?action=generate_sdek';
    xhr.open('POST', url);
    xhr.setRequestHeader('Content-Type', 'application/json');
    console.log(data)
    xhr.onload = function() {
      var activePopup = document.querySelector('.popup.is-active');

      if (activePopup) {
        activePopup.classList.remove('is-active');
      } else {
        myLib.toggleScroll();
      }

      var response = JSON.parse(xhr.responseText);

      if (response.success) {
        var link = response.link;
        window.location.href = link;
        
      } else {
        document.querySelector('.popup-error').classList.add('is-active');
      }
    };
    xhr.send(JSON.stringify(data));
  };

  for (var i = 0; i < forms.length; i += 1) {
    forms[i].addEventListener('submit', function(e) {
      e.preventDefault();
      var form = e.currentTarget;
      formSend(form);
    });
  }
})();

// (function() {
//   var forms = document.querySelectorAll('.form-send');

//   if (forms.length === 0) {
//     return;
//   }

//   var serialize = function(form) {
//     var items = form.querySelectorAll('input, select, textarea');
//     var data = {};

//     for (var i = 0; i < items.length; i += 1) {
//       var item = items[i];
//       var name = item.name;
//       var value = item.value;

//       if (value) {
//         data[name] = value;
//       }
//     }

//     return data;
//   };

//   var formSend = function(form) {
//     var data = new FormData(form);
//     var xhr = new XMLHttpRequest();
//     var url = WPJS.ajaxUrl + '?action=generate_link';
//     xhr.open('POST', url);
    
//     xhr.onload = function() {
//       var activePopup = document.querySelector('.popup.is-active');
  
//       if (activePopup) {
//         activePopup.classList.remove('is-active');
//       } else {
//         myLib.toggleScroll();
//       }
  
//       if (xhr.status === 200) {
//         var response = JSON.parse(xhr.responseText);
//         if (response.success) {
//           alert(response.link);
//           console.log(response.link);
//         } else {
//           document.querySelector('.popup-error').classList.add('is-active');
//           alert(response.error);
//           console.log(response.error);
//         }
//       } else {
//         console.error('Произошла ошибка при выполнении запроса');
//       }
//     };
    
//     xhr.send(data);
//   };
// foem end
  
 // popup active start 
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
// popup active end


// slider card product start
$(document).ready(function(){
  $('.slider-product--card').slick({
      arrows:false,
      dots:true,
      speed: 500,
      slidesToShow: 1,
      adaptiveHeight: true,
  });
});



// slider card product end


playElem.onclick = function() {
  if (videoElem.paused) {
    handleFullScreen();
    videoElem.play();
  };
};


// Открытие PopUp start
const openPopUp = document.querySelectorAll('.open-pop-up');
const closePopUp = document.querySelector('.pop-up__close');
const popUp = document.querySelector('.pop-up');
// const bePopup = document.querySelector('.b-popup');

  openPopUp.forEach(b=>b.addEventListener('click', function(e){
    e.preventDefault();
    popUp.classList.add('active-pop-up');

    closePopUp.addEventListener('click', () => {
      popUp.classList.remove('active-pop-up');
  });
}));

// Открытие PopUp end b-popup-hidden
$(document).ready(function(){
  //Скрыть PopUp при загрузке страницы 
  // bePopup.classList.add('active-pop-up');   
  PopUpHide();
});
//Функция отображения PopUp
function PopUpShow(){
  $("#popup1").show();
  document.body.classList.add('body-close');
}
//Функция скрытия PopUp
function PopUpHide(){
  $("#popup1").hide();
  document.body.classList.remove('body-close');
}

$(document).ready(function(){
  PopUpHideTwo();
});
function PopUpShowTwo(){
  $("#popup2").show();
  document.body.classList.add('body-close');
}
//Функция скрытия PopUp
function PopUpHideTwo(){
  $("#popup2").hide();
  document.body.classList.remove('body-close');
}

function PopUpShowActTwo(){
  $("#activet2").show();
  document.body.classList.add('body-close');
}
//Функция скрытия PopUp
function PopUpHideActTwo(){
  $("#activet2").hide();
  document.body.classList.remove('body-close');
}


$(document).ready(function(){
  PopUpHideThree();
});
function PopUpShowThree(){
  $("#popup3").show();
  document.body.classList.add('body-close');
}
//Функция скрытия PopUp
function PopUpHideThree(){
  $("#popup3").hide();
  document.body.classList.remove('body-close');
}

function PopUpShowFour(){
  $("#activet4").show();
  document.body.classList.add('body-close');
}
//Функция скрытия PopUp
function PopUpHideFour(){
  $("#activet4").hide();
  document.body.classList.remove('body-close');
}
function PopUpShowFive(){
  $("#activet5").show();
  document.body.classList.add('body-close');
}
//Функция скрытия PopUp
function PopUpHideFive(){
  $("#activet5").hide();
  document.body.classList.remove('body-close');
}


$(document).ready(function() { 

  $('[data-fancybox]').fancybox({
    buttons: [
      "slideShow",
      "thumbs",
      "zoom",
      "fullScreen",
    ],
    loop: false,
    arrows: true,
    infobar: false,
  });
});
