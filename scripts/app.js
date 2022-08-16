const hamburger = $(".hamburger");
const navLink = $(".navbar__link");

// When document ready
$(document).ready(function () {
    // Only show scroller buttons if content is overflowing
    toggleScroller()

    // Start form validation listener
    // if ($("#contactForm").length) {
    //     validate();
    //     $("#name, #email, #subject, #message").keyup(validate);
    // }

    // Hide success message - to be revealed on form submission
    let message = $('.form__message');
    message.hide();
    let messageValue = getUrlParameter('message');
    // console.log(typeof messageValue, messageValue);
    if (messageValue) {
        if (messageValue === '1') {
            message.slideDown().delay(3000).slideUp();
        } else {
            message.slideDown();
        }
    }


    // Add click listener  and functionality to hamburger
    hamburger.click(function () {
        toggleNav();
    });

    // Add click listener and functionality to nav links
    navLink.click(function () {
        if (hamburger.is(":visible")) {
            toggleNav();
        }
    });

    // Add click listener to code examples
    $('.portfolio__image').click( (e) => {
        showModal(e);
    })

    $('.coding-modal__container').click( () => {
            hideModal();
    })

    // Add click listener and functionality to coding scroller
    const scroller = $(".coding__example");
    scroller.click(function (event) {
        console.log(event.target.parentNode.nodeName);
        if (event.target.nodeName === "A" || event.target.parentNode.nodeName === "A") {
            let example;
            if (event.target.nodeName === "A") {
                example = event.target.getAttribute("href");
            } else {
                example = event.target.parentNode.getAttribute("href");
            }
            const frame = $(`${example} .coding__code`);
            const scroller = $(`${example} a`);
            const icon = $(`${example} a div`);
            scroller.toggleClass("scroller--expanded scroller--collapsed");
            frame.toggleClass("code--expanded");
            icon.toggleClass("icon--arrow-down icon--arrow-up");
        }
    });

    $(window).resize(() => {
        let $window = $(window);
        if ($window.width() >= 768) {
            location.reload();
        }
    });


    // Hide main headline and sub headline until animation complete
    $(".hero__headline").hide({
        queue: true
    }).delay(2000).show({
        queue: true
    });

    $(".hero__subtitle")
        .hide({
            queue: true
        })
        .delay(5000)
        .show({
            queue: true,
            complete: function () {
                $(".animate-typing").delay(500).hide({
                    queue: true
                });
            },
        });
});

function showModal(target) {
    let sibling = target.target.parentNode.firstElementChild;
    let isSiblingSource = (sibling.nodeName === 'SOURCE');
    let imageSrc = target.target.src;
    if (isSiblingSource) {
        imageSrc = sibling.srcset;
    }
    let pageTop = $(window).scrollTop();
    $('.coding--overlay').toggleClass("overlay--dark");
    $('.coding-modal__container').css('top', pageTop + 'px');
    $('.coding-modal__image').attr('src', imageSrc)
    $('.coding-modal__content').fadeIn();
    $('body').css('overflow', 'hidden')
}

function hideModal() {
    $('.coding--overlay').toggleClass("overlay--dark");
    $('.coding-modal__content').fadeOut();
    $('body').removeAttr('style');
}

function getUrlParameter(sParam) {
    let sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
}

// Open code examples in larger modal window at xlarge sizes
function modalCoding(e) {
    console.log(e.id);
    alert('image clicked');
}

// Scroller visibility toggle function
function toggleScroller() {
    const container = $(".coding__code");
    for (let i = 0; i < container.length; i++) {
        const example = container[i].offsetParent;
        const contentHeight = $(container[i]).find('img')[0].clientHeight;
        const containerHeight = container[i].clientHeight;
        const scroller = $(example).find('a')[0];
        console.log(contentHeight, container[i].clientHeight, scroller);
        if (containerHeight >= contentHeight) {
            $(scroller).css('display', 'none');
        }

    }

}

// Form validation function
function validate() {
    const name = $("#name").val();
    const email = $("#email").val();
    const pattern = new RegExp(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i);
    if (
        name.length > 0 &&
        email.length > 0
    ) {
        if (pattern.test(email)) {
            $(".contact__required").text("").removeAttr("style");
            $("#contact__submit")
                .attr("disabled", false)
                .removeClass("button--disabled");
        } else {
            $(".contact__required")
                .text("You must enter a valid email address.")
                .css("color", "red");
        }
    } else {
        $("#contact__submit").attr("disabled", true).addClass("button--disabled");
    }
}

// Navbar and hamburger toggle function
function toggleNav() {
    let sideNav = $(".navbar");
    sideNav.slideToggle(500, function () {
        if (sideNav.attr("style") === "display: none;") {
            sideNav.removeAttr("style");
            $(".main__container").removeClass('body--hide');
        } else if (sideNav.attr("style") === "display: block;") {
            // Add click listener to page overlay to allow click anywhere to close
            $(".main__container").addClass('body--hide');
            $(".page--overlay").click(function (e) {
                e.stopImmediatePropagation();
                toggleNav();
            });
        }
    });
    hamburger.toggleClass("hamburger--open");
    $(".page--overlay").toggleClass("overlay--dark");
}

// reload page on orientation change
window.onorientationchange = function () {
    window.location.reload();
};

// Script to run on form submission - will be removed when real functionality added to script
// $("#contactForm").submit(function () {
//     $("#fname, #lname, #email, #subject, #message").val("");
//     $(".success").slideDown().delay(2000).slideUp();
//     $("#contact__submit").attr("disabled", true).addClass("button--disabled");
//     $(".contact__required").text(
//         "Please complete all fields marked * before submitting."
//     );
// });

// Script to add smooth scrolling effect to # links.
// Select all links with hashes
$('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, "") ===
            this.pathname.replace(/^\//, "") &&
            location.hostname === this.hostname
        ) {
            // Figure out element to scroll to
            let target = $(this.hash);
            target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $("html, body").animate({
                        scrollTop: target.offset().top,
                    },
                    1000,
                    function () {
                        // Callback after animation
                        // Must change focus!
						const $target = $(target);
						$target.focus();
                        if ($target.is(":focus")) {
                            // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        }
                    }
                );
            }
        }
    });