let data;
let pages;
const category = new Map();
const subCategory = new Map();
const pageNo = new Map();
let code = [];
let title = [];
let description = [];
let price = [];

const getPages = json => {
    pages = json.feed.entry;
    populatePages(pages);
}

const populatePages = pages => {
    for (let i = 0; i < pages.length; i += 2) {
        pageNo.set(pages[i].gs$cell.$t, pages[i + 1].gs$cell.$t);
    }
}

const getData = json => {
    data = json.feed.entry;
    populateDS(data);
}

const populateDS = data => {
    data.forEach(el => {
        if (el.gs$cell.row != 1) {
            if (el.gs$cell.col == 1)
                category.set(el.gs$cell.$t, el.gs$cell.row - 1);
            else
                subCategory.set(el.gs$cell.row - 1, el.gs$cell.$t);
        }
    });
    populateDropdown(category, subCategory);
}

const populateDropdown = (category, subCategory) => {
    let select = document.querySelector('#Categories');
    let markup = "";
    category.forEach((value, key) => {
        if (subCategory.has(value)) {
            let sub = subCategory.get(value);
            let subarr = sub.split(",");
            markup = `<optgroup label="${key}">`;
            subarr.forEach(val => {
                markup += `<option value="${val}">${val}</option>`;
            })
            markup += `<optgroup>`;
        } else {
            markup = `<option value="${key}">${key}</option>`
        }
        select.insertAdjacentHTML('beforeend', markup);
    })
    populateDisplay();
}

const populateDisplay = () => {
    let select = document.querySelector("#Categories");
    let page = getPageNo(select.value);
    addScript(page);
}

const getPageNo = name => {
    return pageNo.get(name);
}

const addScript = number => {
    const id = `1TOS22E6iK6MfoVHkvK4pvNUJXcZZEw8rC_wL-GwouKI`;
    const src = `https://spreadsheets.google.com/feeds/cells/${id}/${number}/public/values?alt=json-in-script&callback=populateData`;
    var s = document.createElement('script');
    s.setAttribute('src', src);
    document.body.appendChild(s);
}

const getItems = json => {
    data = json.feed.entry;
    populateData(data);
    addHTML(data);
}

const populateData = json => {
    data = json.feed.entry;
    $('#Category1').empty();
    code = [];
    title = [];
    description = [];
    price = [];
    let c = 0;
    data.forEach(el => {
        if (el.gs$cell.row == 1) {
            c++;
        } else {
            if (c === 2) {
                if (el.gs$cell.col == 1) {
                    title.push(el.gs$cell.$t);
                } else if (el.gs$cell.col == 2) {
                    price.push(el.gs$cell.$t);
                }
            } else if (c === 4) {
                if (el.gs$cell.col == 1) {
                    code.push(el.gs$cell.$t);
                } else if (el.gs$cell.col == 2) {
                    title.push(el.gs$cell.$t);
                } else if (el.gs$cell.col == 3) {
                    description.push(el.gs$cell.$t);
                } else if (el.gs$cell.col == 4) {
                    price.push(el.gs$cell.$t);
                }
            }
        }
    })
    displayData(c);
}

const displayData = c => {
    let cat1 = document.querySelector('#Category1');
    if (c == 4) {
        for (let i = 0; i < title.length; i++) {
            let markup = `<div class="itemDiv d-flex flex-column">
                            <div class="d-flex flex-row itemFirstDiv">
                                <div class="itemInfo">
                                    <div class="itemName"><span>${code[i]}</span>  ${title[i]}</div>
                                    <div class="itemDescription">${description[i]}</div>
                                </div>
                                <div class="itemPrice">${price[i]}</div>
                            </div>
                            <div class="addToCart">
                                <button class="btn buttonAddToCart" data-id="${i}"  data-toggle="modal" data-target="#myModal" >Add</button>
                            </div>
                        </div>`
            cat1.insertAdjacentHTML('beforeend', markup);
        }
    } else if (c == 2) {
        for (let i = 0; i < title.length; i++) {
            let markup = `<div class="itemDiv d-flex flex-column">
                            <div class="d-flex flex-row itemFirstDiv">
                                <div class="itemInfo">
                                    <div class="itemName">${title[i]}</div>
                                </div>
                                <div class="itemPrice">${price[i]}</div>
                            </div>
                            <div class="addToCart">
                                <button class="btn buttonAddToCart" data-id="${i}" data-toggle="modal" data-target="#myModal">Add</button>
                            </div>
                        </div>`
            cat1.insertAdjacentHTML('beforeend', markup);
        }
    }
}

$(document).on('click', '.buttonAddToCart', function() {
    console.log($(this).data('id'));
})
