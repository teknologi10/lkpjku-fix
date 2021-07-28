<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/admintres/demo-1/export-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 00:06:03 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>LKPJKU | Kabupaten Kulon Progo</title>
    <meta name="description" content="Admintres is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Admintres Admin, Admintresadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <!-- Data table CSS -->
    <link href="<?= base_url('theme'); ?>/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="<?= base_url('theme/admintres/demo-1'); ?>/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper theme-2-active navbar-top-light horizontal-nav">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="nav-wrap">
                <div class="mobile-only-brand pull-left">
                    <div class="nav-header pull-left">
                        <div class="logo-wrap">
                            <a href="index.html">
                                <h3 class="mb-2"> LKPJKU</h3>
                                <!-- <img class="brand-img" src="../img/logo.png" alt="brand" />
                                <span class="brand-text"><img src="../img/brand.png" alt="brand" /></span> -->
                            </a>
                        </div>
                    </div>
                    <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="ti-align-left"></i></a>
                    <a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
                    <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="ti-more"></i></a>
                    <form id="search_form" role="search" class="top-nav-search collapse pull-left">
                        <div class="input-group">
                            <input type="text" name="example-input1-group2" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="zmdi zmdi-search"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                    <ul class="nav navbar-right top-nav pull-right">
                        <li class="dropdown auth-drp">
                            <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
                                Dinas Kominfo
                                <!-- <img src="../img/user1.png" alt="user_auth" class="user-auth-img img-circle" /><span class="user-online-status"></span> -->
                            </a>
                            <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                                <li>
                                    <a href="profile.html"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-card"></i><span>my balance</span></a>
                                </li>
                                <li>
                                    <a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
                                </li>
                                <li class="divider"></li>
                                <li class="sub-menu show-on-hover">
                                    <a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
                                    <ul class="dropdown-menu open-left-side">
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /Top Menu Items -->

        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li class="navigation-header mt-20">
                    <span>main</span>
                    <hr />
                </li>
                <li class="active">
                    <a href="<?= base_url(); ?>/dashboard_opd">
                        <div class="pull-left"><i class="ti-book mr-20"></i><span class="right-nav-text">dashboard</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url(); ?>/tanggapan_opd">
                        <div class="pull-left"><i class="ti-book mr-20"></i><span class="right-nav-text">tanggapan OPD</span></div>
                        <div class="clearfix"></div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Left Sidebar Menu -->

        <!-- Right Sidebar Menu -->
        <div class="fixed-sidebar-right">
            <ul class="right-sidebar">
                <li>
                    <div class="tab-struct custom-tab-1">
                        <ul role="tablist" class="nav nav-tabs" id="right_sidebar_tab">
                            <li class="active" role="presentation"><a aria-expanded="true" data-toggle="tab" role="tab" id="chat_tab_btn" href="#chat_tab">chat</a></li>
                            <li role="presentation" class=""><a data-toggle="tab" id="messages_tab_btn" role="tab" href="#messages_tab" aria-expanded="false">messages</a></li>
                            <li role="presentation" class=""><a data-toggle="tab" id="todo_tab_btn" role="tab" href="#todo_tab" aria-expanded="false">todo</a></li>
                        </ul>
                        <div class="tab-content" id="right_sidebar_content">
                            <div id="chat_tab" class="tab-pane fade active in" role="tabpanel">
                                <div class="chat-cmplt-wrap">
                                    <div class="chat-box-wrap">
                                        <div class="add-friend">
                                            <a href="javascript:void(0)" class="inline-block txt-grey">
                                                <i class="zmdi zmdi-more"></i>
                                            </a>
                                            <span class="inline-block txt-dark">users</span>
                                            <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                        <form role="search" class="chat-search pl-15 pr-15 pb-15">
                                            <div class="input-group">
                                                <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn  btn-default"><i class="zmdi zmdi-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                        <div id="chat_list_scroll">
                                            <div class="nicescroll-bar">
                                                <ul class="chat-list-wrap">
                                                    <li class="chat-list">
                                                        <div class="chat-body">
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Clay Masse</span>
                                                                        <span class="time block truncate txt-grey">No one saves us but ourselves.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user1.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Evie Ono</span>
                                                                        <span class="time block truncate txt-grey">Unity is strength</span>
                                                                    </div>
                                                                    <div class="status offline"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user2.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Madalyn Rascon</span>
                                                                        <span class="time block truncate txt-grey">Respect yourself if you would have others respect you.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user3.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Mitsuko Heid</span>
                                                                        <span class="time block truncate txt-grey">I’m thankful.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Ezequiel Merideth</span>
                                                                        <span class="time block truncate txt-grey">Patience is bitter.</span>
                                                                    </div>
                                                                    <div class="status offline"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user1.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Jonnie Metoyer</span>
                                                                        <span class="time block truncate txt-grey">Genius is eternal patience.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user2.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Angelic Lauver</span>
                                                                        <span class="time block truncate txt-grey">Every burden is a blessing.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user3.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Priscila Shy</span>
                                                                        <span class="time block truncate txt-grey">Wise to resolve, and patient to perform.</span>
                                                                    </div>
                                                                    <div class="status online"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                            <a href="javascript:void(0)">
                                                                <div class="chat-data">
                                                                    <img class="user-img img-circle" src="../img/user4.png" alt="user" />
                                                                    <div class="user-data">
                                                                        <span class="name block capitalize-font">Linda Stack</span>
                                                                        <span class="time block truncate txt-grey">Our patience will achieve more than our force.</span>
                                                                    </div>
                                                                    <div class="status away"></div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recent-chat-box-wrap">
                                        <div class="recent-chat-wrap">
                                            <div class="panel-heading ma-0">
                                                <div class="goto-back">
                                                    <a id="goto_back" href="javascript:void(0)" class="inline-block txt-grey">
                                                        <i class="zmdi zmdi-chevron-left"></i>
                                                    </a>
                                                    <span class="inline-block txt-dark">ryan</span>
                                                    <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-more"></i></a>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                            <div class="panel-wrapper collapse in">
                                                <div class="panel-body pa-0">
                                                    <div class="chat-content">
                                                        <ul class="nicescroll-bar pt-20">
                                                            <li class="friend">
                                                                <div class="friend-msg-wrap">
                                                                    <img class="user-img img-circle block pull-left" src="../img/user.png" alt="user" />
                                                                    <div class="msg pull-left">
                                                                        <p>Hello Jason, how are you, it's been a long time since we last met?</p>
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-light">2:30 PM</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="self mb-10">
                                                                <div class="self-msg-wrap">
                                                                    <div class="msg block pull-right"> Oh, hi Sarah I'm have got a new job now and is going great.
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-light">2:31 pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="self">
                                                                <div class="self-msg-wrap">
                                                                    <div class="msg block pull-right"> How about you?
                                                                        <div class="msg-per-detail text-right">
                                                                            <span class="msg-time txt-light">2:31 pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                            <li class="friend">
                                                                <div class="friend-msg-wrap">
                                                                    <img class="user-img img-circle block pull-left" src="../img/user.png" alt="user" />
                                                                    <div class="msg pull-left">
                                                                        <p>Not too bad.</p>
                                                                        <div class="msg-per-detail  text-right">
                                                                            <span class="msg-time txt-light">2:35 pm</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="input-group">
                                                        <input type="text" id="input_msg_send" name="send-msg" class="input-msg-send form-control" placeholder="Type something">
                                                        <div class="input-group-btn emojis">
                                                            <div class="dropup">
                                                                <button type="button" class="btn  btn-default  dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-mood"></i></button>
                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="javascript:void(0)">Action</a></li>
                                                                    <li><a href="javascript:void(0)">Another action</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="javascript:void(0)">Separated link</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="input-group-btn attachment">
                                                            <div class="fileupload btn  btn-default"><i class="zmdi zmdi-attachment-alt"></i>
                                                                <input type="file" class="upload">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="messages_tab" class="tab-pane fade" role="tabpanel">
                                <div class="message-box-wrap">
                                    <div class="msg-search">
                                        <a href="javascript:void(0)" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">messages</span>
                                        <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-search"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="set-height-wrap">
                                        <div class="streamline message-box nicescroll-bar">
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="../img/user.png" alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span class="inline-block capitalize-font   pull-left message-per">Clay Masse</span>
                                                        <span class="inline-block font-11  pull-right message-time">12:28 AM</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Themeforest message sent via your envato market profile</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsu messm quia dolor sit amet, consectetur, adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="../img/user1.png" alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span class="inline-block capitalize-font   pull-left message-per">Evie Ono</span>
                                                        <span class="inline-block font-11  pull-right message-time">1 Feb</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Pogody theme support</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="../img/user2.png" alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span class="inline-block capitalize-font   pull-left message-per">Madalyn Rascon</span>
                                                        <span class="inline-block font-11  pull-right message-time">31 Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Congratulations from design nominees</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="../img/user3.png" alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span class="inline-block capitalize-font   pull-left message-per">Ezequiel Merideth</span>
                                                        <span class="inline-block font-11  pull-right message-time">29 Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Themeforest item support message</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item unread-message">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="../img/user4.png" alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span class="inline-block capitalize-font   pull-left message-per">Jonnie Metoyer</span>
                                                        <span class="inline-block font-11  pull-right message-time">27 Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Help with beavis contact form</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="../img/user.png" alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span class="inline-block capitalize-font   pull-left message-per">Priscila Shy</span>
                                                        <span class="inline-block font-11  pull-right message-time">19 Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject">Your uploaded theme is been selected</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)">
                                                <div class="sl-item">
                                                    <div class="sl-avatar avatar avatar-sm avatar-circle">
                                                        <img class="img-responsive img-circle" src="../img/user1.png" alt="avatar" />
                                                    </div>
                                                    <div class="sl-content">
                                                        <span class="inline-block capitalize-font   pull-left message-per">Linda Stack</span>
                                                        <span class="inline-block font-11  pull-right message-time">13 Jan</span>
                                                        <div class="clearfix"></div>
                                                        <span class=" truncate message-subject"> A new rating has been received</span>
                                                        <p class="txt-grey truncate">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="todo_tab" class="tab-pane fade" role="tabpanel">
                                <div class="todo-box-wrap">
                                    <div class="add-todo">
                                        <a href="javascript:void(0)" class="inline-block txt-grey">
                                            <i class="zmdi zmdi-more"></i>
                                        </a>
                                        <span class="inline-block txt-dark">todo list</span>
                                        <a href="javascript:void(0)" class="inline-block text-right txt-grey"><i class="zmdi zmdi-plus"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="set-height-wrap">
                                        <!-- Todo-List -->
                                        <ul class="todo-list nicescroll-bar">
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-default">
                                                    <input type="checkbox" id="checkbox01" />
                                                    <label for="checkbox01">Record The First Episode</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-pink">
                                                    <input type="checkbox" id="checkbox02" />
                                                    <label for="checkbox02">Prepare The Conference Schedule</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-warning">
                                                    <input type="checkbox" id="checkbox03" checked />
                                                    <label for="checkbox03">Decide The Live Discussion Time</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-success">
                                                    <input type="checkbox" id="checkbox04" checked />
                                                    <label for="checkbox04">Prepare For The Next Project</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-danger">
                                                    <input type="checkbox" id="checkbox05" checked />
                                                    <label for="checkbox05">Finish Up AngularJs Tutorial</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                            <li class="todo-item">
                                                <div class="checkbox checkbox-purple">
                                                    <input type="checkbox" id="checkbox06" checked />
                                                    <label for="checkbox06">Finish Infinity Project</label>
                                                </div>
                                            </li>
                                            <li>
                                                <hr class="light-grey-hr" />
                                            </li>
                                        </ul>
                                        <!-- /Todo-List -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /Right Sidebar Menu -->

        <!-- Right Setting Menu -->
        <div class="setting-panel">
            <ul class="right-sidebar nicescroll-bar pa-0">
                <li class="layout-switcher-wrap">
                    <ul>
                        <li>
                            <span class="layout-title">Scrollable header</span>
                            <span class="layout-switcher">
                                <input type="checkbox" id="switch_3" class="js-switch" data-color="ff6028" data-secondary-color="#dedede" data-size="small" />
                            </span>
                            <h6 class="mt-30 mb-15">Sidebar colors</h6>
                            <ul class="theme-option-wrap">
                                <li id="theme-1"><i class="zmdi zmdi-check"></i></li>
                                <li id="theme-2" class="active-theme"><i class="zmdi zmdi-check"></i></li>
                            </ul>
                            <h6 class="mt-30 mb-15">Topbar colors</h6>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-blue" value="navbar-top-blue">
                                <label class="capitalize-font" for="navbar-top-blue"> blue </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-skyblue" value="navbar-top-skyblue">
                                <label class="capitalize-font" for="navbar-top-skyblue"> skyblue </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-navyblue" checked value="navbar-top-navyblue">
                                <label class="capitalize-font" for="navbar-top-navyblue"> navyblue </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-purple" value="navbar-top-purple">
                                <label class="capitalize-font" for="navbar-top-purple"> purple </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-pink" value="navbar-top-pink">
                                <label class="capitalize-font" for="navbar-top-pink"> pink </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-red" value="navbar-top-red">
                                <label class="capitalize-font" for="navbar-top-red"> red </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-yellow" value="navbar-top-yellow">
                                <label class="capitalize-font" for="navbar-top-yellow"> yellow </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-green" value="navbar-top-green">
                                <label class="capitalize-font" for="navbar-top-green"> green </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-teal" value="navbar-top-teal">
                                <label class="capitalize-font" for="navbar-top-teal"> teal </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-violet" value="navbar-top-violet">
                                <label class="capitalize-font" for="navbar-top-violet"> violet </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-chrome" value="navbar-top-chrome">
                                <label class="capitalize-font" for="navbar-top-chrome"> chrome </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-orange" value="navbar-top-orange">
                                <label class="capitalize-font" for="navbar-top-orange"> orange </label>
                            </div>
                            <div class="radio mb-5">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-dark" value="navbar-top-dark">
                                <label class="capitalize-font" for="navbar-top-dark"> dark </label>
                            </div>
                            <div class="radio mb-35">
                                <input type="radio" name="radio-topbar-color" id="navbar-top-light" value="navbar-top-light">
                                <label class="capitalize-font" for="navbar-top-light"> light </label>
                            </div>
                            <button id="reset_setting" class="btn  btn-warning btn-xs btn-outline btn-rounded mb-10">reset</button>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <button id="setting_panel_btn" class="btn btn-warning btn-circle setting-panel-btn shadow-2dp"><i class="zmdi zmdi-settings"></i></button>
        <!-- /Right Setting Menu -->