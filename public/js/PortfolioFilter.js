//items
var items = [{
    pictureid: 2,
    title: "Proin gravida nibh vel velit",
    slug: "identity",
    image: "img/photo-02.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-03.jpg"
}, {
    pictureid: 3,
    title: "Proin gravida nibh vel velit",
    slug: "foto",
    image: "img/photo-04.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-05.jpg"
}, {
    pictureid: 2,
    title: "Proin gravida nibh vel velit",
    slug: "foto-design",
    image: "img/photo-06.jpg"
}, {
    pictureid: 0,
    title: "Proin gravida nibh vel velit",
    slug: "identity",
    image: "img/photo-01.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-07.jpg"
}, {
    pictureid: 3,
    title: "Proin gravida nibh vel velit",
    slug: "foto",
    image: "img/photo-08.jpg"
}, {
    pictureid: 0,
    title: "Proin gravida nibh vel velit",
    slug: "identity",
    image: "img/photo-09.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-10.jpg"
}, {
    pictureid: 3,
    title: "Proin gravida nibh vel velit",
    slug: "foto",
    image: "img/photo-12.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-13.jpg"
}, {
    pictureid: 2,
    title: "Proin gravida nibh vel velit",
    slug: "foto-design",
    image: "img/photo-14.jpg"
}, {
    pictureid: 0,
    title: "Proin gravida nibh vel velit",
    slug: "identity",
    image: "img/photo-15.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-16.jpg"
}, {
    pictureid: 3,
    title: "Proin gravida nibh vel velit",
    slug: "foto",
    image: "img/photo-11.jpg"
}, {
    pictureid: 0,
    title: "Proin gravida nibh vel velit",
    slug: "identity",
    image: "img/photo-17.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-19.jpg"
}, {
    pictureid: 3,
    title: "Proin gravida nibh vel velit",
    slug: "foto",
    image: "img/photo-20.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-18.jpg"
}, {
    pictureid: 2,
    title: "Proin gravida nibh vel velit",
    slug: "foto-design",
    image: "img/photo-22.jpg"
}, {
    pictureid: 0,
    title: "Proin gravida nibh vel velit",
    slug: "identity",
    image: "img/photo-21.jpg"
}, {
    pictureid: 1,
    title: "Proin gravida nibh vel velit",
    slug: "web-design",
    image: "img/photo-24.jpg"
}, {
    pictureid: 3,
    title: "Proin gravida nibh vel velit",
    slug: "foto",
    image: "img/photo-23.jpg"
}];

// items-navigation
var categories = [
    "Identitāte",
    "Web dizains",
    "Aplikāciju dizains",
    "Fotogrācija"
];

//variables
var worksection = document.querySelector("#work");
var displayItems = document.querySelector(".collage-items");
var itemsBtns = worksection.querySelectorAll('.navigation-link');
var workNav = document.querySelector(".work-navigation");



//navigation-menu
function gallerynavigation() {
    var itemsnav = "<button pictureid='-1'class='navigation-link active'>Viss</button>";
    for (var i = 0; i < categories.length; i++) {
        itemsnav += "<button pictureid='" + i + "'class='navigation-link'>" + categories[i] + "</button>";
    }
    workNav.innerHTML = itemsnav;
}


//portfolio-slider-item-build
function galleryItems(activeItems) {
    var pagedList = [];
    for (var i = 0; i < activeItems.length; i += 8) {
        var pagedactiveItems = activeItems.slice(i, i + 8);
        var pagedcontent = [];
        for (var j = 0; j < pagedactiveItems.length; j++) {
            var href = "pictureid-" + pagedactiveItems[j].pictureid + "/" + pagedactiveItems[j].slug;
            pagedcontent.push('<a href="' + href + '" class="picture-collage-list">' +
                '<div class="picture-collage-image">' +
                '<img class="collage-foto" src="' + pagedactiveItems[j].image + '">' +
                '<div class="picture-collage-overlay">' +
                '<div class="picture-collage-info">' +
                '<img src="img/ellipse.png" class="picture-collage-icon">' +
                '<div class="portfolio-collage-heading">' + pagedactiveItems[j].title + '</div>' +
                "Fotogrāfija" + " - " + categories[pagedactiveItems[j].pictureid] + '</div>\</div>\</div>' +
                '</a>');
        }
        pagedcontent = pagedcontent.join("");
        pagedList.push('<div class="slider-box">' + pagedcontent + '</div>');
    }
    pagedList = pagedList.join("");
    displayItems.innerHTML = pagedList;
    pageSlider('#work-slider');

};
galleryItems(items);
gallerynavigation();



//filter by pictureid
function filterLinks(pictureid) {
    var filteredItems = [];
    if (pictureid == -1) {
        filteredItems = items;
    } else {
        filteredItems = items.filter(function (item) {
            return item.pictureid == pictureid;
        });
    }
    galleryItems(filteredItems);
    pageSlider('#work-slider');
}


// button-active
var itemsBtns = document.querySelectorAll('.navigation-link');
for (var n = 0; n < itemsBtns.length; n++) {
    itemsBtns[n].onclick = makeActiveBtns;

}

function makeActiveBtns() {
    var navContainer = this.closest('.work-navigation');
    var itemsBtns = navContainer.querySelectorAll('.navigation-link');
    for (var k = 0; k < itemsBtns.length; k++) {
        itemsBtns[k].classList.remove('active');
    }
    this.classList.add('active');
    var pictureid = parseInt(this.getAttribute("pictureid"));
    filterLinks(pictureid);
}
