

// var acc = document.querySelectorAll(".position-info");

// $(".position-detail").slideUp();
// $(".position-acc-container .position-gradient:first-child").addClass("active");
// $(".position-acc-container .position-gradient:nth-child(1) .position-detail").slideDown();
// $(".position-acc-container .position-gradient:nth-child(1) .detail-btn").text('close details')

// acc.forEach((el) =>
//     el.addEventListener("click", () => {
//         if (el.classList.contains("active")) {
//             $(el).find(".position-detail").slideUp();
//             $(el).removeClass("active");
//             $(".detail-btn").text('view details');
//         } else {
//             $(".position-detail").slideUp();
//             $(".position-info").removeClass("active");
//             $(el).find(".position-detail").slideDown();
//             $(el).find(".detail-btn").text('close details');
//             $(el).addClass("active");
//         }
//     })
// );


// FAQ Accordian
var acc = document.querySelectorAll(".acc-gradient");

$(".acc-container .acc-gradient:first-child").addClass("active");
$(".position-detail").slideUp();
// $(".acc-container .acc-gradient:nth-child(1) .position-detail").slideDown();
// $(".acc-container .acc-gradient:nth-child(1) .detail-btn").text("CLOSE DETAILS")

acc.forEach((el) =>
    el.children[0].children[0].children[1].addEventListener("click", () => {
        if (el.classList.contains("active")) {
            $(el).find(".position-detail").slideUp();
            $(el).removeClass("active");
            $(el).find(".detail-btn").text("VIEW DETAILS")
        } else {
            $(".position-detail").slideUp();
            $(".acc-gradient").removeClass("active");
            $(el).find(".position-detail").slideDown();
            $(el).addClass("active");
            $(".detail-btn").text("VIEW DETAILS")
            $(el).find(".detail-btn").text("CLOSE DETAILS")
        }
        console.dir(el);

    })
);
  // FAQ Accordian