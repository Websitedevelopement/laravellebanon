<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<?php echo $__env->make('layouts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- END: Head-->
<!-- BEGIN: Body-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: navbar-->
    <?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END navbar -->

    <!-- BEGIN LAYOUT -->
    <?php echo $__env->make('layouts/layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END LAYOUT -->

    <!-- BEGIN: Content-->
    <div class="app-content content <?php if(Auth::user()->rolefunction->siteinfo_view != 'on'): ?> data-page-close <?php endif; ?>">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body mb-5">
                <!-- users list start -->
                <section class="app-user-list">
                    <?php $__currentLoopData = $siteinfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siteinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <!-- list section start -->
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Title</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="title" value=<?php echo e($siteinfo -> title); ?> placeholder="Enter Title" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Phone Number</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="phone" value=<?php echo e($siteinfo -> phone); ?> placeholder="Enter Phone Number" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Email Address</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="email" class="form-control" id="email" value=<?php echo e($siteinfo -> email); ?> placeholder="Enter Email Address" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Office Address</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="office" value="<?php echo e($siteinfo -> office); ?>" placeholder="Enter Office Address" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Whatapp Number</h3>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">

                                        <input type="text" class="form-control" id="whatapp" value=<?php echo e($siteinfo -> whatapp); ?> placeholder="Enter Whatapp Number" disabled/>
                            
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Logo</h3>
                                </div>
                                <div class="col-md-8">
                                    
                                    <!-- header media -->
                                    <div class="media">
                                    
                                            <a href="javascript:void(0);" class="mr-25">
                                                <img src="<?php echo e($siteinfo -> logo); ?>" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="200" />
                                            </a>
                        
                                        
                                        <!-- upload and reset button -->
                                        
                                        <!--/ upload and reset button -->
                                    </div>
                                    <!--/ header media -->
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Contacts</h3>
                                </div>
                                <div class="col-md-8">
                    
                                    <input type="text" class="form-control" id="title" value=<?php echo e($siteinfo -> contacts); ?> placeholder="Enter Contacts" disabled/>
                        
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 ">
                                    <h3>Location</h3>
                                    <h3 class="mt-2">Lat</h3>
                                    <input type="text" class="form-control" id="title" value=<?php echo e($siteinfo -> lat); ?> disabled/>
                                    <h3 class="mt-2">Lng</h3>
                                    <input type="text" class="form-control" id="title" value=<?php echo e($siteinfo -> lng); ?> disabled/>
                                </div>
                                <div class="col-md-8" style="height:300px; display:flex">
                                    
                                    <div id="map" style="">
                                    
                                    </div>
                                </div>
                            </div>
                        
                        <!-- list section end -->
                        <div class="row ">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                    <button type="button" class="btn btn-primary justofy-content-center d-flex mt-5 data-submit userupdate_new <?php if(Auth::user()->rolefunction->siteinfo_write != 'on'): ?> data-page-close <?php endif; ?>" data-id="<?php echo e($siteinfo -> id); ?>" data-title="<?php echo e($siteinfo -> title); ?>" data-logo="<?php echo e($siteinfo -> logo); ?>" data-contacts="<?php echo e($siteinfo -> contacts); ?>" data-lat="<?php echo e($siteinfo -> lat); ?>" data-lng="<?php echo e($siteinfo -> lng); ?>" data-phone="<?php echo e($siteinfo -> phone); ?>" data-email="<?php echo e($siteinfo -> email); ?>" data-office="<?php echo e($siteinfo -> office); ?>" data-whatapp="<?php echo e($siteinfo -> whatapp); ?>">Edit</button>
                            </div>
                            
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- Modal to update new user starts-->
                    <div class="modal modal-slide-in update_user_modal fade" id="updateModal">
                        <div class="modal-dialog">
                            <form class="modal-content update-new-user pt-0">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="updateModalLabel">Update Info</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                    <div class="form-group">
                                        <label class="form-label" for="utitle">Title</label>
                                        <input type="text" class="form-control dt-full-name" id="utitle"  name="utitle" aria-label="utitle" aria-describedby="utitle" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="uphone">Phone Number</label>
                                        <input type="text" class="form-control dt-full-name" id="uphone"  name="uphone" aria-label="uphone" aria-describedby="uphone" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="uemail">Email Address</label>
                                        <input type="email" class="form-control dt-full-name" id="uemail"  name="uemail" aria-label="uemail" aria-describedby="uemail" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="uoffice">Office Address</label>
                                        <input type="text" class="form-control dt-full-name" id="uoffice"  name="uoffice" aria-label="uoffice" aria-describedby="uoffice" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="uwhatapp">Whatapp Number</label>
                                        <input type="text" class="form-control dt-full-name" id="uwhatapp"  name="uwhatapp" aria-label="uwhatapp" aria-describedby="uwhatapp" required/>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="utitle">Logo</label>
                                        <div class="media">
                                            <a href="javascript:void(0);" class="mr-25">
                                                <img  id="uaccount-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                            </a>
                                            <!-- upload and reset button -->
                                            <div class="media-body mt-75 ml-1">
                                                <label for="uaccount-upload" class="btn btn-sm btn-primary mb-75 mr-75">Change</label>
                                                <input type="file" id="uaccount-upload" name="uaccount-upload" hidden accept="image/*" />
                                            </div>
                                            <!--/ upload and reset button -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="ucontacts">Contact</label>
                                        <input type="text" class="form-control dt-full-name" id="ucontacts"  name="ucontacts" aria-label="ucontacts" aria-describedby="ucontacts" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="ulat">Lat</label>
                                        <input type="text" class="form-control dt-full-name" id="ulat"  name="ulat" aria-label="ulat" aria-describedby="ulat" required/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="ulng">Lng</label>
                                        <input type="text" class="form-control dt-full-name" id="ulng"  name="ulng" aria-label="ulng" aria-describedby="ulng" required/>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mr-1 data-submit update_data_user <?php if(Auth::user()->rolefunction->siteinfo_write != 'on'): ?> data-page-close <?php endif; ?>">Submit</button>
                                    <button class="btn btn-outline-secondary <?php if(Auth::user()->rolefunction->siteinfo_write != 'on'): ?> data-page-close <?php endif; ?>" data-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Modal to update new user Ends-->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- END: Footer-->

    <!-- BEGIN: Page JS-->
    <?php $__currentLoopData = $siteinfos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siteinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <script>
            var maplat = JSON.parse("<?php echo e($siteinfo -> lat); ?>");
            var maplng = JSON.parse("<?php echo e($siteinfo -> lng); ?>");
        </script>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0ddhKTA8ilSdtLJQcBMXoGe73aU3Hcro&callback=initMap&libraries=&v=weekly" async></script>
    <script src="<?php echo e(('js/map.js')); ?>"></script>

    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    <!-- END: Page JS-->

    <script>
        $(function(){
            $(".userupdate_new").on("click", function(){
                var $id = $(this).data('id');
                var $userid = 'siteinfoupdate/' + ($(this).data('id'));
                // $("#uUserid").val($(this).data('id'));
                $("#utitle").val($(this).data('title'));
                $("#uaccount-upload-img").attr('src',($(this).data('logo')));
                $("#ucontacts").val($(this).data('contacts'));
                $("#ulat").val($(this).data('lat'));
                $("#ulng").val($(this).data('lng'));
                $("#uphone").val($(this).data('phone'));
                $("#uemail").val($(this).data('email'));
                $("#uoffice").val($(this).data('office'));
                $("#uwhatapp").val($(this).data('whatapp'));
                $(".update_user_modal").modal('show');
                
                $('.update-new-user').submit(function(e){
                    var formData = new FormData(this);
                    // console.log(formData)
                    e.preventDefault();
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'post',
                        url: $userid,
                        cache:false,
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                            if(data['success']){
                                window.location.reload();
                            }
                        }
                    });
                });


                // $('.update_data_user').on("click", function(){
                //     console.log($userid);
                //     $.ajax({
                //         headers: {
                //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //         },
                //         type: 'post',
                //         url: $userid,
                //         data: { id: $id, companyname: $("#ucompanyname").val(), status: $("#ustatus").val()},
                //         success: function(data) {
                //             if(data['success']){
                //                 window.location.reload();
                //             }
                //         }
                //     });
               
                //     // window.location.reload();
                // });
               
            
            });
            
        })
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });
        
       
    </script>
</body>
<!-- END: Body-->

</html><?php /**PATH D:\Lebanon\phpframe\data\resources\views//siteinfo.blade.php ENDPATH**/ ?>