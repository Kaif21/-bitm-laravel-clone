@extends('master')
@section('title')
About Us | BITM
@endsection
@section('body')
<!-- MAIN CONTENT -->
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
            <h2 class="display-5 text-center">ABOUT BITM</h2>
            <p class="text-secondary text-center">Learn more about our BITM</p>
            <hr class="w-50 mx-auto border-dark-subtle">
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 mx-3">
            <div class="row bg-white rounded-3 my-3 p-3 shadow">
                <p class="my-4 fs-5">To address the skill gap of HR in the industry, BASIS started its own training
                    activities in 2007. Later in 2012, BASIS institutionalized its training activities and set up
                    BASIS Institute of Technology & Management Limited (BITM) with the support of World Bank. BITM
                    was established with a vision to be a world-class IT institute in Bangladesh for the purpose of
                    enhancing the competitiveness of the IT Sector in Bangladesh by creating a pool of qualified IT
                    professionals and quality certified IT companies.</p>
            </div>
            <div class="row bg-white rounded-3 my-3 p-3 shadow">
                <div class="col-md-6 "><img src="https://bitm.org.bd/source/1401750858.jpg" alt=""
                        class="img-fluid rounded">
                </div>
                <div class="col-md-6"><img src="https://bitm.org.bd/source/1401750873.jpg" alt=""
                        class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="col-md-3 bg-white rounded-3 my-3 shadow">
            <div class="col-md-12 my-2 fs-5"
                <hr class="w-25 h-100">
            </div>
            @foreach ($courses as $course)
                <div class="card border-2 border-info text-center my-3">
                    <img src="<?php echo $course['image_url']; ?>" class="img-fluid"
                        alt="<?php echo $course['title']; ?>">
                    <div class="card-body mx-auto border-2">
                        <h5 class="card-title">
                            <?php echo $course['title']; ?>
                        </h5>
                        <hr>
                        <button class="bg-primary border-0 rounded-pill px-3 text-center"><a href="#"
                                class="text-decoration-none text-white">Learn More</a></button>
                    </div>
                </div>
    @endforeach
        </div>
    </div>
</div>
<!-- MAIN CONTENT -->
@endsection
