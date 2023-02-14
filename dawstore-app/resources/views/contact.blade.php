@extends('templates.template')

@section('titulo')
Contact Us
@endsection

@section('contact')
active
@endsection



@section('contact_section')
<div class="container">
    <!-- HERO SECTION-->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
                <div class="col-lg-6">
                    <h1 class="h2 text-uppercase mb-0">Any Problem?</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-dark" href="cart.html">Contact Us</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <!-- BILLING ADDRESS-->
        <h2 class="h5 text-uppercase mb-4">Contact Us</h2>
        <div class="row">
            <div class="col-lg-8">
                <form name="contactForm" onsubmit="confirmForm" action="" >
                    <div class="row gy-3">
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="firstName">First name </label>
                            <input class="form-control form-control-lg" type="text" id="contactName" name="contactName" placeholder="Enter your first name" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="lastName">Last name </label>
                            <input class="form-control form-control-lg" type="text" id="contactSurname" name="contactSurname" placeholder="Enter your last name" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="checkout-email">Email address </label>
                            <input class="form-control form-control-lg" type="email" id="contactEmail" name="contactEmail" placeholder="e.g. Jason@example.com" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label text-sm text-uppercase" for="phone">Phone number </label>
                            <input class="form-control form-control-lg" type="tel" id="contactPhone" name="contactPhone" placeholder="e.g. +02 245354745" required>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label text-sm text-uppercase" for="address">Message </label>
                            <textarea class="form-control form-control-lg" type="text" id="contactMessage" name="contactMessage" placeholder="Message" required></textarea>
                        </div>
                        <div class="col-lg-12">
                           <button class="btn btn-success" type="submit" >Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ORDER SUMMARY-->
            <div class="col-lg-4">
                <div class="card border-0 rounded-0 p-lg-4 bg-light">
                    <div class="card-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12677.121598442693!2d-5.9299966!3d37.4068468!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1269414d8c133d%3A0x498ce95cde9f9931!2sILERNA%20Sevilla!5e0!3m2!1ses!2ses!4v1676367078909!5m2!1ses!2ses" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
