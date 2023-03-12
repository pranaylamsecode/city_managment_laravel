@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Home</h3>
        </div>

        <div class="card-body">
            <section class="profile-information bg-white p-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-12 id-card">
                            <div class="d-flex align-items-center flex-column justify-content-center p-sm-5 p-4 ">Name
                                                <img src="https://ntpl.world/admin/assets/images/users/233582796967c0a257d29d2464a9e5bda43a5.29kaala1.jpg" class="img-fluid" alt="profile_img">
                                                    <h3 class="text-white mt-3 mb-3">Rajani</h3>
                                    <!-- <h5>City Manager</h5> -->
                                <a href="#" class="btn btn-project bg-white text-dark">City Manager</a>
                                <h6 class="text-white mt-3">#NW0008</h6>
                            </div>
                        </div>
                        <div class="col-md-7 col-12">
                            <div class="px-5 pt-5 pb-3">
                                <h3>Profile Information</h3>
                                <div class="mb-3">
                                    <p class="m-0">Name</p>
                                    <h5>{{ $user_name }}</h5>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">Email ID</p>
                                    <h5>{{ $user_name }}</h5>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">Mobile No.</p>
                                    <h5>{{ $user_number }}</h5>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">Position</p>
                                    <h5>City Manager</h5>
                                </div>
                                <div class="mb-3">
                                    <p class="m-0">Address</p>
                                    <address>
                                        {{ $user_city_name }}
                                       
                                    </address>
                                </div>
                                <div class="mb-3">
                                    <p class="mb-2">Share Profile</p>
                                    <div class="share-platforms">
        
                                        <a href="https://ntpl.world/nagpur" target="_blank" class="btn btn-project bg-dark m-0">
                                            <img src="https://ntpl.world/front/assets/img/world.png" class="img-fluid world" alt=""> <span class="mx-2">link</span>
                                        </a>
        
                                        <a href="https://web.whatsapp.com/send?l=en&amp;text=https://ntpl.world/nagpur" target="_blank"> <img src="https://ntpl.world/front/assets/img/wp.png" class="img-fluid mx-2" alt="twitter"></a>
                                        <a href="https://twitter.com/intent/tweet?url=https://ntpl.world/nagpur%2F&amp;text=Rajani
                                        &amp;hashtags=Rajani" target="_blank"> <img src="https://ntpl.world/front/assets/img/twitter.png" class="img-fluid mx-1" alt="twitter"></a>
                                        <a href="https://www.instagram.com/sharer.php?u=https://ntpl.world/nagpur" target="_blank"> <img src="https://ntpl.world/front/assets/img/insta.png" class="img-fluid mx-1" alt="twitter"></a>
                                        <a href="https://www.facebook.com/sharer.php?u=https://ntpl.world/nagpur" target="_blank"> <img src="https://ntpl.world/front/assets/img/fb.png" class="img-fluid mx-1" alt="twitter"></a>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        {{-- blog management  --}}

        <section class="city-blog blogs bg-white">
            <div class="container">
                <div class="row">
                    <div class="text-center pb-5">
                        <h3>Blog</h3>
                    </div>
                    <div class="col-12">
                        <div class="city-blog-owl owl-carousel owl-theme owl-loaded owl-drag">
                                                    
                                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1306px, 0px, 0px); transition: all 0s ease 0s; width: 2939px;"><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                                
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                                
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                                
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                                
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div><div class="owl-item active" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                               
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div><div class="owl-item cloned active" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                                
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div><div class="owl-item cloned active" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                                
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div><div class="owl-item cloned active" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                                
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div><div class="owl-item cloned" style="width: 316.5px; margin-right: 10px;"><div class="item px-2">
                                <a href="https://ntpl.world/view-blog/10">
                                    <div class="card card-blog-item">
                                        <img src="https://ntpl.world/front/assets/img/blog/smallImage/69443e4f4858a65bcb7df60aa30b02e00cb6a.automation-2692442_640.jpg" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body bg-white">
                                            <p class="date text-center light-blue"> Aklesh Meena • 2023-03-08 </p>
                                            <h5 class="card-title text-center text-dark">what is industrial automation</h5>
                                            <p class="card-text text-center text-dark">
                                                
                                                Industrial automation is the use of computer technology and mechanical devices to control and monito...
                                            </p>         
                                        </div>
                                    </div>
                                </a>
                            </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"><button role="button" class="owl-dot active"><span></span></button></div></div>
                    </div>
                </div>
            </div>
        </section>
        {{-- blogn managment end  --}}
    </div>
@endsection
