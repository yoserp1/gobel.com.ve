@extends('layouts.dashboard')

@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection

@section('js_after')
    <!-- Page JS Plugins -->

    <!-- Page JS Code -->

@endsection

@section('content')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Cotizaciones</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Inicio</li>
                    <li class="breadcrumb-item active" aria-current="page">Cotizaciones</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content content-full">
    {{--<!-- Posts Statistics -->
    <div class="row text-center">
        <div class="col-6 col-xl-3">
            <!-- All Posts -->
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="far fa-2x fa-file-alt opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            150
                        </p>
                        <p class="text-muted mb-0">
                            All Posts
                        </p>
                    </div>
                </div>
            </a>
            <!-- END All Posts -->
        </div>
        <div class="col-6 col-xl-3">
            <!-- Active Posts -->
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="far fa-2x fa-eye opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            140
                        </p>
                        <p class="text-muted mb-0">
                            Active
                        </p>
                    </div>
                </div>
            </a>
            <!-- END Active Posts -->
        </div>
        <div class="col-6 col-xl-3">
            <!-- Draft Posts -->
            <a class="block block-rounded" href="be_pages_blog_post_manage.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="fa fa-2x fa-pencil-alt opacity-50"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            10
                        </p>
                        <p class="text-muted mb-0">
                            Drafts
                        </p>
                    </div>
                </div>
            </a>
            <!-- END Draft Posts -->
        </div>
        <div class="col-6 col-xl-3">
            <!-- New Post -->
            <a class="block block-rounded" href="be_pages_blog_post_add.html">
                <div class="block-content block-content-full">
                    <div class="py-md-3">
                        <div class="py-3 d-none d-md-block">
                            <i class="fa fa-2x fa-plus text-success-light"></i>
                        </div>
                        <p class="font-size-h3 font-w700 mb-0">
                            <i class="fa fa-plus text-success-light mr-1 d-md-none"></i> New Post
                        </p>
                        <p class="text-muted mb-0">
                            by John Doe
                        </p>
                    </div>
                </div>
            </a>
            <!-- END New Post -->
        </div>
    </div>
    <!-- Post Statistics -->--}}

    <!-- Posts -->
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Cotizacion (0)</h3>
        </div>
        <div class="block-content">
            <!-- Search -->
            <form action="{{ url('/cms/inicio') }}" method="get">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label>
                            <select name="perPage" class="custom-select" value="{{ $perPage }}">
                                @foreach(['5','10','20'] as $page)
                                <option @if($page == $perPage) selected @endif value="{{ $page }}">{{ $page }}</option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="input-group">
                            <input type="text" class="form-control" id="q" name="q" value="{{ $q }}" placeholder="Buscar...">
                            <div class="input-group-append">
                                <button type="submit" class="input-group-text">
                                    <i class="fa fa-fw fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END Search -->

            <!-- Posts Table -->
            <table class="table table-striped table-borderless table-vcenter">
                <thead class="thead-light">
                    <tr>
                        <th style="width: 60px;">ID</th>
                        <th style="width: 33%;">Nombre</th>
                        <th class="d-none d-sm-table-cell">Empresa</th>
                        <th class="d-none d-xl-table-cell">Fecha</th>
                        <th style="width: 100px;" class="text-center">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($tab_cotizacion as $key => $value)
                    <tr>
                        <td>
                            150
                        </td>
                        <td>
                            <i class="fa fa-eye text-success mr-1"></i>
                            <a href="be_pages_blog_story.html">
                                An adventure of a lifetime
                            </a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            <a href="be_pages_generic_profile.html">Lori Moore</a>
                        </td>
                        <td class="d-none d-xl-table-cell">
                            January 15, 2020 at 16:34
                        </td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-light" href="be_pages_blog_post_edit.html">
                                <i class="fa fa-fw fa-pencil-alt text-primary"></i>
                            </a>
                            <a class="btn btn-sm btn-light" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- END Posts Table -->

            <!-- Posts Pagincation -->
            {{ $tab_cotizacion->appends(Request::only(['perPage','q']))->render() }}  
            <!-- END Posts Pagincation -->
        </div>
    </div>
    <!-- END Posts -->
</div>
<!-- END Page Content -->

@endsection