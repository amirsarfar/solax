$(document).ready(function() {
    faqTabs = $(".faq-tab");
    faqParts = $(".faq-part");
    faqCards = $(".faq-card");

    $(".faq-tab").click(function(){
        for(i=0; i<4; i++){
            faqTabs[i].classList.remove("active");
            faqParts[i].classList.remove("active");
        }
        $(this)[0].classList.add("active");
        target = $(this)[0].attributes["data-target"].value;
        $(target)[0].classList.add("active");
    });

    $(".faq-card").click(function(){
        for(i=0; i<faqCards.length; i++){
            faqCards[i].classList.remove("active");
        }
        $(this)[0].classList.add("active");
    });
    
});