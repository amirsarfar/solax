<div class="row sidebar-child mt-1 mr-4">
    <a href="{{ $item->link }}" class="d-flex flex-row align-items-center">
        <div class="menu-icon p-1 ml-1">
            <i class="fal fa-{{ $item->icon }} m-auto"></i>
        </div>
        <div class="side-text">
            {{ $item->title }}
        </div>
    </a>
</div>
