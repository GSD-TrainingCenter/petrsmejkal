<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><i class="fa fa-map"></i> <span>Indoor Maps</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        @if (Auth::check())
            @include('layout.menuquickinfo')
        @endif
            
        
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
            @include('layout.sidebarmenu')
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->

        <!-- /menu footer buttons -->
    </div>
</div>