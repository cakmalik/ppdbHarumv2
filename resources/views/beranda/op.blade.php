@extends('template.app.user')
@section('title', 'Home')
@section('content')
    <h1>Home</h1>
    <div id="wrap">
        <form action="" autocomplete="on">
            <input id="search" name="search" type="text" placeholder="What're we looking for ?"><input id="search_submit"
                value="Rechercher" type="submit">
        </form>
    </div>
@endsection
