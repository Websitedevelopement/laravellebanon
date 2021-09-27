<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

@include('layouts/header')
<!-- END: Head-->
<!-- BEGIN: Body-->
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/pickers/form-pickadate.css">

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: navbar-->
    @include('layouts/navbar')
    <!-- END navbar -->

    <!-- BEGIN LAYOUT -->
    @include('layouts/layout')
    <!-- END LAYOUT -->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list {{Auth::user()->role}} @if(Auth::user()->role == 'editor') subscriber @endif">
              
                    <!-- list section start -->
                    <div class="card">
                        <div class="card-datatable table-responsive pt-0">
                            <table class="user-list-table table">
                                <thead class="thead-light">
                                    <tr>
                                        <!-- <th></th> -->
                                        <th>User</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>StartData</th>
                                        <th>EndData</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userlists as $userlist)
                                        <tr>
                                            <td>{{$userlist -> name}}</td>
                                            <td>{{$userlist -> name}}</td>
                                            <td>{{$userlist -> email}}</td>
                                            <td><img src="{{$userlist -> profile_photo_path}}" style="width: 48px;height:36px;"></td>
                                            <td>{{$userlist -> role}}</td>
                                            <td>{{$userlist -> status}}</td>
                                            <td>{{$userlist -> startdata}}</td>
                                            <td>{{$userlist -> enddata}}</td>
                                            <td>
                                                <button class="dropdown-item userupdate_new" data-id="{{$userlist -> id}}" data-name="{{$userlist -> name}}" data-email="{{$userlist -> email}}" data-photo="{{$userlist -> profile_photo_path}}" data-role="{{$userlist -> role}}" data-status="{{$userlist -> status}}" data-startdata="{{$userlist -> startdata}}" data-enddata="{{$userlist -> enddata}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                    <span></span>
                                                </button>
                                            </td>
                                            <td>
                                                <a class="dropdown-item" href="userdelete/{{$userlist->id}}/{{Auth::user()->name}}" >
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                    <span></span>
                                                </a>
                                            </td>
                                            {{-- <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                        <!-- <i data-feather="more-vertical"></i> -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item userupdate_new" data-id="{{$userlist -> id}}" data-name="{{$userlist -> name}}" data-email="{{$userlist -> email}}" data-photo="{{$userlist -> profile_photo_path}}" data-role="{{$userlist -> role}}" data-status="{{$userlist -> status}}" data-startdata="{{$userlist -> startdata}}" data-enddata="{{$userlist -> enddata}}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 mr-50"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                                            <span>Edit</span>
                                                        </button>
                                                        <a class="dropdown-item" href="userdelete/{{$userlist->id}}/{{Auth::user()->name}}" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash mr-50"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                                            <span>Delete</span>
                                                        </a>
                                                        
                                                    </div>
                                                </div>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0" >
                                    {{csrf_field()}}
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-fullname">User Name</label>
                                            <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" name="user_fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-email">Email</label>
                                            <input type="email" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" aria-describedby="basic-icon-default-email2" name="user_email" />
                                            <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="photo">Photo</label>
                                            <!-- header media -->
                                                <div class="media">
                                                    <a href="javascript:void(0);" class="mr-25">
                                                        <img src="uploads/users/default.png" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                    </a>
                                                    <!-- upload and reset button -->
                                                    <div class="media-body mt-75 ml-1">
                                                        <label for="account-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                        <input type="file" id="account-upload" name="account-upload" hidden accept="image/*" />
                                                    </div>
                                                    <!--/ upload and reset button -->
                                                </div>
                                            <!--/ header media -->
                                            
                                            {{-- <input type="text" class="form-control dt-full-name" id="photo"
                                                placeholder="photo" name="photo" aria-label="Name"
                                                aria-describedby="photo2" /> --}}
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-email">Password</label>
                                            <input type="password" id="basic-icon-default-password" class="form-control dt-password" aria-describedby="basic-icon-default-password" name="user_password" />
                                            <small class="form-text text-muted"> password </small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="user-role">User Role</label>
                                            <select id="user-role" name="user_role" class="form-control">
                                                <option value="subscriber">Subscriber</option>
                                                <option value="editor">User</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="user-role">Status</label>
                                            <select id="status" name="status" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-date">StartDate</label>
                                            <input type="text" name='startdata' id="startdata" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-date">EndData</label>
                                            <input type="text" name='enddata' id="enddata" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                        <input type="text" value="{{Auth::user()->name}}" name="usernamesave" hidden>
                                        <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to add new user Ends-->

                        <!-- Modal to update new user starts-->
                        <div class="modal modal-slide-in update_user_modal fade" id="updateModal">
                            <div class="modal-dialog">
                                <form class="modal-content update-new-user pt-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="updateModalLabel">Update User</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="uUsername">User Name</label>
                                            <input type="text" class="form-control dt-full-name" id="uUsername" placeholder="John Doe" name="uUsername" aria-label="John Doe" aria-describedby="uUsername" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="uUseremail">Email</label>
                                            <input type="email" id="uUseremail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" aria-describedby="uUseremail2" name="uUseremail" required/>
                                            <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="uphoto">Photo</label>
                                            <!-- header media -->
                                            <div class="media">
                                                <a href="javascript:void(0);" class="mr-25">
                                                    <img id="uaccount-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                </a>
                                                <!-- upload and reset button -->
                                                <div class="media-body mt-75 ml-1">
                                                    <label for="uaccount-upload" class="btn btn-sm btn-primary mb-75 mr-75">Upload</label>
                                                    <input type="file" id="uaccount-upload" name="uaccount-upload" hidden accept="image/*" />
                                                </div>
                                                <!--/ upload and reset button -->
                                            </div>
                                        <!--/ header media -->

                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="uUserrole">User Role</label>
                                            <select id="uUserrole" name="uUserrole" class="form-control">
                                                <option value="subscriber">Subscriber</option>
                                                <option value="editor">Editor</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="user-role">Status</label>
                                            <select id="uUserstatus" name="uUserstatus" class="form-control">
                                                <option value="Active">Active</option>
                                                <option value="InActive">InActive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-date">StartDate</label>
                                            <input type="text" name='uUserstartdata' id="uUserstartdata" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-date">EndData</label>
                                            <input type="text" name='uUserenddata' id="uUserenddata" class="form-control flatpickr-basic" placeholder="YYYY-MM-DD" />
                                        </div>
                                        {{-- <input type="text" value="{{Auth::user()->name}}" id="Uusernamesave" name="Uusernamesave" hidden> --}}
                                        <button class="btn btn-primary mr-1 data-submit update_data_user">Submit</button>
                                        <button class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Modal to update new user Ends-->
                    </div>
                    <!-- list section end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('layouts/footer')
    <!-- END: Footer-->

    <!-- BEGIN: Page JS-->
    


    <script src="../../../app-assets/js/scripts/pages/app-user-list.js"></script>
    <script src="../../../app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
    <script src="../../../app-assets/js/scripts/pages/page-account-settings.js"></script>
    
    <!-- END: Page JS-->

    <script>
        $(function(){
            $(".userupdate_new").on("click", function(){
                var $id = $(this).data('id');
                var $userid = 'userupdate/' + ($(this).data('id'));
                // $("#uUserid").val($(this).data('id'));
                $("#uUsername").val($(this).data('name'));
                $("#uUseremail").val($(this).data('email'));
                $("#uaccount-upload-img").attr('src',($(this).data('photo')));
                $("#uUserrole").val($(this).data('role'));
                $("#uUserstatus").val($(this).data('status'));
                $("#uUserstartdata").val($(this).data('startdata'));
                $("#uUserenddata").val($(this).data('enddata'));
                $(".update_user_modal").modal('show');

                $('.update-new-user').submit(function(e){
                var formData = new FormData(this);
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
                //         data: { id: $id, name: $("#uUsername").val(), email: $("#uUseremail").val(), role: $("#uUserrole").val(), status: $('#uUserstatus').val(), startdata: $('#uUserstartdata').val(), enddata: $('#uUserstartdata').val()},
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

</html>