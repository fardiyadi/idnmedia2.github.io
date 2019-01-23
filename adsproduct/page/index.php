<!DOCTYPE html>
<html lang="en">

<head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IDN Media Sales Product</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles  -->
    <link href="assets/css/idn_ads_style.css" rel="stylesheet">

</head>

<body>
    
        <!-- /#sidebar-wrapper -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#menu-toggle" id="menu-toggle">Browse Our Ads</a>
    </nav>
    
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav accordion">
                <li class="sidebar-brand">
                    <a href="#"> 
                        <img src="assets/images/idn-media-white.png" class="img-fluid">
                    </a>
                </li>
              
                <!-- idntimes -->              
                
                <li>
                    <a class="toggle" href="javascript:void(0);">IDN Times</a>
                    <ul class="inner nakma">
                        <li>
                            <a href="#" class="toggle">Desktop</a>
                            <ul class="inner nakwa">
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="#" class="toggle">Mobile</a>
                            <ul class="inner nakwa">
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>          
                
                <!-- popmama -->
                <li>
                    <a class="toggle" href="javascript:void(0);">Popmama</a>
                    <ul class="inner nakma">
                        <li>
                            <a href="#" class="toggle">Desktop</a>
                            <ul class="inner nakwa">
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="toggle">Mobile</a>
                            <ul class="inner nakwa">
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                                <li>
                                    <a href="#" class="toggle">Leaderboard</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
</div>
        
        <!-- Page Content -->
        
        <section id="home_awal">
            <div class="section_content col-md-8 offset-md-2">
                <h2>Lorem Ipsum</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            </div>
        </section>
        
        
        <div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="assets/images/01.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                    </div>
                </div>
            </div>  
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
    <script>
    $('.toggle').click(function(e) {
        e.preventDefault();

        var $this = $(this);

        if ($this.next().hasClass('show')) {
            $this.next().removeClass('show');
            $this.next().slideUp(350);
        } else {
            $this.parent().parent().find('li .inner').removeClass('show');
            $this.parent().parent().find('li .inner').slideUp(350);
            $this.next().toggleClass('show');
            $this.next().slideToggle(350);
        }
    });
    </script>

</body>

</html>
