<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar hidden-tablet hidden-phone py-3">
    <div class="container">
        <a class="navbar-brand" href="#">SDIT HARUM JEMBER</a>
        <a class="btn btn-outline-light" href="{{ route('logout') }}">
            {{ __('LOGOUT') }}
        </a>
    </div>
</nav>

<section class="bg-secondary py-4">
    <div class="container pb-4">

        
                    @php
                    $role = Auth::guard("user")->user()->level;
                    $a= DB::table('titlemenus')->where('id',$role)->first();
                    $b= DB::table('menus')->where(['titlemenu_id'=>$role,'is_active'=>1])->orderBy('posisi','asc')->get();
                    @endphp

                    <p class="display-5 text-center text-white">{{ config('app.name') }}</p>

                    <div class="alert alert-info text-center fs-4" role="alert">
                            {{ $a->name }}
                    </div>


        <div class="d-flex justify-content-between flex-wrap">
            @foreach ($b as $menu)
                <a class="btn btn-outline-light mt-2 mt-xl-0 width-100" href="{{ $menu->url }}">
                    <i class="{{ $menu->icon }}" aria-hidden="true"></i>
                    <span>
                        {{ $menu->name }}
                    </span>
                </a>
            @endforeach


        </div>
    </div>
</section>
