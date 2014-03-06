<?php include("config.php") ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="pt-BR" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="pt-BR" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="pt-BR" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-BR" class="no-js"> <!--<![endif]-->
<head>
<?php include("_head.php") ?>
<title>Consultório &gt; <?php echo $titleSite?></title>
<meta name="title" content="Consultório &gt; <?php echo $titleSite?>">
<meta name="description" content="Oferecemos todo o conforto que você precisa para um bom atendimento">

</head>
<body class="page-<?php echo $p?>">
<?php include("_header.php") ?>


<div class="main" role="main">

    <h1 class="main-title">Consultório</h1>
    <h2 class="sub-title">Oferecemos todo o conforto que você precisa para um bom atendimento.</h2>
    
   <!--  <div class="row-fluid">
        <div class="span12">
            <ul class="thumbnails" style="margin:0">
                <li class="span12">
                    <a href="assets/img/consultorio-1.jpg" class="thumbnail" rel="gal01">
                        <img src="assets/img/consultorio-1.jpg" alt="">
                    </a>
                </li>
            </ul>
            
        </div>
    </div> -->

    <div class="row-fluid">
        <ul class="thumbnails">
        <li class="span6">
            <a href="assets/img/consultorio-4.jpg" class="thumbnail" rel="gal01">
                <img src="assets/img/consultorio-4-thumb.jpg" alt="">
            </a>
        </li>
        <li class="span6">
            <a href="assets/img/consultorio-2.jpg" class="thumbnail" rel="gal01">
                <img src="assets/img/consultorio-2-thumb.jpg" alt="">
            </a>
        </li>
        <li class="span6">
            <a href="assets/img/consultorio-3.jpg" class="thumbnail" rel="gal01">
                <img src="assets/img/consultorio-3-thumb.jpg" alt="">
            </a>
        </li>
    </ul>
    </div>
        
    

    
</div><!-- main -->


<?php include("_footer.php") ?>


<link rel="stylesheet" href="assets/css/jquery.fancybox.css">
<script src="assets/js/jquery.fancybox.min.js"></script>

<script type="text/javascript">
(function($){
    $(document).ready(function() {
        $(".thumbnail").fancybox();
    });
})(jQuery);
</script>



</body>
</html>
