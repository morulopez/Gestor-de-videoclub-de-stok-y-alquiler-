<!DOCTYPE html>





<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Busy Admin - Material Bootstrap Dashboard</title>
    <!-- Bootstrap -->
    <link href="<?php echo CDN;?>css/font-awesome.min.css" rel="stylesheet">
    <link href='<?php echo CDN;?>http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900%7CRoboto+Mono:400,300,700' rel='stylesheet'
        type='text/css'>
    <link href="<?php echo CDN;?>css/busy.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body> <section  mt-navigation-type="vertical" mt-nav-placement="left" theme-layout="wide-layout" theme-bg="bg1">
    <div id="mtapp-wrapper" class="mt-hide-lpanel" mt-device-type="desktop">
        <header id="mt-header" mt-lpanel-effect="shrink" mt-color-type="logo-bg3">
            <div class="mt-left-header">
                <a class="nav-expand" href="#"><img src="<?php echo CDN;?>images/1.jpg" class="img-circle"></a>
                <a class="brandname" href="#"><i class="fa fa-eercast"></i> <span> Administrador</span></a>
                <span class="mt-sidebar-toggle"><a href="#"></a></span>
            </div>
            <div class="mt-right-header" mt-position-type="relative" mt-color-type="header-bg3">
                <span class="mt-sidebar-toggle"><a href="#"></a></span>
            </div>
        </header>
        <div id="mtapp-container" mt-color-type="lpanel-bg3" mt-lpanel-effect="shrink">
            <aside id="mt-left-panel" mt-position-type="absolute">
                <div class="user-block clearfix"> <img src="<?php echo CDN;?>images/1.jpg" class="img-responsive" alt="User Avatar">
                </div>
                <ul class="nav panel-list">
                    <li class="nav-level">Menú</li>
                    <li class="mt-has-menu">
                        <a href="javascript:void(0)" class="rippler rippler-default">
                            <i class="fa fa-user"></i>
                            <span class="menu-text">CLIENTES</span>
                            <span class="selected"></span>
                        </a>
                        <ul class="mt-sub-menu">
                            <li>
                                <a href="<?php echo site_url('Clientes/listar_clientes');?>" class="rippler rippler-default">
                                    <span class="menu-text">LISTADO DE CLIENTES</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Clientes/cliente_nuevo');?>" class="rippler rippler-default">
                                    <span class="menu-text">CREAR NUEVO DE CLIENTE</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-has-menu">
                        <a href="javascript:void(0)" class="rippler rippler-default">
                            <i class="fa fa-video-camera"></i>
                            <span class="menu-text">PELICULAS</span>
                            <span class="selected"></span>
                        </a>
                        <ul class="mt-sub-menu">
                            <li>
                                <a href="<?php echo site_url('Peliculas/listar_peliculas');?>" class="rippler rippler-default">
                                    <span class="menu-text">LISTADO DE PELICULAS</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Alquiler/listar_producto_sin_devolver/pelicula');?>" class="rippler rippler-default">
                                    <span class="menu-text">PELICULAS SIN DEVOLVER</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                     <li class="mt-has-menu">
                        <a href="javascript:void(0)" class="rippler rippler-default">
                            <i class="fa fa-gamepad"></i>
                            <span class="menu-text">VIDEOJUEGOS</span>
                            <span class="selected"></span>
                        </a>
                        <ul class="mt-sub-menu">
                            <li>
                                <a href="<?php echo site_url('Videojuegos/listar_videojuego');?>" class="rippler rippler-default">
                                    <span class="menu-text">LISTADO DE VIDEOJUEGOS</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('Alquiler/listar_producto_sin_devolver/videojuego');?>" class="rippler rippler-default">
                                    <span class="menu-text">VIDEOJUEGOS SIN DEVOLVER</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Nuevo_producto/producto_nuevo');?>">
                            <i class="fa fa-plus"></i>
                            <span class="menu-text">CREAR PRODUCTO NUEVO</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('Venta/ultimas_cien_ventas');?>">
                            <i class="fa fa-money"></i>
                            <span class="menu-text">ULTIMAS CIEN VENTAS</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    
            </aside>
            <nav class="offcanvas-right z-depth-2">
                <div class="sb-content">
                    <a href="#" class="nav-close"><i class="fa fa-close"></i></a>
                    <div class="user-info"><img src="<?php echo CDN;?>images/1.jpg"><span class="name">Charles X<span class="status"></span></span><span class="position">Admin Director</span></div>
                    <div class="tab-navigation">
                        <ul role="tablist" class="nav nav-tabs nav-justified">
                            <li role="presentation" class="active">
                                <a href="#tab1"  role="tab" data-toggle="tab"> <span class="fa fa-bell-o"></span></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab"> <span class="fa fa-envelope-o"></span></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3"  role="tab" data-toggle="tab"> <span class="fa fa-cogs"></span></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4"  role="tab" data-toggle="tab"> <span class="fa fa-tags"></span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-panel">
                        <div class="tab-content">
                            <div id="tab1" role="tabpanel" class="tab-pane announcement active am-scroller nano">
                                <div class="nano-content scroller">
                                    <div class="content ">
                                        <h2>Notifications</h2>
                                        <ul>
                                            <li>
                                                <div class="icon"><span class="fa fa-user-plus"></span></div>
                                                <div class="content"><a href="#">Samantha Cole signed up.</a><span>6 Minutes Ago.</span></div>
                                            </li>
                                            
                                <li>
                                    <div class="icon"><span class="fa fa-tasks"></span></div>
                                    <div class="content"><a href="#">6 Tasks & 7 Upgrades pending</a><span>Backend issue #4451.</span></div>
                                </li>
                                <li>
                                    <div class="icon"><span class="fa fa-envelope"></span></div>
                                    <div class="content"><a href="#">Jane Doe sent you a message</a><span>Hey we are going for a trip. Do you want to join us?</span></div>
                                </li>
                                <li>
                                    <div class="icon"><span class="fa fa-thumbs-up"></span></div>
                                    <div class="content"><a href="#">You have 200 new likes.</a><span>You have 70 new followers with 1,211 overall likes.</span></div>
                                </li>
                                </ul>
                            </div>
                        </div>
                        <div class="search">
                            <input type="text" placeholder="Search..." name="q"><span class="fa fa-search"></span>
                        </div>
                    </div>
                    <div id="tab2" role="tabpanel" class="tab-pane chat">
                        <div class="chat-contacts">
                            <div class="chat-sections">
                                <div class="am-scroller nano">
                                    <div class="content nano-content">
                                        <h2>Recent</h2>
                                        <div class="recent">
                                            <div class="user">
                                                <a href="#"><img src="<?php echo CDN;?>images/avatar/2.jpg">
                                                    <div class="user-data"><span class="status away"></span><span class="name">Claire Sassu</span>
                                                        <span
                                                            class="message">Can you share the...</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <a href="#"><img src="<?php echo CDN;?>images/avatar/3.jpg">
                                                    <div class="user-data"><span class="status"></span><span class="name">Maggie jackson</span>
                                                        <span
                                                            class="message">I confirmed the info.</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <a href="#"><img src="<?php echo CDN;?>images/avatar/4.jpg">
                                                    <div class="user-data"><span class="status offline"></span><span class="name">Joel King		</span>
                                                        <span
                                                            class="message">Ready for the meeti...</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <h2>Contacts</h2>
                                        <div class="contact">
                                            <div class="user">
                                                <a href="#" id="chat"><img src="<?php echo CDN;?>images/avatar/5.jpg">
                                                    <div class="user-data2"><span class="status"></span><span class="name">Mike Bolthort</span></div>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <a href="#"><img src="<?php echo CDN;?>images/avatar/6.jpg">
                                                    <div class="user-data2"><span class="status"></span><span class="name">Maggie jackson</span></div>
                                                </a>
                                            </div>
                                            <div class="user">
                                                <a href="#"><img src="<?php echo CDN;?>images/avatar/7.jpg">
                                                    <div class="user-data2"><span class="status offline"></span><span class="name">Jhon Voltemar</span></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search">
                                <input type="text" placeholder="Search..." name="q"><span class="fa fa-search"></span>
                            </div>
                        </div>
                        <div class="chat-window">
                            <div class="title">
                                <div class="user"><img src="<?php echo CDN;?>images/avatar/2.jpg">
                                    <h2>Maggie jackson</h2><span>Active 1h ago</span>
                                </div><span class="icon-return fa fa-arrow-circle-left" id="return"></span>
                            </div>
                            <div class="chat-messages">
                                <div class="am-scroller nano">
                                    <div class="content nano-content">
                                        <ul>
                                            <li class="friend">
                                                <div class="msg">Hello</div>
                                            </li>
                                            <li class="self">
                                                <div class="msg">Hi, how are you?</div>
                                            </li>
                                            <li class="friend">
                                                <div class="msg">Good, I'll need support with my pc</div>
                                            </li>
                                            <li class="self">
                                                <div class="msg">Sure, just tell me what is going on with your computer?</div>
                                            </li>
                                            <li class="friend">
                                                <div class="msg">I don't know it just turns off suddenly</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-input">
                                <div class="input-wrapper"><span class="photo fa fa-camera"></span>
                                    <input type="text" placeholder="Message..." name="q" autocomplete="off"><span class="send-msg fa fa-send"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" role="tabpanel" class="tab-pane faqs am-scroller nano">
                        <div class="nano-content">
                            <div class="content">
                                <h2>FAQs</h2>
                                <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group accordion">
                                    <div class="panel">
                                        <div role="tab" class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#faq1" aria-expanded="true"
                                                    >
                                                    <span class="icon"><span class="fa fa-chevron-right"></span></span><span class="title">Under Error 352</span></a>
                                            </h4>
                                        </div>
                                        <div id="faq1" role="tabpanel" aria-label="headingOne" class="panel-collapse collapse in">
                                            <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div role="tab" class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#faq2" aria-expanded="false"
                                                     class="collapsed">
                                                    <span class="icon"><span class="fa fa-chevron-right"></span></span><span class="title">Failure platform</span></a>
                                            </h4>
                                        </div>
                                        <div id="faq2" role="tabpanel" aria-label="headingTwo" class="panel-collapse collapse">
                                            <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div role="tab" class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#faq3" aria-expanded="false"
                                                     class="collapsed">
                                                    <span class="icon"><span class="fa fa-chevron-right"></span></span><span class="title">Error 404</span></a>
                                            </h4>
                                        </div>
                                        <div id="faq3" role="tabpanel" aria-label="headingThree" class="panel-collapse collapse">
                                            <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div role="tab" class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#faq4" aria-expanded="false"
                                                     class="collapsed">
                                                    <span class="icon"><span class="fa fa-chevron-right"></span></span><span class="title">New workstation</span></a>
                                            </h4>
                                        </div>
                                        <div id="faq4" role="tabpanel" aria-label="headingThree" class="panel-collapse collapse">
                                            <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div role="tab" class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#faq5" aria-expanded="false"
                                                     class="collapsed">
                                                    <span class="icon"><span class="fa fa-chevron-right"></span></span><span class="title">Error 500</span></a>
                                            </h4>
                                        </div>
                                        <div id="faq5" role="tabpanel" aria-label="headingThree" class="panel-collapse collapse">
                                            <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <div role="tab" class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#faq6" aria-expanded="false"
                                                     class="collapsed">
                                                    <span class="icon"><span class="fa fa-chevron-right"></span></span><span class="title">Change your password.</span></a>
                                            </h4>
                                        </div>
                                        <div id="faq6" role="tabpanel" aria-label="headingThree" class="panel-collapse collapse">
                                            <div class="panel-body">Suspendisse nec leo tortor rhoncus tincidunt. Duis sit amet rutrum elit.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab4" role="tabpanel" class="tab-pane ticket am-scroller nano">
                        <div class="nano-content">
                            <div class="content">
                                <h2>New Ticket</h2>
                                <form>
                                    <div class="form-group send-ticket">
                                        <input type="text" placeholder="Title" class="form-control">
                                    </div>
                                    <div class="form-group send-ticket">
                                        <textarea rows="3" placeholder="Write Here..." class="form-control"></textarea>
                                    </div>
                                    <button class="btn btn-danger btn-raised btn-block btn-square rippler rippler-default">Create Ticket</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </nav>
    <section id="main-content">
        <div class="content-title">
            <?php echo $contenido
    ?>
            
        </div>
        <div class="inner-content">
        </div>
    </section>
    
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo CDN;?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo CDN;?>js/bootstrap.min.js"></script>
    <script src="<?php echo CDN;?>js/busy.js"></script>
    <!-- Page Specific Stylesheet -->
     <link href="js/plugins/datatables/dataTables.bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="js/datatable.js"></script>
</body>

</html>
