let data;
const category = new Map();
const subCategory = new Map();

function getData(json) {
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
    // $("#menu-flters:first-child").trigger('click');
}

const populateCatButtons = (category) => {
    category.forEach((value, key) => {
        const markup1 = `<li class="filter-active">${key}</li>`;
        const markup2 = `<li>${key}</li>`;
        let cat = document.getElementById('menu-flters');
        cat.insertAdjacentHTML('beforeend', (value == 1)? markup1: markup2);
    })
}

const populateSubCatButtons = (sub) => {
    sub.forEach((el, value) => {
        const markup1 = `<li class="filter-active">${el}</li>`;
        const markup2 = `<li>${el}</li>`;
        let cat = document.getElementById('menu-flters-sub');
        cat.insertAdjacentHTML('beforeend', (value == 0)? markup1: markup2);
    })
}

const catClick = () => {
    $("#menu-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');
    $("#menu-flters-sub").empty();
    let name = $(this).html();
    let val = category.get(name);
    if (subCategory.has(val)) {
        let sub = subCategory.get(val);
        let subarr = sub.split(",");
        populateSubCatButtons(subarr);
        // $("#menu-flters-sub:first-child").trigger('click');
    } else {

    }
}

$(window).on('load', function() {
    $('#menu-flters li').on('click', catClick);
});

const subCatClick = () => {
    $("#menu-flters-sub li").removeClass('filter-active');
    $(this).addClass('filter-active');
    let name = $(this).html();
    console.log(name);
}

$(document).on('click', '#menu-flters-sub li', subCatClick);

// $(window).on('load', function() {
//     $('#menu-flters-sub li').on('click', function() {
//         console.log("clicked");
//         $("#menu-flters-sub li").removeClass('filter-active');
//         $(this).addClass('filter-active');
//         let name = $(this).html();
//         console.log(name);
//     });
// });