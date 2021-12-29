@extends('admin._layout')
@section('TitlePage', 'Multikart Dashboard')



@section('content')


    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="nav-left col">
                <div class="page-header-left">
                    <ol class="breadcrumb pull-left">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                    data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>


        </div>
        <!-- Container-fluid Ends-->



    </div>



@endsection
