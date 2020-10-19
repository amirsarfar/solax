$( document ).ready(function() {
    selectedCategory = "#category1";

    $(".category-selector").hover(function(){
        target = $(this).attr("data-target");
        $(selectedCategory)[0].classList.remove("active");
        $("div.category-selector[data-target='"+selectedCategory+"']")[0].classList.remove("active");
        $(target)[0].classList.add("active");
        $(this)[0].classList.add("active");
        selectedCategory = target;
    },
    function(){
    });
});

//$("ul[data-group='Companies'] li:not([data-company='Microsoft'])")