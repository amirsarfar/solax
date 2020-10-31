
$( document ).ready(function() {
    sidebarOpen = true;
    darkTheme = true;
    
    sidebarWidth = 200;
    hoveredRecently = false;
    isTouch = ('ontouchstart' in document.documentElement);
    
    savedTheme = localStorage.getItem("theme");
    if(savedTheme)
        changeTheme(savedTheme);
    else
        changeTheme("dark");


    stageChildren = $(".header-carousel .slide").length;
    $(".header-carousel .outer-stage .stage").css("width", (stageChildren*416).toString()+"px")
    $(".header-carousel .outer-stage")[0].scroll(0,0);

    


    $(".sidebar-item").hover(
        function() {
            if(!hoveredRecently){
                sidebarHoverHandler($(this).attr("data-target"));
            }

        }, function() { }
    );

    $(".sidebar-child").hover(
        function() {
            if(!hoveredRecently){
                sidebarHoverHandler("#"+$(this).parent()[0]["id"]);
            }
        },
        function(){ }
    );

    $(".main-content").click(function(e) {
        closeSidebar();
    });

    $( window ).resize(function() {
        isMobileUser = (window.innerWidth < 576);
        closeSidebar();

    });

    $(".sidebar-toggle").click(function(){
        if(sidebarOpen){
            closeSidebar();
            return;
        }
        openSidebar();

    });

    $(".search-bar").click(function(){
        openSidebar();
    });


    $(".theme-toggle").click(function(){
        if(darkTheme){
            changeTheme("light");
            return;
        }
        changeTheme("dark");
    });

    $(".header-carousel .right").click(function(){
        stage = $(".header-carousel .outer-stage")[0];
        stage.scroll(stage.scrollLeft-416,0);
    });
    $(".header-carousel .left").click(function(){
        stage = $(".header-carousel .outer-stage")[0];
        stage.scroll(stage.scrollLeft+416,0);
    });

    //setTimeout(function(){$(".spinner-wrapper")[0].style["display"] = "none";}, 1250);
    //$(".spinner-wrapper")[0].style["display"] = "none";
});
$(window).on('load',function() {
    isMobileUser = (window.innerWidth < 576);

    if(!isMobileUser){openSidebar();}
    else{closeSidebar();}
    //setTimeout(function(){$(".spinner-wrapper")[0].style["display"] = "none";}, 250);
    $(".spinner-wrapper")[0].style["display"] = "none"
});

function sidebarHoverHandler(selectedItem) {
    items = $(".sidebar-item");
    for(i=0; i<items.length; i++){
        itemTarget = items[i].attributes["data-target"].value;
        if(itemTarget == selectedItem)
            $(itemTarget).collapse('show');
        else
            $(itemTarget).collapse('hide');
    }
    hoveredRecently = true;
    window.setTimeout(function() {hoveredRecently = false;}, 100);
}


function calcScrollbar(){
    var b = $('body');
    var normalw = 0;
    var scrollw = 0;
    normalw = window.innerWidth;
    scrollw = normalw - b.width();
    return scrollw;
}

function openSidebar(){
    sidebarSize = sidebarWidth;
    sideDiff = 70;
    if(isMobileUser){
        sidebarSize = window.innerWidth;
        sideDiff = 0;
    }
    $(".sidebar").css("width", sidebarSize.toString() +"px");
    //$(".sidebar").css("box-shadow", "var(--theme-shadow) 10px 0px 10px 15px");
    //$(".sidebar").css("transform", "translate(0)");
    widthDiff = (sideDiff + calcScrollbar()).toString();
    $(".main-content").css("width", "calc(100vw - "+widthDiff+"px)");
    setTimeout(function(){$(".side-text").css("display", "unset");}, 150);
    sidebarOpen = true;
}
function closeSidebar(){
    sidebarSize = 70;
    if(isMobileUser)
        sidebarSize = 0;

    $(".sidebar").css("width", sidebarSize.toString() +"px");
    //$(".sidebar").css("box-shadow", "none");
    //$(".sidebar").css("transform", "translate(-130px)");
    widthDiff = (sidebarSize + calcScrollbar()).toString();
    $(".main-content").css("width", "calc(100vw - "+widthDiff+"px)");
    $(".side-text").css("display", "none");
    sidebarOpen = false;
    sidebarHoverHandler(" ");
}


function changeTheme(theme){
    $(":root").css("--theme-bg-1", "var(--" + theme + "-theme-bg-1)");
    $(":root").css("--theme-bg-2", "var(--" + theme + "-theme-bg-2)");
    $(":root").css("--theme-bg-3", "var(--" + theme + "-theme-bg-3)");
    $(":root").css("--theme-bg-4", "var(--" + theme + "-theme-bg-4)");
    $(":root").css("--theme-bg-5", "var(--" + theme + "-theme-bg-5)");
    $(":root").css("--theme-bg-6", "var(--" + theme + "-theme-bg-6)");
    $(":root").css("--theme-bg-7", "var(--" + theme + "-theme-bg-7)");
    $(":root").css("--theme-bg-8", "var(--" + theme + "-theme-bg-8)");
    $(":root").css("--theme-border-2", "var(--" + theme + "-border-2)");
    $(":root").css("--theme-text-1", "var(--" + theme + "-theme-text-1)");
    $(":root").css("--theme-text-2", "var(--" + theme + "-theme-text-2)");
    $(":root").css("--theme-text-3", "var(--" + theme + "-theme-text-3)");
    $(":root").css("--theme-text-4", "var(--" + theme + "-theme-text-4)");
    $(":root").css("--theme-sidebar", "var(--" + theme + "-theme-sidebar)");
    $(":root").css("--theme-shadow", "var(--" + theme + "-theme-shadow)");
    $(":root").css("--theme-input-bg", "var(--" + theme + "-theme-input-bg)");

    if(theme == "dark"){
        $(".logo img").css("filter", "invert(0)");
        $(".fa-moon")[0].classList.add("fa-sun");
        $("img.back-image1").css('filter','brightness(40%)');
    }
    else{
        $(".logo img").css("filter", "invert(1)");
        $(".fa-moon")[0].classList.remove("fa-sun");
        $("img.back-image1").css('filter','none');
    }

    darkTheme = theme=="dark";
    localStorage.setItem('theme', theme);
}
