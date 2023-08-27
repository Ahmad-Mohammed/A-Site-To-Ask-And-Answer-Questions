
@extends('app')
@section('content')

    <!--end navbar -->
    <!-- the hedder -->


    <!-- cards -->

    <div id='app'>
    @vite(['resources/js/app.js','resources/css/app.css'])
    <App></App>


</div>


    <!-- pagination -->
    {{-- <div class="w-100 justify-content-center mt-4 d-flex">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div> --}}
   







@endsection
