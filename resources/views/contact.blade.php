@extends('master')
@section('title')
Contact Us | BITM
@endsection
@section('body')
    <!-- MAIN CONTENT -->
    <div class="container ">
        <div class="row justify-content-md-center mt-5">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h2 class="display-5 text-center">Contact</h2>
              <p class="text-secondary text-center">The best way to contact us is to visit our campuses or you can simply fill up the contact form and we will get back to you as soon as possible.</p>
              <hr class="w-50 mx-auto border-dark-subtle">
            </div>
          </div>
        <div class="row bg-white rounded-3 my-5 p-3 shadow">
            <!-- dhaka division -->
            <div class="col-md-6 text-end my-2">
                <p class="fs-4 text-info-emphasis"><b>Dhaka Division</b></p>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start my-2">
                        <span class="fs-5 me-2 flex-grow-1">BASIS Institute of Technology & Management (BITM)</span>
                        <span class="ms-auto"><i class="fa-solid fa-house text-primary fs-5"></i></span>
                    </li>
                    <li class="d-flex align-items-start my-2">
                        <span class="me-2 flex-grow-1">BDBL Bhaban (3rd Floor - East), 12 Kawran Bazar, Dhaka
                            -1215.</span>
                        <span class="ms-auto"><i class="fa-solid fa-map-location-dot fs-5 text-primary"></i></span>
                    </li>
                    <li class="d-flex align-items-start my-2">
                        <span class="me-2 flex-grow-1">Contact Number: +8809612342486 Ext: 209-211 (from 9:30am – 5:00
                            pm)</span>
                        <span class="ms-auto"><i class="fa-solid fa-phone-volume fs-5 text-primary"></i></span>
                    </li>
                    <li class="d-flex align-items-start my-2">
                        <span class="me-2 flex-grow-1">Email address: info@bitm.org.bd</span>
                        <span class="ms-auto"><i class="fa-solid fa-envelope-open fs-5 text-primary"></i></span>
                    </li>
                </ul>
                <!-- google map - Dhaka -->
                <div class="col-md-12"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7303.553391110917!2d90.3871544392946!3d23.755341214667755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1724876431928!5m2!1sen!2sbd"
                        height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-4 shadow-sm w-100"></iframe></div>
            </div>
            <!-- chittagong division -->
            <div class="col-md-6 my-5 my-lg-2 my-md-2">
                <p class="fs-4 fs-4 text-info-emphasis"><b>Chittagong Division</b></p>
                <ul class="list-unstyled">
                    <li class="d-flex align-items-start my-2">
                        <span class="flex-shrink-0 me-2">
                            <i class="fa-solid fa-house text-primary"></i>
                        </span>
                        <span class="fs-5">BASIS Institute of Technology & Management (BITM)</span>
                    </li>
                    <li class="d-flex align-items-start my-2">
                        <span class="flex-shrink-0 me-2">
                            <i class="fa-solid fa-map-location-dot fs-5 text-primary"></i>
                        </span>
                        <span>R.I Tower (4th Floor), 23/A M M Ali Road, Golpahar Circle, Mehedibag, Chittagong.</span>
                    </li>
                    <li class="d-flex align-items-start my-2">
                        <span class="flex-shrink-0 me-2">
                            <i class="fa-solid fa-phone-volume fs-5 text-primary"></i>
                        </span>
                        <span>Contact Number: +8809612342486 Ext: 220 (from 9:30am – 5:00 pm)</span>
                    </li>
                    <li class="d-flex align-items-start my-2">
                        <span class="flex-shrink-0 me-2">
                            <i class="fa-solid fa-envelope-open fs-5 text-primary"></i>
                        </span>
                        <span>Email address: info@bitm.org.bd</span>
                    </li>
                </ul>
                <!-- google map - Chittagong -->
                <div class="col-md-12"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20932.864786020455!2d91.81050056149654!3d22.3598708907549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd89b3aded8b5%3A0x311b3673f0f0499e!2sBITM%20-%20Chittagong%20Campus!5e0!3m2!1sen!2sbd!4v1724876757338!5m2!1sen!2sbd"
                        height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="rounded-4 shadow-sm w-100"></iframe></div>
            </div>
        </div>
    </div>
    <!-- send us a message -->
<section class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center">Want to discuss?
          </h2>
          <p class="text-secondary mb-5 text-center"> Please fill out all of the required fields and we will get back to you as soon as possible.</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-lg-center">
        <div class="col-12 col-lg-9">
          <div class="bg-white border rounded shadow-sm overflow-hidden">

            <form action="https://formspree.io/f/xpwaboyw"
            method="POST">
              <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                  <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text bg-primary border-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope text-white" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                      </svg>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="phone" class="form-label">Phone Number</label>
                  <div class="input-group">
                    <span class="input-group-text bg-primary border-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone text-white" viewBox="0 0 16 16">
                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                      </svg>
                    </span>
                    <input type="tel" class="form-control" id="phone" name="phone" value="">
                  </div>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- MAIN CONTENT -->
    @endsection
