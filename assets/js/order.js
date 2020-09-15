let data;
let pages;
const category = new Map();
const subCategory = new Map();
const pageNo = new Map();

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
    console.log(category);
    console.log(subCategory);
    // populateCatDropdown(category);
    // $("#menu-flters li.filter-active").click();
    populateDropdown(category, subCategory);
}

const populateDropdown = (category, subCategory) => {
    let select = document.querySelector('.Categories');
    category.forEach((value, key) => {
        if (subCategory.has(value)) {
            markup = `<optgroup label="${key}">`;
            markup += `<optgroup>`;
            console.log(markup);
        }
    })
}

const populateCatDropdown = category => {
    category.forEach((value, key) => {
        const markup1 = `<a class="dropdown-item" selected>${key}</a>`;
        const markup2 = `<a class="dropdown-item" >${key}</a>`;
        let cat = document.querySelector('.cat');
        cat.insertAdjacentHTML('beforeend', (value == 1)? markup1: markup2);
    })
}

const populateSubCatButtons = sub => {
    sub.forEach((el, value) => {
        const markup1 = `<li class="filter-active">${el}</li>`;
        const markup2 = `<li>${el}</li>`;
        let cat = document.getElementById('menu-flters-sub');
        cat.insertAdjacentHTML('beforeend', (value == 0)? markup1: markup2);
    })
}

const getPageNo = name => {
    return pageNo.get(name);
}