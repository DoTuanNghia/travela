@include('clients.blocks.header')
{{-- @include('clients.blocks.banner') --}}
<!-- Tour Gallery start -->
<div class="tour-gallery">
    <div class="container-fluid">
        <div class="row gap-10 justify-content-center rel">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/destinations/destination-details1.jpg') }}" alt="Destination">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/destinations/destination-details4.jpg') }}" alt="Destination">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/destinations/destination-details2.jpg') }}" alt="Destination">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/destinations/destination-details3.jpg') }}" alt="Destination">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/destinations/destination-details5.jpg') }}" alt="Destination">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="gallery-more-btn">
                    <a href="contact.html" class="theme-btn style-two bgc-secondary">
                        <span data-hover="See All Photos">Xem thêm</span>
                        <i class="fal fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tour Gallery End -->


<!-- Tour Header Area start -->
<section class="tour-header-area pt-70 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-7">
                <div class="tour-header-content mb-15" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <span class="location d-inline-block mb-10"><i class="fal fa-map-marker-alt"></i> Thanh Hóa, Việt Nam</span>
                    <div class="section-title pb-5">
                        <h2>Biển Sầm Sơn, Thanh Hóa, Việt Nam</h2>
                    </div>
                    <div class="ratting">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 text-lg-end" data-aos="fade-right" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="tour-header-social mb-10">
                    <a href="#"><i class="far fa-share-alt"></i>Chia sẻ</a>
                    <a href="#"><i class="fas fa-heart bgc-secondary"></i>Yêu thích</a>
                </div>
            </div>
        </div>
        <hr class="mt-50 mb-70">
    </div>
</section>
<!-- Tour Header Area end -->


<!-- Tour Details Area start -->
<section class="tour-details-page pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tour-details-content">
                    <h3>Khám phá Tours</h3>
                    <p>Bãi biển Sầm Sơn là một trong những bãi biển đẹp nhất Việt Nam và luôn là bãi biển đông khách nhất miền Bắc, Việt Nam. Bãi biển thuộc thành phố Sầm Sơn, tỉnh Thanh Hóa. Bờ biển cách thành phố Thanh Hóa 16km về phía Đông, cách Hà Nội 164km tương đương 2,5 giờ đi xe. </p>
                    <div class="row pb-55">
                        <div class="col-md-6">
                            <div class="tour-include-exclude mt-30">
                                <h5>Bao gồm và Không bao gồm</h5>
                                <ul class="list-style-one check mt-25">
                                    <li><i class="far fa-check"></i> Dịch vụ Pick and Drop</li>
                                    <li><i class="far fa-check"></i> 1 Bữa ăn mỗi ngày</li>
                                    <li><i class="far fa-check"></i> Ăn tối và nhạc sống</li>
                                    <li><i class="far fa-check"></i> Tham quan 7 địa điểm tốt nhất ở thành phố</li>
                                    <li><i class="far fa-check"></i> Nước giải khát trên xe</li>
                                    <li><i class="far fa-check"></i> Xe du lịch sang trọng</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tour-include-exclude mt-30">
                                <h5>Không bao gồm</h5>
                                <ul class="list-style-one mt-25">
                                    <li><i class="far fa-times"></i> Tạo động lực</li>
                                    <li><i class="far fa-times"></i> Đón và đưa khách từ khách sạn</li>
                                    <li><i class="far fa-times"></i> Ăn uống</li>
                                    <li><i class="far fa-times"></i> Nâng cấp tùy chọn</li>
                                    <li><i class="far fa-times"></i> Dịch vụ bổ sung</li>
                                    <li><i class="far fa-times"></i> Bảo hiểm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Các hoạt động</h3>
                <div class="tour-activities mt-30 mb-45">
                    <div class="tour-activity-item">
                        <i class="flaticon-hiking"></i>
                        <b>Đi bộ</b>
                    </div>
                    <div class="tour-activity-item">
                        <i class="flaticon-fishing"></i>
                        <b>Bắt cá</b>
                    </div>
                    <div class="tour-activity-item">
                        <i class="flaticon-man"></i>
                        <b>Bắn cung</b>
                    </div>
                    <div class="tour-activity-item">
                        <i class="flaticon-kayak-1"></i>
                        <b>Kayak</b>
                    </div>
                    <div class="tour-activity-item">
                        <i class="flaticon-bonfire"></i>
                        <b>Lửa hồng</b>
                    </div>
                    <div class="tour-activity-item">
                        <i class="flaticon-flashlight"></i>
                        <b>Khám phá ban đêm</b>
                    </div>
                    <div class="tour-activity-item">
                        <i class="flaticon-cycling"></i>
                        <b>Đạp xe</b>
                    </div>
                    <div class="tour-activity-item">
                        <i class="flaticon-meditation"></i>
                        <b>Yoga</b>
                    </div>
                </div>

                <h3>Lịch trình</h3>
                <div class="accordion-two mt-25 mb-60" id="faq-accordion-two">
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwoOne">
                                Ngày 1 - Đi ăn, du lịch xung quanh, khám phá thành phố Sầm Sơn
                            </button>
                        </h5>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwoTwo">
                                Ngày 2 - Tắm biển, đi bộ trên bãi biển
                            </button>
                        </h5>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwoThree">
                                Ngày 3 - Đi chợ mua đồ ăn mang về, quay trở về Hà Nội
                            </button>
                        </h5>
                    </div>
                </div>

                <h3>Bản đồ</h3>
                <div class="tour-map mt-30 mb-50">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd"
                        style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <h3>Đánh giá của khách hàng</h3>
                <div class="clients-reviews bgc-black mt-30 mb-60">
                    <div class="left">
                        <b>4.8</b>
                        <span>(586 đánh giá)</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="right">
                        <div class="ratting-item">
                            <span class="title">Dịch vụ</span>
                            <span class="line"><span style="width: 80%;"></span></span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="ratting-item">
                            <span class="title">Hướng dẫn viên</span>
                            <span class="line"><span style="width: 70%;"></span></span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="ratting-item">
                            <span class="title">Giá cả</span>
                            <span class="line"><span style="width: 80%;"></span></span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="ratting-item">
                            <span class="title">An toàn</span>
                            <span class="line"><span style="width: 80%;"></span></span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="ratting-item">
                            <span class="title">Đồ ăn</span>
                            <span class="line"><span style="width: 80%;"></span></span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="ratting-item">
                            <span class="title">Khách sạn</span>
                            <span class="line"><span style="width: 80%;"></span></span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <h3>Bình luận của khách hàng</h3>
                <div class="comments mt-30 mb-60">
                    <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="author-thumb">
                            <img src="assets/images/blog/comment-author1.jpg" alt="Author">
                        </div>
                        <div class="content">
                            <h6>Do Tuan Nghia</h6>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="time">Biển rất đẹp, mọi thứ tại nơi đây rất nên thơ, rất thích hợp để du lịch cùng gia đình!</p>
                            <a class="read-more" href="#">Trả lời <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="author-thumb">
                            <img src="assets/images/blog/comment-author3.jpg" alt="Author">
                        </div>
                        <div class="content">
                            <h6>Nguyen Van A</h6>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="time">Biển đẹp !!! Đồ ăn trên cả tuyệt vời.</p>
                            <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <h3>Thêm đánh giá</h3>
                <form id="comment-form" class="comment-form bgc-lighter z-1 rel mt-30" name="review-form"
                    action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="comment-review-wrap">
                        <div class="comment-ratting-item">
                            <span class="title">Dịch vụ</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="comment-ratting-item">
                            <span class="title">Hướng dẫn viên</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="comment-ratting-item">
                            <span class="title">Giá cả</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="comment-ratting-item">
                            <span class="title">An toàn</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="comment-ratting-item">
                            <span class="title">Đồ ăn</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                        <div class="comment-ratting-item">
                            <span class="title">Khách sạn</span>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-30 mb-40">
                    <h5>Để lại bình luận</h5>
                    <div class="row gap-20 mt-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="full-name">Họ tên</label>
                                <input type="text" id="full-name" name="full-name" class="form-control"
                                    value="" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Số điện thoại</label>
                                <input type="text" id="phone" name="phone" class="form-control"
                                    value="" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email-address">Email</label>
                                <input type="email" id="email-address" name="email" class="form-control"
                                    value="" required="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Bình luận</label>
                                <textarea name="message" id="message" class="form-control" rows="5" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0">
                                <button type="submit" class="theme-btn bgc-secondary style-two">
                                    <span data-hover="Gửi đánh giá">Gửi đánh giá</span>
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                <div class="blog-sidebar tour-sidebar">

                    <div class="widget widget-booking" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title">Đặt Tour</h5>
                        <form action="#">
                            <div class="date mb-25">
                                <b>Ngày khởi hành</b>
                                <input type="date">
                            </div>
                            <hr>
                            <div class="time py-5">
                                <b>Giờ khởi hành</b>
                                <ul class="radio-filter">
                                    <li>
                                        <input class="form-check-input" checked type="radio" name="time"
                                            id="time1">
                                        <label for="time1">12:00</label>
                                    </li>
                                    <li>
                                        <input class="form-check-input" type="radio" name="time"
                                            id="time2">
                                        <label for="time2">08:00</label>
                                    </li>
                                </ul>
                            </div>
                            <hr class="mb-25">
                            <h6>Tickets:</h6>
                            <ul class="tickets clearfix">
                                <li>
                                    Trẻ em <span class="price">$28.50</span>
                                    <select name="18-" id="18-">
                                        <option value="value1">01</option>
                                        <option value="value1">02</option>
                                        <option value="value1" selected>03</option>
                                    </select>
                                </li>
                                <li>
                                    Người lớn <span class="price">$50.40</span>
                                    <select name="18+" id="18+">
                                        <option value="value1">01</option>
                                        <option value="value1">02</option>
                                        <option value="value1">03</option>
                                    </select>
                                </li>
                            </ul>
                            <hr class="mb-25">
                            <h6>Thêm dịch vụ:</h6>
                            <ul class="radio-filter pt-5">
                                <li>
                                    <input class="form-check-input" checked type="radio" name="AddExtra"
                                        id="add-extra1">
                                    <label for="add-extra1">Thêm dịch vụ cho mỗi đặt tour <span>$50</span></label>
                                </li>
                                <li>
                                    <input class="form-check-input" type="radio" name="AddExtra" id="add-extra2">
                                    <label for="add-extra2">Thêm dịch vụ cho mỗi người <span>$24</span></label>
                                </li>
                            </ul>
                            <hr>
                            <h6>Tổng: <span class="price">$74</span></h6>
                            <button type="submit" class="theme-btn style-two w-100 mt-15 mb-5">
                                <span data-hover="Đặt Tour">Đặt Tour</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                            <div class="text-center">
                                <a href="contact.html">Cần trợ giúp?</a>
                            </div>
                        </form>
                    </div>

                    <div class="widget widget-contact" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                            <h5 class="widget-title">Cần trợ giúp?</h5>
                        <ul class="list-style-one">
                            <li><i class="far fa-envelope"></i> <a
                                    href="emilto:dtn752k4@gmail.com">dtn752k4@gmail.com</a></li>
                            <li><i class="far fa-phone-volume"></i> <a href="callto:+000(123)45688">+000 (123) 456
                                    88</a></li>
                        </ul>
                    </div>

                    <div class="widget widget-cta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="content text-white">
                            <span class="h6">Khám phá Việt Nam</span>
                            <h3>Điểm du lịch tốt nhất</h3>
                            <a href="tour-grid.html" class="theme-btn style-two bgc-secondary">
                                <span data-hover="Khám phá ngay">Khám phá ngay</span>
                                <i class="fal fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="image">
                            <img src="{{ asset('clients/assets/images/widgets/cta-widget.png') }}" alt="CTA">
                        </div>
                        <div class="cta-shape"><img src="{{ asset('clients/assets/images/widgets/cta-shape3.png') }}" alt="Shape"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tour Details Area end -->


{{-- <!-- Newsletter Area start -->
<section class="newsletter-three bgc-primary py-100 rel z-1"
    style="background-image: url({{ asset('clients/assets/images/newsletter/newsletter-bg-lines.png') }}   );">
    <div class="container container-1500">
        <div class="row">
            <div class="col-lg-6">
                <div class="newsletter-content-part text-white rmb-55" data-aos="zoom-in-right"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="section-title counter-text-wrap mb-45">
                        <h2>Subscribe Our Newsletter to Get more offer & Tips</h2>
                        <p>One site <span class="count-text plus" data-speed="3000" data-stop="34500">0</span> most
                            popular experience you’ll remember</p>
                    </div>
                    <form class="newsletter-form mb-15" action="#">
                        <input id="news-email" type="email" placeholder="Email Address" required>
                        <button type="submit" class="theme-btn bgc-secondary style-two">
                            <span data-hover="Subscribe">Subscribe</span>
                            <i class="fal fa-arrow-right"></i>
                        </button>
                    </form>
                    <p>No credit card requirement. No commitments</p>
                </div>
                <div class="newsletter-bg-image" data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <img src="{{ asset('clients/assets/images/newsletter/newsletter-bg-image.png') }}" alt="Newsletter">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="newsletter-image-part bgs-cover"
                    style="background-image: url({{ asset('clients/assets/images/newsletter/newsletter-two-right.jpg') }});"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50"></div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Area end --> --}}
@include('clients.blocks.footer')
