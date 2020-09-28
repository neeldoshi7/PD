console.log(state);
console.log(Cart);

state.cart.items.forEach(el => {
    markup = `<div class="cart-item">
                <div class="cart-item-div d-flex flex-column">

                <div class="cart-item-info d-flex flex-row justify-content-between">
                    <div class="d-flex flex-row">
                    <div class="cart-item-name">Item 1</div>
                    <div class="cart-item-x">x</div>
                    <div class="cart-item-quantity">3</div>
                    </div>
                    <div class="cart-item-totalcost">Price</div>
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
            markjup += `<div class="cart-item-extra-item">Cheese</div>
                        </div>`;
        }
    }
    markup += `<div class="cart-item-finaldiv d-flex flex-row justify-content-between">`;
    if (instructions !== '') {
        markup += 
    }
});