<!-- wrapper é fechado no _footer.php -->
<div class="wrapper full-height">
    
    <!-- container é fechado no _footer.php -->
    <div class="container full-height">

        <div class="row full-height">

            <header id="header" class="span4 full-height">
                
                    
                
                <?php echo (is_home()) ? '<h1 class="logo">' : '<div class="logo">'?>                
                    <a href="index.php" title="<?php echo $titleSite?>"><img src="assets/img/logo.png" alt="<?php echo $titleSite?>"></a>                
                <?php echo (is_home()) ? '</h1>' : '</div>'?>

                <nav>
                    <ul class="unstyled header-menu">
                        <li class="<?php echo (is_home())?'active':''?>"><a title="Home" href="index.php">Home</a></li>
                        <li class="<?php echo ($p=='perfil')?'active':''?>"><a href="perfil.php" title="Perfil">Perfil</a></li>
                        <li class="<?php echo ($p=='consultorio')?'active':''?>"><a href="consultorio.php" title="Consultório">Consultório</a></li>
                        <li class="<?php echo ($p=='procedimentos')?'active':''?>"><a href="procedimentos.php" title="Procedimentos">Procedimentos</a></li>
                        <li class="<?php echo ($p=='convenios')?'active':''?>"><a href="convenios.php" title="Convênios">Convênios</a></li>
                        <li class="<?php echo ($p=='contato')?'active':''?>"><a href="contato.php" title="Contato">Contato</a></li>
                    </ul>
                </nav>

                <address class="hidden-phone">

                    <div id="address1" class="vcard">
                        <div class="tel">21 2610-7774</div>
                        <div class="adr">
                            <div class="street-address">R. Otávio Carneiro nº 143, sl. 302</div>
                            <span class="locality">Icaraí</span> - <span class="region">Niterói/RJ</span>
                        </div>
                    </div><!-- vcard -->

                    <div id="address2" class="vcard">
                        <div class="tel">21 2635-3128</div>
                        <div class="adr">
                            <div class="street-address">R. Dr. Pereira dos Santos nº 43, lj. 01</div>
                            <span class="locality">Centro</span> - <span class="region">Itaboraí/RJ</span>
                        </div>
                    </div><!-- vcard -->
                    
                </address>

            </header><!-- /header -->
    
            <div class="span8 full-height clearfix">
                <div class="content full-height clearfix">
                    
                
                
            