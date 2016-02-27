@extends('lcp::layouts.master')

@section('title', 'Dashbioard')
@section('app-name', 'My App')

@section('content')
    <p>This is my body content.</p>
@endsection

@section('after')
    @parent
     This page took {{ (microtime(true) - LARAVEL_START) }} seconds to render
@endsection


@section('keywords', '')
@section('author', '')
@section('description', '')@endsection

@section('styles')

@endsection

@section('head')

@endsection

@section('header')

@endsection

@section('before')
    @parent

@endsection

@section('side-menu')
    @parent

@endsection

@section('sidebar')

@endsection

@section('page-wrapper')
    @parent

@endsection

@section('after')
    @parent

@endsection

@section('footer')

@endsection

@section('scripts')

@endsection

@section('navbar-right')
<li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-messages">
        <li>
            <a href="#">
                <div>
                    <strong>John Smith</strong>
                    <span class="pull-right text-muted">
                        <em>Yesterday</em>
                    </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <strong>John Smith</strong>
                    <span class="pull-right text-muted">
                        <em>Yesterday</em>
                    </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="#">
                <div>
                    <strong>John Smith</strong>
                    <span class="pull-right text-muted">
                        <em>Yesterday</em>
                    </span>
                </div>
                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a class="text-center" href="#">
                <strong>Read All Messages</strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </li>
    </ul>
    <!-- /.dropdown-messages -->
</li>
@endsection
