let data;
let pages;
const category = new Map();
const subCategory = new Map();
const pageNo = new Map();

$(document).on('click', '#menu-flters li', function() {
    $('#menu-flters li').removeClass('filter-active');
    $(this).addClass('filter-active');
    $('#menu-flters-sub').empty();
    let name = $(this).html();
    let val = category.get(name);
    if (subCategory.has(val)) {
        let sub = subCategory.get(val);
        let subarr = sub.split(",");
        populateSubCatButtons(subarr);
        $('#menu-flters-sub li.filter-active').click();
    } else {
        let number = getPageNo(name);
        // addScript(number);
    }
});

$(document).on('click', '#menu-flters-sub li', function() {
    $('#menu-flters-sub li').removeClass('filter-active');
    $(this).addClass('filter-active');
    let name = $(this).html();
    let number = getPageNo(name);
    // addScript(number);
});

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
    populateCatButtons(category);
    $("#menu-flters li.filter-active").click();
}

const populateCatButtons = category => {
    category.forEach((value, key) => {
        const markup1 = `<li class="filter-active">${key}</li>`;
        const markup2 = `<li>${key}</li>`;
        let cat = document.getElementById('menu-flters');
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
    console.log(pageNo);
    console.log(name);
    console.log(pageNo.get(name));
    console.log(pageNo.has("COLD SANDWICH"));
    console.log(pageNo['COLD SANDWICH']);
    console.log(typeof("COLD SANDWICH"));
    pageNo.forEach((value, key) => {
        console.log(value + " " + key);
        console.log(typeof(key));
    })
    return pageNo.get(name);
}

const addScript = number => {
    const id = `1TOS22E6iK6MfoVHkvK4pvNUJXcZZEw8rC_wL-GwouKI`;
    const src = `https://spreadsheets.google.com/feeds/cells/${id}/${number}/public/values?alt=json-in-script&callback=populateData`;
    var s = document.createElement('script');
    s.setAttribute('src', src);
    document.body.appendChild(s);
}

const populateData = json => {
    data = json.feed.entry;
    console.log(data);
}