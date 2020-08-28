let data;
const category = new Map();
const subCategory = new Map();
function getData(json) {
    data = json.feed.entry;
    populateDS(data);
}
let id = 'menu-flters';
let subid = 'menu-flters-sub';
const populateDS = data => {
    data.forEach(el => {
        if (el.gs$cell.row != 1) {
            if (el.gs$cell.col == 1) 
                category.set(el.gs$cell.$t, el.gs$cell.row - 1);
            else 
                subCategory.set(el.gs$cell.row - 1, el.gs$cell.$t);
        }
    });
    populateButtons(category, id);
}
const populateButtons = (category, id) => {
    category.forEach((value, key) => {
        const markup1 = `<li class="filter-active">${key}</li>`;
        const markup2 = `<li>${key}</li>`;
        let cat = document.getElementById(id);
        cat.insertAdjacentHTML('beforeend', (value == 1)? markup1: markup2);
    })
}

$(window).on('load', function() {
    $('#menu-flters li').on('click', function() {
        $("#menu-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');
        let name = $(this).html();
        console.log(name);
        let val = category.get(name);
        if (subCategory.has(val)) {
            let sub = subCategory.get(val);
            console.log(sub);
            let subarr = sub.split(",");
            console.log(subarr);
            populateButtons(subarr, subid);
        } else {

        }
    });
});