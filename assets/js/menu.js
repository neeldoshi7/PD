let data;
const category = new Map();
const subCategory = new Map();
function getData(json) {
    console.log(json);
    data = json.feed.entry;
    console.log(data);
    populateDS(data);
}
const cat = document.getElementById('menu-flters');
const subcat = document.getElementById('menu-flters-sub');
console.log(cat);
console.log(subcat);
const populateDS = data => {
    console.log(data);
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
    populateButtons(category, cat);
}
const populateButtons = (category, cat) => {
    category.forEach((value, key) => {
        const markup1 = `<li class="filter-active">${key}</li>`;
        const markup2 = `<li>${key}</li>`;
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
            populateButtons(subarr, subcat);
        } else {

        }
    });
});