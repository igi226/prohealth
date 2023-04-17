<?php
$admin_data = DB::table('admins')->first();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- theme meta -->
      <title>@yield('title')</title>
      <link rel="icon" type="image/x-icon" href="{{ asset('storage/SiteImages/'. $admin_data->site_favicon) }}">
      <!-- Styles -->
      <link href="{{ asset("Admin/css/lib/data-table/buttons.bootstrap.min.css") }}" rel="stylesheet" />
      <link href="{{ asset('Admin/css/lib/font-awesome.min.css') }}" rel="stylesheet">
      <link href="{{ asset('Admin/css/lib/themify-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('Admin/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('Admin/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('Admin/css/lib/weather-icons.css') }}" rel="stylesheet" />
      <link href="{{ asset('Admin/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('Admin/css/lib/bootstrap.min.css') }}" rel="stylesheet">
      {{-- <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css"> --}}
      <link href="{{ asset('Admin/css/lib/sweetalert/sweetalert.css') }}" rel="stylesheet">
      <link href="{{ asset('Admin/css/lib/helper.css') }}" rel="stylesheet">
      <link href="{{ asset('Admin/css/style.css') }}" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

      <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

   </head>
   <body>
      <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
         <div class="nano">
            <div class="nano-content">
               <ul>
                  <div class="logo"><a href="{{ route('admin.dashboard') }}">
                     @if (isset($admin_data->site_logo) && !empty($admin_data->site_logo))
                     <img height="50" width="150" src="{{ asset('storage/SiteImages/'. $admin_data->site_logo) }}" alt=""><br><br>
                     @else
                     <img height="80" width="100" src="{{asset('noimg.png')}}" alt="no-p_image">    
                     @endif<span>{{ $admin_data->site_name }}</span></a>
                  </div>
                  <li class="label">Main</li>
                  <li class={{ Route::is('admin.dashboard') ? 'active' : '' }}><a  href="{{ route('admin.dashboard') }}"><i class="ti-home"></i> Dashboard <span></a>
                  </li>

                  <li class={{ Request::segment(2) == "users" ? "open": "" }}><a class="sidebar-sub-toggle"><i class="ti-user"></i> Users <span
                     class="sidebar-collapse-icon ti-angle-down"></span></a>
                     <ul>
                        <li class={{ Route::is('users.index') ? 'active' : '' }} ><a href="{{ route('users.index') }}">List of users</a></li>
                        <li class={{ Route::is('users.create') ? 'active' : '' }}><a href="{{ route('users.create') }}">Add user</a></li>
                        
                     </ul>
                  </li>

                  <li class={{ Request::segment(2) == "cms" ? "open": "" }}><a class="sidebar-sub-toggle"><i class="ti-write"></i> Cms <span
                     class="sidebar-collapse-icon ti-angle-down"></span></a>
                     <ul>
                        <li class={{ Route::is('cms.index') ? 'active' : '' }} ><a href="{{ route('cms.index') }}">List of cms</a></li>
                        {{-- <li class={{ Route::is('cms.create') ? 'active' : '' }}><a href="{{ route('cms.create') }}">Add cms</a></li> --}}
                        <li class={{ Route::is('videos') ? 'active' : '' }}><a href="{{ route('videos') }}">Videos cms</a></li>
                        <li class={{ Route::is('videosCreate') ? 'active' : '' }}><a href="{{ route('videosCreate') }}">Add videos cms</a></li>
                        
                     </ul>
                  </li>
                  <li class={{ Request::segment(2) == "blogs" ? "open": "" }}><a class="sidebar-sub-toggle"><i class="ti-files"></i> Blogs <span
                     class="sidebar-collapse-icon ti-angle-down"></span></a>
                     <ul>
                         <li class={{ Route::is('blogs.index') ? 'active' : '' }}><a href="{{ route('blogs.index') }}">List of Blogs</a></li>
                         <li class={{ Route::is('blogs.create') ? 'active' : '' }}><a href="{{ route('blogs.create') }}">Add Blog</a></li>
                         {{-- <li class={{ Request::is('admin/comments') ? 'active' : '' }}><a href="{{ url('admin/comments') }}">List of Comments</a></li> --}}
                         
                     </ul>
                 </li>
                 <li class={{ Request::segment(2) == "consultations" ? "open": "" }}><a class="sidebar-sub-toggle"><i class="ti-panel"></i> Consultations <span
                  class="sidebar-collapse-icon ti-angle-down"></span></a>
                  <ul>
                      <li class={{ Route::is('consultations.index') ? 'active' : '' }}><a href="{{ route('consultations.index') }}">List of consultations</a></li>
                      <li class={{ Route::is('consultations.create') ? 'active' : '' }}><a href="{{ route('consultations.create') }}">Add consultation</a></li>
                      {{-- <li class={{ Request::is('admin/comments') ? 'active' : '' }}><a href="{{ url('admin/comments') }}">List of Comments</a></li> --}}
                      
                  </ul>
              </li>

              <li class={{ Request::segment(2) == "appointments" ? "open": "" }}><a class="sidebar-sub-toggle"><i class="ti-support"></i> Appointments <span
               class="sidebar-collapse-icon ti-angle-down"></span></a>
               <ul>
                   <li class={{ Route::is('appointments.index') ? 'active' : '' }}><a href="{{ route('appointments.index') }}">List of appointments</a></li>
                   {{-- <li class={{ Route::is('appointments.create') ? 'active' : '' }}><a href="{{ route('appointments.create') }}">Add appoinment</a></li> --}}
                   
               </ul>
           </li>

                 <li class={{ Request::segment(2) == "packages" ? "open": "" }}><a class="sidebar-sub-toggle"><i class="ti-package"></i> Packages <span
                  class="sidebar-collapse-icon ti-angle-down"></span></a>
                  <ul>
                      <li class={{ Route::is('packages.index') ? 'active' : '' }}><a href="{{ route('packages.index') }}">List of Packages</a></li>
                      <li class={{ Route::is('packages.create') ? 'active' : '' }}><a href="{{ route('packages.create') }}">Add Package</a></li>
                      
                  </ul>
              </li>
              
              <li class={{ Request::segment(2) == "testimonials" ? "open": "" }}><a class="sidebar-sub-toggle"><i class="ti-star"></i> Testimonials <span
                  class="sidebar-collapse-icon ti-angle-down"></span></a>
                  <ul>
                     <li class={{ Route::is('testimonials.index') ? 'active' : '' }}><a href="{{ route('testimonials.index') }}">List of Testimonials</a></li>
                     <li class={{ Route::is('testimonials.create') ? 'active' : '' }}><a href="{{ route('testimonials.create') }}">Add Testimonial</a></li>
                     {{-- <li class={{ Request::is('admin/comments') ? 'active' : '' }}><a href="{{ url('admin/comments') }}">List of Comments</a></li> --}}
                     
                  </ul>
            </li>
            <li class={{ Request::segment(2) == "quizzes" ? "open": "" }}><a class="sidebar-sub-toggle"><i class="ti-star"></i> Quizzes <span
               class="sidebar-collapse-icon ti-angle-down"></span></a>
               <ul>
                  <li class={{ Route::is('quizzes.index') ? 'active' : '' }}><a href="{{ route('quizzes.index') }}">List of Quizzes</a></li>
                  <li class={{ Route::is('quizzes.create') ? 'active' : '' }}><a href="{{ route('quizzes.create') }}">Add Quizzes</a></li>
                  {{-- <li class={{ Request::is('admin/comments') ? 'active' : '' }}><a href="{{ url('admin/comments') }}">List of Comments</a></li> --}}
                  
               </ul>
            </li>
            <li class={{ Route::is('admin.queries') ? 'active' : '' }}><a  href="{{ route('admin.queries') }}"><i class="ti-help"></i> Queries <span></a>


                  <li class={{ Route::is('admin.siteSettings') ? 'active' : '' }}><a  href="{{ route('admin.siteSettings') }}"><i class="ti-settings"></i> Site Settings <span></a>
                  </li>
                  <li><a href="{{ route('admin.logout') }}"><i class="ti-close"></i> Logout</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- /# sidebar -->
      <div class="header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="float-left">
                     <div class="hamburger sidebar-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                     </div>
                  </div>
                  <div class="float-right">
                     <div class="dropdown dib">
                        <div class="header-icon dropdown">
                           <span class="user-avatar" data-toggle="dropdown" aria-expanded="false">Admin
                           <i class="ti-angle-down f-s-10"></i>
                           </span>
                           <div class="dropdown-menu dropdown-content-body">
                              <div class="">
                                 <ul>
                                    <li>
                                       <a href="{{ route("admin.adminProfile") }}">
                                       <i class="ti-user"></i>
                                       <span>Profile</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{ route("admin.adminChangePassword") }}">
                                       <i class="ti-settings"></i>
                                       <span>Change Password</span>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="{{ route('admin.logout') }}">
                                       <i class="ti-power-off"></i>
                                       <span>Logout</span>
                                       </a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="content-wrap">
        <div class="main">
           <div class="container-fluid">
              <!-- /# row -->
              <section id="main-content">
                 @yield('content')
              </section>
              <div class="row">
                 <div class="col-lg-12">
                    <div class="footer">
                       <p>
                          <script>
                             document.write(new Date().getFullYear())
                          </script> © {{ $admin_data->site_name }}.
                       </p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
    
      <script src="{{ asset('Admin/js/lib/jquery.min.js') }}"></script>
      <script src="{{ asset('Admin/js/lib/jquery.nanoscroller.min.js') }}"></script>
      <script src="{{ asset('Admin/js/lib/menubar/sidebar.js') }}"></script>
      <script src="{{ asset('Admin/js/lib/preloader/pace.min.js') }}"></script>
      <script src="{{ asset('Admin/js/lib/bootstrap.min.js') }}"></script>
      <script src="{{ asset('Admin/js/scripts.js') }}"></script>
      {{--  --}}
      <script src="{{ asset('Admin/js/lib/sweetalert/sweetalert.min.js') }}"></script>
      <script src="{{ asset('Admin/js/lib/sweetalert/sweetalert.init.js') }}"></script>
      {{-- <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}
      {{-- <script src="{{ asset("Admin/js/lib/data-table/datatables.min.js") }}"></script>
   
    
    <script src="{{ asset("Admin/js/lib/data-table/datatables-init.js") }}"></script> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
      <script>
         $(document).ready(function () {
         $('#example').DataTable();
         });
         // 2nov summernote
         // <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
      @yield('userStatus')
      @yield('changePS')
      {{--  --}}
      <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

      <script>
       $('#summernote').summernote({
         placeholder: 'Enter Text here.........',
         tabsize: 2,
         height: 300,
         
       });
    </script>
      <script src="{{ asset('Admin/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('Admin/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
      <script>
         $(document).ready(function () {
            $('#example').DataTable();
         });
         $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
             var name = $(this).data("name");
             //alert(form);
             event.preventDefault();
                  swal({
                  title: "Are you sure to delete ?",
                  text: "You will not be able to recover this imaginary file !!",
                  type: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#DD6B55",
                  confirmButtonText: "Yes, delete it !!",
                  cancelButtonText: "No, cancel it !!",
                  closeOnConfirm: false,
                  closeOnCancel: false,
                  },
                  function (isConfirm) {
                  if (isConfirm) {
                     form.submit();
                  } else {
                     swal("Cancelled !!", "Hey, your imaginary file is safe !!", "error");
                  }
                  });
         });
         
     </script>
   </body>
</html>