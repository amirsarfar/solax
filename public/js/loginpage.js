$(document).ready(function() {
    selectedForm = "#login";

    $(".form-tab").click(function(){
        target = $(this).attr("data-target");
        $("#login")[0].classList.remove("active");
        $("#signup")[0].classList.remove("active");
        $("#forget-password")[0].classList.remove("active");
        $("div.form-tab")[0].classList.remove("active");
        $("div.form-tab")[1].classList.remove("active");
        $(target)[0].classList.add("active");
        $(this)[0].classList.add("active");
        selectedForm = target;
    });
    $(".forget-link").click(function(){
        $("#login")[0].classList.remove("active");
        $("#signup")[0].classList.remove("active");
        $("div.form-tab")[0].classList.remove("active");
        $("div.form-tab")[1].classList.remove("active");
        $("#forget-password")[0].classList.add("active");
    });
});