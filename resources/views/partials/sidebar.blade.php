<div class="sidebar d-flex flex-column">
    @each('partials.sideitem', $sidebarItems, 'item')


    <form class="row m-0 m-3 py-2 px-3 search-bar" action="/t">
        <div class="side-text">
            <input type="text" placeholder="جستجو" name="searchTerm">
        </div>
        <div class="mr-auto">
            <i class="fal fa-search"></i>
        </div>
    </form>

    <div class="row sidebar-links mt-auto mb-5 side-text">
        <div class="col-12 mx-auto">
            <div class="row no-gutters icons mb-2">
                <div class="col-3"><a href=""><i class="fab fa-telegram fa-2x"></i></a></div>
                <div class="col-3"><a href=""><i class="fab fa-facebook fa-2x"></i></a></div>
                <div class="col-3"><a href=""><i class="fab fa-google-plus fa-2x"></i></a></div>
                <div class="col-3"><a href=""><i class="fab fa-twitter fa-2x"></i></a></div>
            </div>
            <div class="row no-gutters texts">
                <div class="col-4 text-left"><a href="">پشتیبانی</a></div>
                <div class="col-4 text-center"><a href="">درباره ما</a></div>
                <div class="col-4 text-right"><a href="/contactus">تماس با ما</a></div>
            </div>
        </div>
    </div>
</div>