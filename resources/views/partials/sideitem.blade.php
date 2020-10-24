<div class="row sidebar-item mt-3 mr-1" data-toggle="collapse" data-target="#menu{{ $item->id }}">
    <a href="{{ $item->link }}" class="d-flex flex-row align-items-center">
        <div class="menu-icon p-1 pr-3 ml-1">
            <i class="fal fa-{{ $item->icon }} m-auto"></i>
        </div>
        <div class="side-text">
            {{ $item->title }}
        </div>
    </a>
</div>

@if ($item->hasChild)
<div id="menu{{ $item->id }}" class="collapse">
    @each('partials.sidechild', $item->children, 'item')
</div>
@endif