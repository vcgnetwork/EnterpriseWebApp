@extends('layouts.default')
@section('content')

    <h3 class="header">Welcome to the new @include('shared.system-name')</h3>
    <p class="lead">[goal] An application that is free and more powerful than anything on the internet.</p>
    <p>Need to describe enterprisewebapp and how it can help everyone who uses it.</p>
    <p>Go over the technology and libraries udes with links to everything.</p>
    <p>Basic Layout and Instructions:</p>
    <p>Click the <i class="fa fa-fw fa-bars sideMainMenuButton"></i> icon in the top-left of the screen or use the escape key. To @include('shared.login-logout-text') @include('shared.system-name') - click the @include('shared.login-logout') icon in the top-right of the screen.</p>

@endsection
