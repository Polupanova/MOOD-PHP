function $(selector) {
    return document.querySelector(selector);
}
var $$ = function(selector) {
    return [].slice.call(document.querySelectorAll(selector));
}
function pageSlider(selector,toX) {
    var sliders = $(selector);
    if (!sliders) {
        return false;
    }
    var slides = sliders.querySelectorAll('.slider-box');
    slides = [].slice.call(slides);
    //generate pages
    var paginator = sliders.querySelector('.navigation-ellipse-nav');
    var pages = [];
    while (paginator.hasChildNodes()) {
        paginator.removeChild(paginator.lastChild);
    }
    for (var i in slides) {
        var page = document.createElement('button');
        page.setAttribute('type', 'button');
        page.classList.add('ellipse');
        paginator.appendChild(page);
        pages.push(page);
    }

    // create slide functions
    var activePage = 0;

    var setActivePage = function(index) {
        if (index >= 0 && index < pages.length) {
            activePage = index;
            for (var i in pages) {
                pages[i].classList.remove('active');
            }
            pages[activePage].classList.add('active')
        }
    }
    var slideTo = function(index) {
        if (index >= 0 && index < slides.length) {
            setActivePage(index);
            slides.forEach(function(slide) {
                var slideValue = -100 * activePage;
                slide.style.transform = ((toX) ? 'translateY(' : 'translateX(') + slideValue + '%)';
            })
        }
    }
    var slideToNext = function() {
        if (activePage === slides.length - 1) {
            slideTo(0);
        } else {
            slideTo(activePage + 1)
        }
    }
    var slideToPrev = function() {
        if (activePage === 0) {
            slideTo(slides.length - 1);
        } else {
            slideTo(activePage - 1)
        }
    }
    for (var i in pages) {
        pages[i].onclick = function(i, e) {
            e && e.preventDefault();
            slideTo(parseInt(i))
        }.bind(null, i)
    }
    slideTo(0);
}
pageSlider('#team-slider');
pageSlider('#main-slider','toY');
