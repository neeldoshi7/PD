let extras;

if (!state.cart) {
    state.cart = new Cart();
    const storage = localStorage.getItem('cart');
    if (storage !== 'undefined' && storage !== null) {
        state.cart.items = JSON.parse(storage);
    }
}

if (state.cart.items.length == 0) {
    $('.cart-div').empty();
}

state.cart.items.forEach(el => {
    let cart = document.querySelector('.cart-div');
    markup = `<div class="cart-item">
                <div class="cart-item-div d-flex flex-column">

                <div class="cart-item-info d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row">
                    <div class="cart-item-name">${el.name}</div>
                    <div class="cart-item-x">x</div>
                    <div class="cart-item-quantity">${el.quantity}</div>
                    </div>
                    <div class="cart-item-totalcost">$${el.totalcost}</div>
                </div>`;
    if (el.extras.meat === 1 || el.extras.cheese === 1) {
        markup += `<div class="cart-item-extra-div d-flex flex-row">
                    <div class="cart-item-extra-title">Extras :</div>`;
        if (el.extras.meat === 1 && el.extras.cheese === 0) {
            markup += `<div class="cart-item-extra-item">Meat</div>
                        </div>`;
        } else if (el.extras.meat === 1 && el.extras.cheese === 1) {
            markup += `<div class="cart-item-extra-item">Meat</div>
                        <div class="cart-item-extra-comma">,</div>
                        <div class="cart-item-extra-item">Cheese</div>
                        </div>`;
        } else if (el.extras.cheese === 1 && el.extras.meat === 0) {
            markup += `<div class="cart-item-extra-item">Cheese</div>
                        </div>`;
        }
    }
    markup += `<div class="cart-item-finaldiv d-flex flex-row justify-content-between">`;
    markup += `<div class="cart-item-instructions-div"><div class="cart-item-instructions">${el.instructions}</div></div>`;
    markup += `<div class="cart-item-delete"><button class="btn cart-item-delete-button">Delete</button></div>
                </div>
            </div>
            </div>`;
    cart.insertAdjacentHTML('beforeend', markup);
});

$(document).on('click', '.cart-item-delete-button', function() {
    let name = $(this).parent().parent().parent().children('.cart-item-info').children('.flex-row').children('.cart-item-name').text();
    state.cart.deleteItem(name);
    console.log(state.cart.items);
    if (state.cart.items.length == 0) {
        $('.cart-div').empty();
    }
    location.reload();
})

if ($('.cart-div').is(':empty')) {
    $('.cart-header-empty').css('display', 'block');
}

const addExtrasScript = number => {
    const id = `1TOS22E6iK6MfoVHkvK4pvNUJXcZZEw8rC_wL-GwouKI`;
    const src = `https://spreadsheets.google.com/feeds/cells/${id}/${number}/public/values?alt=json-in-script&callback=getExtras`;
    var s = document.createElement('script');
    s.setAttribute('src', src);
    document.body.appendChild(s);
}

const getExtras = json => {
    extras = json.feed.entry;
    displayExtras(extras);
}

$(document).on('click', '.tabs li a', function() {
    console.log($(this));
    $('.tabs li a').removeClass('modal-active');
    $(this).addClass('modal-active');
    console.log($(this).data().value);
    addExtrasScript($(this).data().value);
})

const displayExtras = extras => {
    console.log(extras);
}