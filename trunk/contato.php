<?php include("config.php") ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="pt-BR" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="pt-BR" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="pt-BR" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-BR" class="no-js"> <!--<![endif]-->
<head>
<?php include("_head.php") ?>
<title>Contato &gt; <?php echo $titleSite?></title>
<meta name="title" content="Contato &gt; <?php echo $titleSite?>">
<meta name="description" content="21 2610-7774 - Icaraí - Niterói/RJ. 21 2635-3128 - Centro - Itaboraí/RJ">

</head>
<body class="page-<?php echo $p?>">
<?php include("_header.php") ?>


<div class="main" role="main">

    <h1 class="main-title">Contato</h1>
            
            <!-- <p>Preencha o formulário abaixo e entre em contato conosco. É importante que os campos sejam preenchidos corretamente.</p> -->
            <p>Preencha o formulário abaixo ou, se preferir, envia sua mensagem diretamente para <a href="mailto:<?php echo $emailSite?>"><?php echo $emailSite?></a><br>
                Agradecemos seu contato!</p>

            <?php 
            /*
            |===================================================================================
            |        Alertas
            |-----------------------------------------------------------------------------------
            */
            if(! empty($erro)):
            ?>
            <div class="alert alert-<?php echo ($erro['id']==0)?'success':'error'; ?>">
                <div class="alert-reskew">
                <p><?php echo $erro['msg']; ?></p>
                </div>
            </div>
            <?php
            endif;
            ?>
            
            <form action="mail.php?t=contato" method="POST" class="form-validate">
                <div class="control-group">
                    <label class="control-label" for="field_nome">Nome</label>
                    <div class="controls">
                        <input type="text" name="nome" id="field_nome" placeholder="" value="" class="input-xlarge required">
                    </div>
                </div>

                    
                    <div class="control-group">
                        <label class="control-label" for="field_email">E-mail</label>
                        <div class="controls">
                            <input type="email" name="email" id="field_email" placeholder="" value="" class="input-xlarge required">
                        </div>
                    </div>

                    <div class="control-group ">
                        <label class="control-label" for="field_tel">Telefone</label>
                        <div class="controls">
                            <input type="tel" name="tel" id="field_tel" placeholder="(xx) xxxx-xxxx" value="" class="required" style="">
                        </div>
                    </div>
   

                <div class="control-group">
                    <label class="control-label" for="field_mensagem">Mensagem</label>
                    <div class="controls">
                        <textarea name="mensagem" id="field_mensagem" rows="6"  class="input-xlarge required"></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary ">Enviar mensagem</button>
                    </div>
                </div>
            </form>

            <address class="show-phone hidden-tablet hidden-desktop">

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




</div><!-- main -->


<?php include("_footer.php") ?>

<script src="assets/js/jquery.validate.js"></script>
<script type="text/javascript">
(function($){

})(jQuery);
</script>


</body>
</html>