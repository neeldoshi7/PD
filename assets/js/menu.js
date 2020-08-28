!(function($) {
    "use strict";
    let data;
    const category = new Map();
    const subCategory = new Map();
    function getData(json) {
        console.log(json);
        data = json.feed.entry;
        console.log(data);
        populateDS(data);
    }
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
        populateButtons(category);
    }
    const populateButtons = category => {
        category.forEach((value, key) => {
            const markup1 = `<li class="filter-active">${key}</li>`;
            const markup2 = `<li>${key}</li>`;
            let button = document.getElementById('menu-flters');
            button.insertAdjacentHTML('beforeend', (value == 1)? markup1: markup2);
        })
    }

    $(window).on('load', function() {
        $('#menu-flters li').on('click', function() {
            $("#menu-flters li").removeClass('filter-active');
            $(this).addClass('filter-active');
            console.log($(this).data());
        });
    });
});