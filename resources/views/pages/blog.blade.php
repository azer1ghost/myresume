@extends('layout')


@section('content')

@include('components.loader')

<main class="main">
    <div class="container gutter-top">
        <div class="row sticky-parent">

           @include('components.usercard')

            <!-- Content -->
            <div class="col-12 col-md-12 col-xl-9">
                <div class="box shadow pb-0">
                   @include('components.navbar')

                    <!-- About -->
                    <div class="pb-3">
                        <h1 class="title title--h1 first-title title__separate">Blog</h1>
                    </div>

                    <!-- Experience -->
                    <div class="p-4">
                        <div id="app">
                            <example-component></example-component>
                        </div>
                    </div>

                </div>

               @include('components.footer')
            </div>
        </div>
    </div>
</main>



@endsection
