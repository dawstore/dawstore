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
    <section class="py-5 ">
        <!-- BILLING ADDRESS-->
        <div class="row justify-content-center">
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
        </div>
    </section>
</div>
@endsection
