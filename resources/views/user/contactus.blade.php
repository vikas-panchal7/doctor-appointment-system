@include('user.includes.header');
<div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Contact Us</h2>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Page Content -->

<div class="content">
    <div class="container-fluid" style="margin-bottom: 20px">

        <!-- ***** Contact Area Start ***** -->
        <div class="container">

            <div class="row">
                <!-- Contact Information -->
                <div class="col-12 col-md-4">
                    <div class="contact-information">
                        <h2>Contact us </h2>
                        <h5 class="mt-4">Address</h5>
                        <p>28 Jackson Street, Chicago, 7788569 USA</p>

                        <h5>Phone</h5>
                        <p>+84. 2252. 2250. 122</p>

                        <h5>Fax</h5>
                        <p>+84. 2252. 2250. 125</p>

                        <h5>Email</h5>
                        <p class="mb-0">info.dento@gmail.com</p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-12 col-md-8">
                    <div class="contact-form">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <h2>Get In Touch</h2>
                            <div class="line"></div>
                        </div>
                        <!-- Form -->
                        <form action="#" method="post">
                            <div class="row pt-4">
                                
                                <div class="form-group form-focus col-lg-6">
                                    <input type="text" name="message-name" class="form-control mb-30"
                                        placeholder="Your Name">
										 <label class="focus-label" style="left:24px">Name</label>
                                </div>
                                <div class="form-group form-focus col-lg-12">
                                    <input type="email" class="form-control floating">
                                    <label class="focus-label" style="left:24px">Email</label>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30"  rows="5" cols="50" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-info">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Contact Area End ***** -->
    </div>

</div>


<!-- /Page Content -->
@include('user.includes.footer');
