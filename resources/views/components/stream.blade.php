<div class="container">
    <div class="row">
        <div class="col-md-3">
            {{ $menu }}
        </div>
        <div class="col-md-6">
            {{ $slot }}
        </div>
        <div class="col-md-3">
            {{ $sidebar ?? '' }}
        </div>
    </div>

</div>
