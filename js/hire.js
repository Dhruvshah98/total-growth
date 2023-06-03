

var acc = document.querySelectorAll(".position-info");

$(".position-detail").slideUp();
$(".position-acc-container .position-gradient:first-child").addClass("active");
$(".position-acc-container .position-gradient:nth-child(1) .position-detail").slideDown();
$(".position-acc-container .position-gradient:nth-child(1) .detail-btn").text('close details')

acc.forEach((el) =>
    el.addEventListener("click", () => {
        if (el.classList.contains("active")) {
            $(el).find(".position-detail").slideUp();
            $(el).removeClass("active");
            $(".detail-btn").text('view details');
        } else {
            $(".position-detail").slideUp();
            $(".position-info").removeClass("active");
            $(el).find(".position-detail").slideDown();
            $(el).find(".detail-btn").text('close details');
            $(el).addClass("active");
        }
    })
);