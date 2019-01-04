"use strict";

//Esc Key
$.fn.escape = function(callback) {
    return this.each(function() {
        jQuery(document).on("keydown", this, function(e) {
            var keycode = ((typeof e.keyCode != 'undefined' && e.keyCode) ? e.keyCode : e.which);
            if (keycode === 27) {
                callback.call(this, e);
            };
        });
    });
};

//Menu Navigation Hamburger
var navigationRight = jQuery('.menu-wrap');

function Navigation() {
    var bodyEl = document.body,
        content = document.querySelector('#close-button'),
        openbtn = document.getElementById('open-button'),
        closebtn = document.getElementById('close-button'),
        isOpen = false;

    function init() {
        initEvents();
    }

    function initEvents() {
        openbtn.addEventListener('click', toggleMenu);
        if (closebtn) {
            closebtn.addEventListener('click', toggleMenu);
        }

        // close the menu element if the target it´s not the menu element or one of its descendants..
        content.addEventListener('click', function(ev) {
            var target = ev.target;
            if (isOpen && target !== openbtn) {
                toggleMenu();
            }
        });
    }

    function toggleMenu() {
        if (isOpen) {
            classie.remove(bodyEl, 'show-menu');
        } else {
            classie.add(bodyEl, 'show-menu');
        }
        isOpen = !isOpen;
    }

    navigationRight.escape(function() {
        if (isOpen) {
            classie.remove(bodyEl, 'show-menu');
            classie.remove(openbtn, 'active')
        }
        isOpen = !isOpen;
    });

    init();
};

//Tabs
function Tabs() {
    [].slice.call(document.querySelectorAll('.ef-tabs')).forEach(function(el) {
        new CBPFWTabs(el);
    });
};

//Dribble
function getDribbbleThumbs() {
    jQuery.jribbble.setToken(dribbbleToken);
    jQuery.jribbble.users(dribbbleName).shots({
        per_page: numberOfItems
    }).then(function(shots) {
        var html = [];
        shots.forEach(function(shot) {
            html.push('<div class="col-md-4 col-sm-4 col-xs-12 mix">');
            html.push('<div class="img dribbble-shot">');
            html.push('<img src="' + shot.images.normal + '">');
            html.push('<div class="overlay-thumb">');
            html.push('<div class="details">');
            html.push('<span class="title">' + shot.title + '</span>');
            html.push('</div>');
            html.push('<span class="btnBefore"></span><span class="btnAfter"></span>');
            html.push('<a class="main-portfolio-link" href="' + shot.html_url + '" target="_blank">');
            html.push('</div>');
            html.push('</div>');
            html.push('</div>');
        });
        jQuery('#work-grid').html(html.join(''));
    });
};

//Social Share Buttons
function getSocialButtons() {
    var socialButtonsEx = jQuery('.social-buttons');
    if (socialButtonsEx.length > 0) {
        jQuery('[data-social]').socialButtons();
    }
};

//Scroll Top
$.fn.scrollToTop = function() {
    jQuery(this).hide().removeAttr('href');
    if (jQuery(window).scrollTop() != '0') {
        jQuery(this).fadeIn('slow')
    }
    var scrollDiv = jQuery(this);
    jQuery(window).scroll(function() {
        if (jQuery(window).scrollTop() == '0') {
            jQuery(scrollDiv).fadeOut('slow')
        } else {
            jQuery(scrollDiv).fadeIn('slow')
        }
    });
    jQuery(this).on('click', function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 'slow')
    })
};

//Detect Mobile
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

//Parallax Scroll
function parallaxScroll() {
    var scrolledY = jQuery(window).scrollTop();
    var headerImage = jQuery('.ef-parallax-bg');
    headerImage.css('background-position', 'center -' + ((scrolledY * 0.4)) + 'px');
};

//History Slider
function historySlider() {
    //History Images slide
    var historyimages = jQuery('#history-images');
    if (historyimages.length > 0) {
        historyimages.owlCarousel({
            singleItem: true,
            pagination: false,
            autoPlay: 2000,
            slideSpeed: 300
        });
    }
};

//Like
function likeEf() {
    jQuery('.like-product').on('click',  function() {
        jQuery(this).find('i').toggleClass('press');
        jQuery(this).find('i').removeClass('ion-ios-heart-outline');
        jQuery(this).find('span.like-product').toggleClass('press');
        if (jQuery(this).find('i').hasClass('press') || jQuery(this).find('i').hasClass('ion-ios-heart-outline')) {
            jQuery(this).find('.output').html(function(i, val) {
                return val * 1 + 1
            });
            jQuery(this).find('i').addClass('ion-ios-heart');
            jQuery(this).find('i').removeClass('ion-ios-heart-outline');
        } else {
            jQuery(this).find('.output').html(function(i, val) {
                return val * 1 - 1
            });
            jQuery(this).find('i').removeClass('ion-ios-heart');
            jQuery(this).find('i').addClass('ion-ios-heart-outline');

        }
    });
};

//Document Ready
jQuery(document).ready(function($) {

    //Navigation Sub Menu Triggering
    jQuery('.menu-item-has-children, .page_item_has_children').hover(function() {
        jQuery(this).children('.sub-menu').stop().slideDown(200);
    },
    function() {
        jQuery(this).children('.sub-menu').stop().slideUp(200);
    });

    //Mobile Menu Open/Close
    jQuery('#open-mobile-menu').on('click', function() {
        var self = jQuery(this);
        var mobileMenu = jQuery('.menu-wrap-2');

        if (mobileMenu.hasClass('is-open')) {
            self.removeClass('active');
            mobileMenu.removeClass('is-open');
        } else {
            mobileMenu.addClass('is-open');
            self.addClass('active');
        }
    });

    //Dribbble
    if (jQuery('.dribble-grid').length > 0) {
        getDribbbleThumbs();
    };

    //Menu Right Side
    if (navigationRight.length > 0) {
        Navigation();
    };

    //Parallax Background on Desktop
    if (!isMobile.any()) {
        jQuery(window).on('scroll', function() {
            parallaxScroll();
        });
    };

    // Switch class on filter
    var showfilter = jQuery('.works-filter');
    jQuery('button.nav').on('click', function() {
        var self = jQuery(this);
        self.toggleClass('open');
        showfilter.toggleClass('open');
    });

    //Architecure Slider
    var archSlider = jQuery('#arch-slider');
    var prev = jQuery('.prev-slide');
    var next = jQuery('.next-slide');
    //Arch slider
    if (archSlider.length > 0) {
        archSlider.owlCarousel({
            singleItem: true,
            pagination: false,
            autoPlay: 5000,
            slideSpeed: 300,

        });
        prev.on('click', function() {
            archSlider.trigger('owl.prev');
        });
        next.on('click', function() {
            archSlider.trigger('owl.next');
        });
    };

    //Single Project Slider
    var singleProjectSlider = jQuery('.single-slider');
    if (singleProjectSlider.length > 0) {
        singleProjectSlider.owlCarousel({
            singleItem: true,
            pagination: false,
            autoPlay: 5000,
            slideSpeed: 300,

        });
        prev.on('click', function() {
            singleProjectSlider.trigger('owl.prev');
        });
        next.on('click', function() {
            singleProjectSlider.trigger('owl.next');
        });
    };

    //Team Slider
    var teamMembers = jQuery('.team');
    if (teamMembers.length > 0) {
        teamMembers.owlCarousel({
            pagination: true,
            items: 3,
            margin: 20,
            autoHeight: true,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [980, 2],
            itemsTablet: [768, 2],
            itemsMobile: [479, 1]
        });
    };

    //Tabs Slider
    var tabsSlider = jQuery('#tabs-slider');
    if (tabsSlider.length > 0) {
        tabsSlider.owlCarousel({
            singleItem: true,
            pagination: false,
            autoPlay: 3000,
            slideSpeed: 600,
        });
    };

    //Search
    var wrap = jQuery('.js-ui-search');
    var close = jQuery('.js-ui-close');
    var input = jQuery('.js-ui-text');
    close.on('click', function() {
        wrap.toggleClass('open');
    });
    input.on('transitionend webkitTransitionEnd oTransitionEnd', function() {
        if (wrap.hasClass('open')) {
            input.focus();
        } else {
            return;
        }
    });

    //Finished loader
    Pace.on("done", function() {
        jQuery(".cover").addClass('animated fadeOutRight').fadeOut(1000);
    });

    //Magnific Popup
    jQuery('.popup-video').magnificPopup({
        type: 'iframe',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

    //Kenburnsy Slides
    jQuery('#slider-ef').kenburnsy();

    //Scroll Top
    jQuery('#scroll-top').scrollToTop();

    //Like
    likeEf();

    //Slider
    historySlider();

    //Get social sharing
    getSocialButtons();

    //Init Tabs
    Tabs();

    //WOW Animation init
    new WOW().init();

});

function feedToNewslist(data,state,feed){
  if(state=="success"){
    var feedXml = data
    var newsXMLs = $('entry',feedXml)
    var newsUl = $('ul#newslist')
    var newsArray = []
    var newsXML
    var news
    var dateString
    newsXMLs.each(function(idx,newsXML){
      newsArray.push({
        title:$('title',newsXML).text(),
        href:$('link',newsXML).attr('href').replace("https://"+"utmed-mayfes.net",""),//document.domainに変換
        contents:$('summary',newsXML).text(),
        release:$('updated',newsXML).text()
      });
    })
    if(newsArray.length<1){
      return ;
    }
    newsUl.text("")
    newsArray.sort(function(a,b){
    if(a.release>b.release) return -1;
    if(a.release < b.release) return 1;
    return 0;})
    for(var i=0;i<newsArray.length;i++){
      news=newsArray[i]
      dateString=news.release.split(/[-T:\.\+]/)
      newsUl.append('<li class="list-group-item"><a href="'+
        news.href+'"><article><p><small><i class="icon-calendar"></i><time datetime="'+
        news.release+'"> '+dateString[0]+'/'+dateString[1]+'/'+dateString[2]+
        '</time></small></p><h4 class="list-group-item-heading">'+
        news.title+'</h4><p class="list-group-item-text">'+
        news.contents+'</p></article></a></li>')
    }
   }
}

//Window Load
jQuery(window).load(function($) {

    /*Init Portfolio*/
    var container = jQuery("#work-grid");
    if (container.length > 0) {
        container.isotope({
            layoutMode: 'masonry',
            transitionDuration: '0.7s',
            columnWidth: 60
        });
    };

    //Filter Portfolio
    jQuery('a.filter').on('click', function() {
        var to_filter = jQuery(this).attr('data-filter');
        if (to_filter == 'all') {
            container.isotope({
                filter: '.mix'
            });
        } else {
            container.isotope({
                filter: '.' + to_filter
            });
        }
    });

    //Switch Classes portfolio
    jQuery('.filter').on('click', function() {
        jQuery('a.filter').removeClass('active');
        jQuery(this).addClass('active');
    });
    jQuery.get("/feed.xml",feedToNewslist)//localで動かすときは..
});





//書き加え
function headerSticky(){
    var scrolledY = jQuery(window).scrollTop();
    var preheaderPosition = jQuery('.preheader').offset().top;
    //alert(scrolledY);
    if (scrolledY > preheaderPosition) {
        //alert(headerScroll)
        jQuery('.header').css('position', 'fixed');
        jQuery('.header').css('top', 0 + 'px');
        jQuery('.postheader').css('height', '100px');
    }else if (preheaderPosition > scrolledY){
        jQuery('.header').css('position', 'static');
        jQuery('.postheader').css('height', '0px');
    };
};

function changecolor(){
    var scrolled = jQuery(window).scrollTop();
    var pageheight = document.body.scrollHeight;

    var x = (scrolled)/pageheight;
    var r = Math.round(Math.max(255,122+255*x));
    var g = Math.round(122 - 122 * x);
    var b = Math.round(255 * x);
    document.body.style.backgroundColor='rgba(' + r + ',' + g + ',' + b + ',' + Math.min(0.1,7*x) + ')';

};


function changeBackground(){
    var scrolledY = jQuery(window).scrollTop();
    var landmarkPosition = jQuery('.scroll-landmark').offset().top;
    var windowHeight = jQuery(window).height();
    

    if(scrolledY > landmarkPosition) {
        var scroll = Math.min(1, 2*(scrolledY - landmarkPosition) / windowHeight);
        var x = 255 - Math.round(255 * scroll);
        document.body.style.backgroundColor = 'rgba(' + x + ',' + x + ',' + x + ',' + '1 )';
    };
};


jQuery(window).on('scroll', function() {
    headerSticky();
    //changeBackground();
    //changeclor();
});
