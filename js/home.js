
// Testimonial swiper starts

var testiSwiper = new Swiper(".testiSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 800,
    navigation: {
        nextEl: ".testi-swiper-next",
        prevEl: ".testi-swiper-prev",
    },
});

// Testimonial swiper ends


// step section starts
let mm = gsap.matchMedia();

mm.add("(min-width: 991px)", () => {

    // Section enters
    let tlStepEnter = gsap.timeline({
        scrollTrigger: {
            trigger: ".step-sec",
            start: "15% 45%",
            end: "15% 20%",
            // toggleActions: "play pause resume reset",
            scrub: 1,
            // markers: true
        }
    });

    tlStepEnter.from(".step1", {
        x: "-40%",
        opacity: 0,
    }, 0)
    tlStepEnter.from(".step2", {
        y: "100%",
        opacity: 0,
    }, 0)
    tlStepEnter.from(".step3", {
        x: "40%",
        opacity: 0,
    }, 0)


    // Section exits
    let tlStepExit = gsap.timeline({
        scrollTrigger: {
            trigger: ".step-sec",
            start: "100% 65%",
            end: "100% 50%",
            // toggleActions: "play pause resume reset",
            scrub: 1,
            // markers: true
        }
    });

    tlStepExit.to(".step1", {
        x: "-40%",
        opacity: 0,
    }, 0)
    tlStepExit.to(".step2", {
        y: "100%",
        opacity: 0,
    }, 0)
    tlStepExit.to(".step3", {
        x: "40%",
        opacity: 0,
    }, 0)
});
// step section ends

/*Counter Script*/
var a = 0;
$(window).scroll(function () {
    var oTop = $(".counter-sec").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $(".counter-value").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-count");
            $({
                countNum: $this.text(),
            }).animate(
                {
                    countNum: countTo,
                },
                {
                    duration: 1200,
                    easing: "swing",
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    },
                }
            );
        });
        a = 1;
    }
});
/*Counter Script ends*/

// banefit flip card
$(document).on("click", ".flip-front", function () {
    $(this).parent().addClass("active");
});

$(document).on("click", ".flip-back", function () {
    $(this).parent().removeClass("active");
});
// banefit flip card (we will edit this.)

// FAQ Accordian
var acc = document.querySelectorAll(".acc-gradient");

$(".acc-container .acc-gradient:first-child").addClass("active");
$(".acc-container .acc-gradient:nth-child(1) .faq-detail").slideDown();

acc.forEach((el) =>
    el.addEventListener("click", () => {
        if (el.classList.contains("active")) {
            $(el).find(".faq-detail").slideUp();
            $(el).removeClass("active");
        } else {
            $(".faq-detail").slideUp();
            $(".acc-gradient").removeClass("active");
            $(el).find(".faq-detail").slideDown();
            $(el).addClass("active");
        }
    })
);
  // FAQ Accordian