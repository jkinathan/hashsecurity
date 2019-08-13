@include('layouts/header/header')


<!-- </div>
                </div>
            </div>
        </div>        -->
@include('layouts/sidebar/sidebar') 

<div class="app-main__outer">
    <div class="app-main__inner">

        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
        @endif
        @yield('content')
        
    </div>
</div>



@include('layouts/footer/footer')