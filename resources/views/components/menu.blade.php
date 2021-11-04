<div>
    @php
        $role = Auth::guard('user')->user()->level;
        $a = DB::table('titlemenus')
            ->where('id', $role)
            ->first();
        $b = DB::table('menus')
            ->where(['titlemenu_id' => $role, 'is_active' => 1])
            ->orderBy('posisi', 'asc')
            ->get();
    @endphp

    <section class="bg-secondary py-4">
        <div class="container pb-4">
            <div class="d-flex align-items-center justify-content-md-center flex-wrap">
                @foreach ($b as $menu)
                    <a class="btn btn-outline-light mx-1 mt-2 mt-xl-0 width-100" href="{{ $menu->url }}">
                        <i class="{{ $menu->icon }}" aria-hidden="true"></i>
                        <br>
                        <span>
                            {{ $menu->name }}
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
</div>
