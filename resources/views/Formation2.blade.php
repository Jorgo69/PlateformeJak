@extends('Formation')

@section('courses')

{{-- Body Of Courses --}}
<div class="content-block">
    <!-- About Us -->
    <div class="section-area section-sp1">
        <div class="container">
            <div class="row mb-4">
                {{-- Progression Bar --}}
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 10%">67%</div>
                </div>
                {{-- End Progression Bar --}}
            </div>
            <div class="row d-flex flex-row-reverse">
                <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                    <div class="course-detail-bx">
                        <div class="course-price">
                            <del>$190</del>
                            <h4 class="price">$120</h4>
                        </div>
                        <div class="course-buy-now text-center">
                            <a href="#" class="btn radius-xl text-uppercase"> Concernant ce Cours</a>
                        </div>
                        <div class="teacher-bx">
                            <div class="teacher-info">
                                <div class="teacher-thumb">
                                    <img src="{{asset('assets/images/testimonials/pic1.jpg')}}" alt="" />
                                </div>
                                <div class="teacher-name">
                                    <h5>Mr Jak Goldinvestissement</h5>
                                    <span>Professuer et investisseur</span>
                                </div>
                            </div>
                        </div>
                        <div class="cours-more-info">
                            <div class="review">
                                <span>3 Review</span>
                                <ul class="cours-star">
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li class="active"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="price categories">
                                <span>Categories</span>
                                <h5 class="text-primary"> {{$courses -> categorie_cours }}</h5>
                            </div>
                        </div>
                        <div class="course-info-list scroll-page">
                            <ul class="navbar">
                                <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
                                <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Curriculum</a>
                                </li>
                                <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="courses-post">
                        <div class="ttr-post-media media-effect">
                            <video controls autoplay width="800" controlsList="nodownload">
                                <source
                                    src="/storage/public/images/video_un/React Chapitre 2, Nos premiers pas avec React.mp4"
                                   controls =nodownload type="video/mp4" />
                            </video>
                        </div>
                        <div class="ttr-post-info">
                            <div class="ttr-post-title ">
                                <h2 class="post-title">{{$courses -> titre_cours }}</h2>
                            </div>
                            <div class="ttr-post-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since
                                    the
                                    1500s, when an unknown printer took a galley of type and scrambled
                                    it to
                                    make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="courese-overview" id="overview">
                        <h4>Overview</h4>
                        <div class="row">
                            <div class="col-md-12 col-lg-4">
                                <ul class="course-features">
                                    <li><i class="ti-book"></i> <span class="label">Lectures</span>
                                        <span class="value">8</span>
                                    </li>
                                    <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span>
                                        <span class="value">1</span>
                                    </li>
                                    <li><i class="ti-time"></i> <span class="label">Duration</span>
                                        <span class="value"> {{$courses -> duree_cours }}</span>
                                    </li>
                                    <li><i class="ti-stats-up"></i> <span class="label">Skill
                                            level</span> <span class="value"> {{$courses ->
                                            difficulte_cours }}</span></li>
                                    <li><i class="ti-smallcap"></i> <span class="label">Language</span>
                                        <span class="value"> {{$courses -> langue_cours }}</span>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-12 col-lg-8">
                                <h5 class="m-b5">Course Description</h5>
                                <p>{{$courses -> description_cours }}.</p>
                                <h5 class="m-b5">Certification</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry.
                                    Lorem Ipsum has been the industry’s standard dummy text ever since
                                    the
                                    1500s, when an unknown printer took a galley of type and scrambled
                                    it to
                                    make a type specimen book. It has survived not only five centuries,
                                    but also
                                    the leap into electronic typesetting, remaining essentially
                                    unchanged.</p>
                                <h5 class="m-b5">Learning Outcomes</h5>
                                <ul class="list-checked primary">
                                    <li>Over 37 lectures and 55.5 hours of content!</li>
                                    <li>LIVE PROJECT End to End Software Testing Training Included.</li>
                                    <li>Learn Software Testing and Automation basics from a professional
                                        trainer
                                        from your own desk.</li>
                                    <li>Information packed practical training starting from basics to
                                        advanced
                                        testing techniques.</li>
                                    <li>Best suitable for beginners to advanced level users and who
                                        learn faster
                                        when demonstrated.</li>
                                    <li>Course content designed by considering current software testing
                                        technology and the job market.</li>
                                    <li>Practical assignments at the end of every session.</li>
                                    <li>Practical learning experience with live project work and
                                        examples.cv
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="m-b30" id="curriculum">
                        <h4>Curriculum</h4>
                        <ul class="curriculum-list">
                            <li>
                                <h5>First Level</h5>
                                <ul>
                                    <li>
                                        <div class="curriculum-list-box">
                                            <span>Lesson 1.</span> Introduction to UI Design
                                        </div>
                                        <span>120 minutes</span>
                                    </li>
                                    <li>
                                        <div class="curriculum-list-box">
                                            <span>Lesson 2.</span> User Research and Design
                                        </div>
                                        <span>60 minutes</span>
                                    </li>
                                    <li>
                                        <div class="curriculum-list-box">
                                            <span>Lesson 3.</span> Evaluating User Interfaces Part 1
                                        </div>
                                        <span>85 minutes</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h5>Second Level</h5>
                                <ul>
                                    <li>
                                        <div class="curriculum-list-box">
                                            <span>Lesson 1.</span> Prototyping and Design
                                        </div>
                                        <span>110 minutes</span>
                                    </li>
                                    <li>
                                        <div class="curriculum-list-box">
                                            <span>Lesson 2.</span> UI Design Capstone
                                        </div>
                                        <span>120 minutes</span>
                                    </li>
                                    <li>
                                        <div class="curriculum-list-box">
                                            <span>Lesson 3.</span> Evaluating User Interfaces Part 2
                                        </div>
                                        <span>120 minutes</span>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <h5>Final</h5>
                                <ul>
                                    <li>
                                        <div class="curriculum-list-box">
                                            <span>Part 1.</span> Final Test
                                        </div>
                                        <span>120 minutes</span>
                                    </li>
                                    <li>
                                        <div class="curriculum-list-box">
                                            <span>Part 2.</span> Online Test
                                        </div>
                                        <span>120 minutes</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="" id="instructor">
                        <h4>Instructor</h4>
                        <div class="instructor-bx">
                            <div class="instructor-author">
                                <img src="{{asset('assets/images/testimonials/pic1.jpg')}}" alt="">
                            </div>
                            <div class="instructor-info">
                                <h6>Mr Jak Goldinvestissement </h6>
                                <span>Professor et Expert en placement de Biens</span>
                                <ul class="list-inline m-tb10">
                                    <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li><a href="#" class="btn sharp-sm google-plus"><i
                                                class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text
                                    ever since
                                    the 1500s, when an unknown printer took a galley of type and
                                    scrambled it to
                                    make a type specimen book. It has survived not only five centuries
                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
{{-- Body Of Courses End --}}
    
@endsection