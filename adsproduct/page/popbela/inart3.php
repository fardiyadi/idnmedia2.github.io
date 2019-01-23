<!DOCTYPE html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>IDN Media Sales Product</title>

        <!-- Bootstrap core CSS -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles  -->
        <link href="../assets/css/idn_ads_style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    </head>
<body>
    
        <!-- /#sidebar-wrapper -->
    

    
    <?php include '../sidebar.php';?>
        
        <!-- Page Content -->

        
        <section id="bg-image" class="" style="padding-top: 50px;">
    
            
            
            
            <div id="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <img src="screenshots/inart3.png" class="img-fluid">
                    </div>
                    <div class="col-md-5 spec-des">
                        <h1>In Article 3</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <h3>Specification :</h3>
                        <ul>
                            <li>Width : 728 Pixel</li>
                            <li>Height : 90 Pixel</li>
                            <li>Max Size : 100 KB</li>
                        </ul>
                        
                        <h3>Format</h3>
                        <ul>
                            <li>JPG</li>
                            <li>PNG</li>
                            <li>GIF</li>
                            <li>HTML5</li>
                        </ul>
                        
                        <h3>Pricing</h3>
                        <ul>
                            <li>CPD</li>
                            <li>CPM</li>
                        </ul>

                        <a href="../../preview/desktop/popbela/inart3.html" target="_blank" class="preview">Go To Preview</a>
                        
                        <a href="#menu-toggle2" id="menu-toggle2" class="d-sm-none d-md-inline-block browse">Browse Other Ads</a>
                        
                    </div>
                </div>
            </div>  
        </div>
            
    
    </section>
        <!-- /#page-content-wrapper -->

    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle, #menu-toggle2").click(function(e) {
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
