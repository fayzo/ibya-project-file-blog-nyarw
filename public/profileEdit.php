<?php include "header_navbar_footer/header.php"?>

<?php include "header_navbar_footer/navbar.php"?>

<div class="container-fuild">
    <div class="row">
        <div class="col-12">
            <div class="card card-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header text-white"
                    style="background: url('<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png') center center;">
                    <h3 class="widget-user-username">Elizabeth Pierce</h3>
                    <h5 class="widget-user-desc">Web Designer</h5>
                </div>
                <div class="widget-user-image">
                    <img class="rounded-circle" src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user3-128x128.jpg"
                        alt="User Avatar">
                </div>
                <div class="widget-user-image-under">
                </div>
                <div class="card-footer">
                    <div class="description">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text"><a href="<?php echo FOLLOWERS ;?>">FOLLOWERS</a></span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description ">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text"><a href="<?php echo FOLLOWING ;?>"> FOLLOWING</a></span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">LIKES</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">VIEWS</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                <!-- /.footer -->
            </div>
            <!-- /. card widget-user -->
        </div>
        <!-- column -->
    </div>
    <!-- row -->
</div>
<!-- container-fuild -->

<div class="container mt-2" >
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mb-5">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><i> Profile Edit</i></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active"><i>Profile Edit</i></li>
                    </ol>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">

                <div class="col-md-3 mb-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline borders-tops mb-3">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid rounded-circle"
                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user4-128x128.jpg"
                                    alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">Nina Mcintire</h3>

                            <p class="text-muted text-center">Software Engineer</p>

                            <hr>
                            <form method="post">
                                <div class="form-group">

                                    <label for="firstname">Firstname :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="firstname" id=""
                                            aria-describedby="helpId" placeholder="Firstname">
                                    </div>

                                    <label for="lastname">Lastname :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="lastname" id=""
                                            aria-describedby="helpId" placeholder="Lastname">
                                    </div>

                                    <label for="specialize">Career :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="specialize" id=""
                                            aria-describedby="helpId" placeholder="Specialize">
                                    </div>

                                </div>
                                <a href="#" class="btn main-active btn-block"><b>Submit</b></a>
                            </form>

                            <!-- btn-primary -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary mb-3">
                        <div class="card-header main-active p-1">
                            <h5 class="card-title text-center"><i> About Me</i></h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group">
                                    <label for="education"><strong><i class="fa fa-book mr-1"></i> Education</strong>
                                        :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-book"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="education" id=""
                                            aria-describedby="helpId"
                                            placeholder="B.S. in Computer Science from the University of Tennessee at Knoxville">
                                    </div>
                                    <hr>

                                    <label for="location"><strong><i class="fa fa-map-marker mr-1"></i>
                                            Location</strong> :</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i
                                                    class="fa fa-map-marker"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="location" id=""
                                            aria-describedby="helpId" placeholder="Malibu, California">
                                    </div>
                                    <hr>

                                    <label for="password"><strong><i class="fa fa-pencil mr-1"></i> Skills</strong>
                                    </label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i
                                                    class="fa fa-pencil"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="skills" id=""
                                            aria-describedby="helpId"
                                            placeholder='UI Design ,Coding ,Javascript ,PHP,Node.js'>
                                    </div>
                                    <hr>
                                    <label for="password"><strong><i class="fa fa-file-text-o mr-1"></i>
                                            Notes</strong></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i
                                                    class="fa fa-file-text-o"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="notes" id=""
                                            aria-describedby="helpId"
                                            placeholder='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.'>
                                    </div>
                                    <hr>
                                </div> <!-- FORM-GROUP -->
                                <a href="#" class="btn main-active btn-block"><b>Submit</b></a>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">
                    <div class="row">

                        <div class="col-md-12 mb-4">
                            <!-- Box Comment -->
                            <div class="card card-profile card1">
                                <div class="card-body">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="rounded-circle img-bordered-sm"
                                                src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg"
                                                alt="user image">
                                            <span class="username">
                                                <a href="#">Jonathan Burke Jr.</a>
                                            </span>
                                            <span class="description">Shared publicly - 7:30 PM today</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <p>
                                            Lorem ipsum represents a long-held tradition for designers,
                                            typographers and the like. Some people hate it and argue for
                                            its demise, but others ignore the hate as they create awesome
                                            tools to help create filler text for everyone from bacon lovers
                                            to Charlie Sheen fans.
                                        </p>

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                                Share</a>
                                            <a href="#" class="link-black text-sm"><i
                                                    class="fa fa-thumbs-o-up mr-1"></i>
                                                Like</a>
                                            <span class="float-right">
                                                <a href="#" class="link-black text-sm">
                                                    <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                                </a>
                                            </span>
                                        </p>

                                        <div class="input-group">
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Type a comment">
                                            <div class="input-group-append">
                                                <span class="input-group-text btn" onclick="#" aria-label="Username"
                                                    aria-describedby="basic-addon1"><i
                                                        class="fa fa-arrow-right text-muted"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.post -->

                                    <!-- Post -->
                                    <div class="post">
                                        <div class="user-block">
                                            <img class="rounded-circle img-bordered-sm"
                                                src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user6-128x128.jpg"
                                                alt="User Image">
                                            <span class="username">
                                                <a href="#">Adam Jones</a>
                                            </span>
                                            <span class="description">Posted 5 photos - 5 days ago</span>
                                        </div>
                                        <!-- /.user-block -->
                                        <div class="row mb-3">
                                            <div class="col-sm-6">
                                                <img class="img-fluid"
                                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png"
                                                    alt="Photo">
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3"
                                                            src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo2.png"
                                                            alt="Photo">
                                                        <img class="img-fluid"
                                                            src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo3.jpg"
                                                            alt="Photo">
                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <img class="img-fluid mb-3"
                                                            src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo4.jpg"
                                                            alt="Photo">
                                                        <img class="img-fluid"
                                                            src="<?php echo BASE_URL_LINK_ALL ;?>image/img/photo1.png"
                                                            alt="Photo">
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->

                                        <p>
                                            <a href="#" class="link-black text-sm mr-2"><i class="fa fa-share mr-1"></i>
                                                Share</a>
                                            <a href="#" class="link-black text-sm"><i
                                                    class="fa fa-thumbs-o-up mr-1"></i>
                                                Like</a>
                                            <span class="float-right">
                                                <a href="#" class="link-black text-sm">
                                                    <i class="fa fa-comments-o mr-1"></i> Comments (5)
                                                </a>
                                            </span>
                                        </p>

                                        <div class="input-group">
                                            <input class="form-control form-control-sm" type="text"
                                                placeholder="Type a comment">
                                            <div class="input-group-append">
                                                <span class="input-group-text btn" onclick="#" aria-label="Username"
                                                    aria-describedby="basic-addon1"><i
                                                        class="fa fa-arrow-right text-muted"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.post -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-md-6 -->

                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- whoTofollow: user whoTofollow style 1 -->
                            <div class="card mb-3">
                                <div class="card-header main-active text-center">
                                    <i> WHO TO FOLLOW </i>
                                </div>
                                <div class="card-body whoTofollow">
                                    <ul class="whoTofollow-list">
                                        <li>
                                            <div class="whoTofollow-list-img"><img
                                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                            </div>
                                            <ul class="whoTofollow-list-info">
                                                <li><a href="<?php echo PROFILE ;?>">Count Dracula</a></li>
                                                <li><small style="font-size: 12px;">Founder & CEO</small></li>
                                            </ul>
                                            <div class="whoTofollow-btn">
                                                <a href="#" type="button" class="btn main-active btn-sm">Follow</a>
                                            </div>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <div class="whoTofollow-list-img"><img
                                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                            </div>
                                            <ul class="whoTofollow-list-info">
                                                <li><a href="<?php echo PROFILE ;?>">Count Dracula</a></li>
                                                <li><small style="font-size: 12px;">Founder & CEO</small></li>
                                            </ul>
                                            <div class="whoTofollow-btn">
                                                <a href="#" type="button" class="btn main-active btn-sm">Follow</a>
                                            </div>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <div class="whoTofollow-list-img"><img
                                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                            </div>
                                            <ul class="whoTofollow-list-info">
                                                <li><a href="<?php echo PROFILE ;?>">Count Dracula</a></li>
                                                <li><small style="font-size: 12px;">Founder & CEO</small></li>
                                            </ul>
                                            <div class="whoTofollow-btn">
                                                <a href="#" type="button" class="btn main-active btn-sm">Follow</a>
                                            </div>
                                        </li>
                                        <!-- End Contact Item -->
                                        <li>
                                            <div class="whoTofollow-list-img"><img
                                                    src="<?php echo BASE_URL_LINK_ALL ;?>image/img/user1-128x128.jpg">
                                            </div>
                                            <ul class="whoTofollow-list-info">
                                                <li><a href="<?php echo PROFILE ;?>">Count Dracula</a></li>
                                                <li><small style="font-size: 12px;">Founder & CEO</small></li>
                                            </ul>
                                            <div class="whoTofollow-btn">
                                                <a href="#" type="button" class="btn main-active btn-sm">Follow</a>
                                            </div>
                                        </li>
                                        <!-- End Contact Item -->
                                    </ul>

                                </div>
                                <!-- /. card-body -->
                            </div>
                            <!-- /. card widget-user -->
                        </div>
                        <!-- /. col -->

                        <div class="col-md-12">
                            <!-- hastTag Me Box -->
                            <div class="card card-primary mb-3">
                                <div class="card-header main-active p-1">
                                    <h5 class="card-title text-center"><i> Jobs</i></h5>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <strong><i class="fa fa-book mr-1"></i> #Education</strong>

                                    <p class="text-muted">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker mr-1"></i> #Location</strong>

                                    <p class="text-muted">Malibu, California</p>

                                    <hr>

                                    <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                                    <p class="text-muted">
                                        <span class="badge badge-danger">UI Design</span>
                                        <span class="badge badge-success">Coding</span>
                                        <span class="badge badge-info">Javascript</span>
                                        <span class="badge badge-warning">PHP</span>
                                        <span class="badge badge-primary">Node.js</span>
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-file-text-o mr-1"></i> Notes</strong>

                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit. Etiam
                                        fermentum
                                        enim neque.</p>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>

<?php include "header_navbar_footer/footer.php"?>