@extends('layout.main')
@section('title', 'Home')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Home</h1>
</div>

<!-- Content Row -->

<div class="row">

    <div class="col-lg-6 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Amethyst Dreams</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid  mt-3 mb-4" style="width: 30rem; height: 15rem; object-fit: cover;"
                        src="{{ asset('img/gelang1.jpg') }}" alt="...">
                </div>
                <p> Immerse yourself in the tranquility and wisdom of the amethyst stone with the Amethyst Dreams bracelet.  Woven from rich purple yarn, it evokes a sense of inner peace and encourages spiritual connection.</p>
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Lihat selengkapnya &rarr;</a>
            </div>
        </div>

    </div>

    <div class="col-lg-6 mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sage Serenity</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid  mt-3 mb-4" style="width: 30rem; height: 15rem; object-fit: cover;"
                        src="{{ asset('img/gelang2.jpg') }}" alt="...">
                </div>
                <p>Indulge in the tranquility of a calming spa with the Sage Serenity bracelet.  This soothing creation, crafted from a soothing shade of green yarn, promotes inner peace and encourages mindfulness.</p>
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Lihat selengkapnya &rarr;</a>
            </div>
        </div>

    </div>

    <div class="col-lg-6 mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sage Serenity</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid  mt-3 mb-4" style="width: 30rem; height: 15rem; object-fit: cover;"
                        src="{{ asset('img/gelang2.jpg') }}" alt="...">
                </div>
                <p>Indulge in the tranquility of a calming spa with the Sage Serenity bracelet.  This soothing creation, crafted from a soothing shade of green yarn, promotes inner peace and encourages mindfulness.</p>
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Lihat selengkapnya &rarr;</a>
            </div>
        </div>

    </div>

    <div class="col-lg-6 mb-4">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sage Serenity</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid  mt-3 mb-4" style="width: 30rem; height: 15rem; object-fit: cover;"
                        src="{{ asset('img/gelang2.jpg') }}" alt="...">
                </div>
                <p>Indulge in the tranquility of a calming spa with the Sage Serenity bracelet.  This soothing creation, crafted from a soothing shade of green yarn, promotes inner peace and encourages mindfulness.</p>
                <a target="_blank" rel="nofollow" href="https://undraw.co/">Lihat selengkapnya &rarr;</a>
            </div>
        </div>

    </div>
</div>

@endsection