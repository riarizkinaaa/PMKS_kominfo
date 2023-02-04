<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-main-header">
      <div class="main-header-right row m-0">
        <div class="main-header-left">
          <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
          <div class="dark-logo-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/dark-logo.png" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
        </div>
        <div class="left-menu-header col">
          <ul>
            <li>
              <form class="form-inline search-form">
                <div class="search-bg"><i class="fa fa-search"></i>
                  <input class="form-control-plaintext" placeholder="Search here.....">
                </div>
              </form><span class="d-sm-none mobile-search search-bg"><i class="fa fa-search"></i></span>
            </li>
          </ul>
        </div>
        <div class="nav-right col pull-right right-menu p-0">
          <ul class="nav-menus">
            <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="onhover-dropdown"></li> 
            <li>
              <div class="mode"><i class="fa fa-moon-o"></i></div>
            </li>
            <li class="onhover-dropdown p-0">
                <form action="{{ route('logout') }}" method="POST"> 
                    @csrf               
                    <button class="btn btn-primary-light" type="submit"><i data-feather="log-out"></i>Log out</button>
                </form>
            </li>
          </ul>
        </div>
        <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
      <!-- Page Sidebar Start-->
      <header class="main-nav">
        <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="../assets/images/dashboard/1.png" alt="">
          <div class="badge-bottom"><span class="badge badge-primary">PMKS</span></div><a href="user-profile.html">
            <h6 class="mt-3 f-14 f-w-600">{{auth()->user()->username}}</h6></a>
          <p class="mb-0 font-roboto">{{auth()->user()->nama_lengkap}}</p>
        </div>
        <nav>
          <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">           
              <ul class="nav-menu custom-scrollbar">
                <li class="back-btn">
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                @if (auth()->user()->id_role == 1 )

                <li class="sidebar-main-title">
                  <div>
                    <h6>General</h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="/dashboard"><i data-feather="home"></i><span>Dashboard</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="heart"></i><span>Alamat</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="/admin">Kecamatan</a></li>
                    <li><a href="/desa">Desa</a></li>
                    <li><a href="/dusun">Dusun</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="airplay"></i><span>Jenis Prestasi</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="general-widget.html">Formal</a></li>
                    <li><a href="chart-widget.html">Non Formal</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layout"></i><span>Data Anak</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="box-layout.html">Form anak</a></li>
                    <li><a href="layout-rtl.html">Data</a></li>
                    
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user-x"></i><span>Pendidikan</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="/kelasPen">kelas pendidikan</a></li>
                    <li><a href="/pendidikan">pendidikan</a></li>
                    <li><a href="/pekerjaan">pekerjaan</a></li>
                    
                  </ul>
                </li>
                    
                @elseif(auth()->user()->id_role == 3)
                    
                <li class="sidebar-main-title">
                  <div>
                    <h6>Components</h6>
                  </div>
                </li>
                <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="sliders"></i><span>Form Controls                </span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="form-validation.html">Form Validation</a></li>
                    <li><a href="base-input.html">Base Inputs</a></li>
                    <li><a href="radio-checkbox-control.html">Checkbox & Radio</a></li>
                    <li><a href="input-group.html">Input Groups</a></li>
                    <li><a href="megaoptions.html">Mega Options </a></li>
                  </ul>
                </li>
                <li class="dropdown">          <a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="hard-drive"></i><span>Ex. Data Tables  </span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="datatable-ext-autofill.html">Auto Fill</a></li>
                    <li><a href="datatable-ext-basic-button.html">Basic Button</a></li>
                    <li><a href="datatable-ext-col-reorder.html">Column Reorder</a></li>
                    <li><a href="datatable-ext-fixed-header.html">Fixed Header</a></li>
                    <li><a href="datatable-ext-key-table.html">Key Table</a></li>
                    <li><a href="datatable-ext-responsive.html">Responsive</a></li>
                    <li><a href="datatable-ext-row-reorder.html">Row Reorder</a></li>
                    <li><a href="datatable-ext-scroller.html">Scroller                      </a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="jsgrid-table.html"><i data-feather="file-text"></i><span>Js Grid Table</span></a></li>
               
               
                
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="mail"></i><span>Email</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="email_inbox.html">Mail Inbox</a></li>
                    <li><a href="email_read.html">Read mail</a></li>
                    <li><a href="email_compose.html">Compose</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="message-circle"></i><span>Chat</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="chat.html">Chat App</a></li>
                    <li><a href="chat-video.html">Video chat</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="users"></i><span>Users</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="user-profile.html">Users Profile</a></li>
                    <li><a href="edit-profile.html">Users Edit</a></li>
                    <li><a href="user-cards.html">Users Cards</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="bookmark.html"><i data-feather="heart"></i><span>Bookmarks</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="contacts.html"><i data-feather="list"></i><span>Contacts</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="task.html"><i data-feather="check-square"></i><span>Tasks</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="calendar-basic.html"><i data-feather="calendar"></i><span>Calender        </span></a></li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="social-app.html"><i data-feather="zap"></i><span>Social App</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="to-do.html"><i data-feather="clock"></i><span>To-Do</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="search.html"><i data-feather="search"></i><span>Search Result</span></a></li>
                <li class="sidebar-main-title">

                  @elseif(auth()->user()->id_role == 2)
                <li class="sidebar-main-title">
                  <div style="text-align: center">
                    <h6>Pages</h6>
                  </div>
                </li>
                <li><a class="nav-link menu-title link-nav" href="landing-page.html"><i data-feather="navigation-2"></i><span>Landing page</span></a></li>
                <li><a class="nav-link menu-title link-nav" href="sample-page.html"><i data-feather="file"></i><span>Sample page</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="internationalization.html"><i data-feather="aperture"></i><span>Internationalization</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title link-nav" href="../starter-kit/index.html"><i data-feather="anchor"></i><span>Starter kit   </span></a></li>
                <li class="mega-menu"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Others</span></a>
                  <div class="mega-menu-container menu-content">
                    <div class="container">
                      <div class="row">
                        <div class="col mega-box">
                          <div class="link-section">
                            <div class="submenu-title">
                              <h5>Error Page</h5>
                            </div>
                            <div class="submenu-content opensubmegamenu">
                              <ul>
                                <li><a href="error-page1.html" target="_blank">Error page 1</a></li>
                                <li><a href="error-page2.html" target="_blank">Error page 2</a></li>
                                <li><a href="error-page3.html" target="_blank">Error page 3</a></li>
                                <li><a href="error-page4.html" target="_blank">Error page 4                         </a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col mega-box">
                          <div class="link-section">
                            <div class="submenu-title">
                              <h5>Coming Soon</h5>
                            </div>
                            <div class="submenu-content opensubmegamenu">
                              <ul>
                                <li><a href="comingsoon.html">Coming Simple</a></li>
                                <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="col mega-box">
                          <div class="link-section">
                            <div class="submenu-title">
                              <h5>Email templates</h5>
                            </div>
                            <div class="submenu-content opensubmegamenu">
                              <ul>
                                <li><a href="basic-template.html">Basic Email</a></li>
                                <li><a href="email-header.html">Basic With Header</a></li>
                                <li><a href="template-email.html">Ecomerce Template</a></li>
                                <li><a href="template-email-2.html">Email Template 2</a></li>
                                <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                <li><a href="email-order-success.html">Order Success      </a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="sidebar-main-title">

                @else
                <li class="sidebar-main-title">
                  <div>
                    <h6>Miscellaneous</h6>
                  </div>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="image"></i><span>Gallery</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="gallery.html">Gallery Grid</a></li>
                    <li><a href="gallery-with-description.html">Gallery Grid Desc</a></li>
                    <li><a href="gallery-masonry.html">Masonry Gallery</a></li>
                    <li><a href="masonry-gallery-with-disc.html">Masonry with Desc</a></li>
                    <li><a href="gallery-hover.html">Hover Effects</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="edit"></i><span>Blog</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="blog.html">Blog Details</a></li>
                    <li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="add-post.html">Add Post</a></li>
                  </ul>
                </li>
                <li><a class="nav-link menu-title link-nav" href="faq.html"><i data-feather="help-circle"></i><span>FAQ</span></a></li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="user-check"></i><span>Job Search</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="job-cards-view.html">Cards view</a></li>
                    <li><a href="job-list-view.html">List View</a></li>
                    <li><a href="job-details.html">Job Details</a></li>
                    <li><a href="job-apply.html">Apply</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="layers"></i><span>Learning</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="learning-list-view.html">Learning List</a></li>
                    <li><a href="learning-detailed.html">Detailed Course</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="map"></i><span>Maps</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="map-js.html">Maps JS</a></li>
                    <li><a href="vector-map.html">Vector Maps</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="git-pull-request"></i><span>Editors</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="summernote.html">Summer Note</a></li>
                    <li><a href="ckeditor.html">CK editor</a></li>
                    <li><a href="simple-MDE.html">MDE editor</a></li>
                    <li><a href="ace-code-editor.html">ACE code editor</a></li>
                  </ul>
                </li>
                <li class="dropdown"><a class="nav-link menu-title" href="javascript:void(0)"><i data-feather="database"></i><span>Knowledgebase</span></a>
                  <ul class="nav-submenu menu-content">
                    <li><a href="knowledgebase.html">Knowledgebase</a></li>
                    <li><a href="knowledge-category.html">Knowledge category</a></li>
                    <li><a href="knowledge-detail.html">Knowledge detail</a></li>
                  </ul>
                </li>
                <li><a class="nav-link menu-title link-nav" href="support-ticket.html"><i data-feather="headphones"></i><span>Support Ticket</span></a></li>
                @endif
              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </div>
        </nav>
      </header>
            
            
            