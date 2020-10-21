$( document ).ready(function() {
    sidebarOpen = true;
    darkTheme = true;
    isMobileUser = (window.innerWidth < 576);
    sidebarWidth = 200;
    hoveredRecently = false;

    savedTheme = localStorage.getItem("theme");
    if(savedTheme)
        changeTheme(savedTheme);
    else
        changeTheme("dark");


    stageChildren = $(".header-carousel .slide").length;
    $(".header-carousel .outer-stage .stage").css("width", (stageChildren*416).toString()+"px")
    $(".header-carousel .outer-stage")[0].scroll(0,0);

    if(!isMobileUser){openSidebar();}
    else{closeSidebar();}
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
    //openSidebar();
    isMobileUser = (window.innerWidth < 576);
});

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
    if(isMobileUser)
        sidebarSize = window.innerWidth;
    
    $(".sidebar").css("width", sidebarSize.toString() +"px");
    //$(".sidebar").css("box-shadow", "var(--theme-shadow) 10px 0px 10px 15px");
    
    widthDiff = (sidebarSize + calcScrollbar()).toString();
    console.log("calc(100vw - "+widthDiff+"px)");
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
    widthDiff = (sidebarSize + calcScrollbar()).toString();
    $(".main-content").css("width", "calc(100vw - "+widthDiff+"px)");
    $(".side-text").css("display", "none");
    sidebarOpen = false;
    sidebarHoverHandler(" ");
}

$(".sidebar-toggle").click(function(){
    if(sidebarOpen){
        closeSidebar();
        return;
    }
    openSidebar();
    
});

$("#search-bar").click(function(){
    openSidebar();
});

function changeTheme(theme){
    $(":root").css("--theme-bg-1", "var(--" + theme + "-theme-bg-1)");
    $(":root").css("--theme-bg-2", "var(--" + theme + "-theme-bg-2)");
    $(":root").css("--theme-text-1", "var(--" + theme + "-theme-text-1)");
    $(":root").css("--theme-text-2", "var(--" + theme + "-theme-text-2)");
    $(":root").css("--theme-shadow", "var(--" + theme + "-theme-shadow)");
    $(":root").css("--theme-input-bg", "var(--" + theme + "-theme-input-bg)");
    $(".logo img")[0].src = "images/logo_" + theme + ".png";
    $(".logo img")[1].src = "images/logo_sq_" + theme + ".png";

    theme=="dark"?$(".fa-moon")[0].classList.add("fa-sun"):$(".fa-moon")[0].classList.remove("fa-sun");
    darkTheme = theme=="dark";
    localStorage.setItem('theme', theme);
}

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