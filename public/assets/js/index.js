function searchToggle(obj, evt) {
    var container = $(obj).closest('.search-wrapper');
    if (!container.hasClass('active')) {
        container.addClass('active');
        evt.preventDefault();
    } else if (container.hasClass('active') && $(obj).closest('.input-holder').length == 0) {
        container.removeClass('active');
        // clear input
        container.find('.search-input').val('');
    }
}
$(function() {
    setTimeout(function() {
        jQuery("#loading").fadeOut(1500);
    }, 2000);
});
const burgerMenu = document.getElementById("burger");
const navbarMenu = document.getElementById("menu");
const menuitem = document.getElementsByClassName("dropdownitem");

// Show and Hide Navbar Menu
burgerMenu.addEventListener("click", () => {
	burgerMenu.classList.toggle("is-active");
	navbarMenu.classList.toggle("is-active");

	if (navbarMenu.classList.contains("is-active")) {
		navbarMenu.style.maxHeight = navbarMenu.scrollHeight + "px";
	} else {
		navbarMenu.removeAttribute("style");
	}
});

$(document).ready(function() {
        $('.dropdown-link').click(function(e){
            e.preventDefault();
        })
            $(menuitem).click(function() {
            if($(window).width() <= 1024) {
                $(this).children(".dropdown-menu").toggleClass("blockdiv")
            } 
            })
            document.getElementById('vid').play();
       
})


$('#owl-carousel--opinion').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 2,
            nav: true,
            loop: false
        }
    }
})

// $('.owl-carousel').owlCarousel({
//     loop: true,
//     margin: 10,
//     responsiveClass: true,
//     responsive: {
//         0: {
//             items: 1,
//             nav: true
//         },
//         600: {
//             items: 1,
//             nav: false
//         },
//         1000: {
//             items: 3,
//             nav: true,
//             loop: false
//         }
//     }
// })
$('#projects-carousel').owlCarousel({
    loop: true,
    nav:false,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 1,
            nav: false
        },
        1000: {
            items: 1,
            nav: true,
            loop: false
        }
    }
})

$(document).ready(function() {
    $(".left-flex").click(function() {
        $("html , body").animate({ scrollTop: $(".main-blogs").height() - 800 },
            100
        );
    });

    //navbar change section
    $(".nav-link").on('click', function(event) {

        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {

            });
        }
    });
})
const toggle = () => {
    const nav = document.getElementById("topnav");
    nav.className === "topnav" ? nav.className += " responsive" : nav.className = "topnav";
};

        