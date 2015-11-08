<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '997103020310751',
            xfbml      : true,
            version    : 'v2.4'
        });
    };
    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="page-header">
  <h1>LibreDTE <small>¡facturación electrónica libre para Chile!</small></h1>
</div>

<div class="jumbotron">
  <h1>¡Módulo DTE habilitado!</h1>
  <p>Se ha habilitado la interfaz web para facturación electrónica usando LibreDTE. Durante el mes de octubre de 2015 el módulo estará en etapa de pruebas. ¿Tienes dudas o comentarios? ¿encontraste un problema? <a href="<?=$_base?>/contacto">¡escríbenos!</a></p>
  <p><a class="btn btn-primary btn-lg" href="<?=$_base?>/usuarios/registrar" role="button">¡Regístrate gratis aquí y empieza a facturar!</a></p>
</div>

<div class="row">
    <div class="col-sm-8 col-md-8">
        <p class="objetivo lead">LibreDTE corresponde a un proyecto para interactuar con el SII de Chile, específicamente el sistema de Documentos Tributarios Electrónicos (DTE). Se considera la generación de DTE, timbraje, firma electrónica, envío de documentos y generación de versión en PDF de los mismos.</p>
        <div class="fb-like" data-share="true" data-width="450" data-show-faces="true"></div>
    </div>
    <div class="col-sm-4 col-md-4">
        <p><img src="<?=$_base?>/img/logo.png" class="img-responsive center" alt="Logo LibreDTE" style="max-width:200px" /></p>
    </div>
</div>

<div class="row" style="margin-top:3em">
    <div class="col-sm-6 col-md-6">
        <p class="bg-primary lead center" style="padding:1em">Empresas</p>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a href="<?=$_base?>/dte" title="Módulo DTE">
                        <img src="<?=$_base?>/img/menus/dte.png" alt="Logo DTE" />
                    </a>
                    <div class="caption">
                        <h3>Módulo DTE</h3>
                        <p>Podrás generar los documentos tributarios a través de una interfaz web. ¡Será necesario que tengas a mano tu firma digital!</p>
                        <p><a href="<?=$_base?>/dte" class="btn btn-primary btn-block" role="button">ir al módulo &raquo;</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a href="<?=$_base?>/certificacion" title="Certificar empresa">
                        <img src="<?=$_base?>/img/menus/certificacion.png" alt="Logo certificación" />
                    </a>
                    <div class="caption">
                        <h3>Certificación</h3>
                        <p>Funcionalidad que te ayudará a realizar el proceso de certificación requerido por el SII para ser autorizado a emitir DTE</p>
                        <p><a href="<?=$_base?>/certificacion" class="btn btn-primary btn-block" role="button">certificar empresa &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <p class="bg-primary lead center" style="padding:1em">Desarrolladores</p>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a href="<?=$_base?>/biblioteca/libredte" title="Leer sobre la biblioteca en PHP LibreDTE">
                        <img src="<?=$_base?>/img/menus/php.png" alt="Logo PHP" />
                    </a>
                    <div class="caption">
                        <h3>Biblioteca PHP</h3>
                        <p>Podrás integrar LibreDTE directamente en proyectos que estén desarrollados con PHP 5.5 o superior usando composer</p>
                        <p><a href="<?=$_base?>/biblioteca/libredte" class="btn btn-primary btn-block" role="button">leer más &raquo;</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <a href="<?=$_base?>/doc/api" title="Ver documentación de la API de LibreDTE">
                        <img src="<?=$_base?>/img/menus/api.png" alt="Logo API" />
                    </a>
                    <div class="caption">
                        <h3>API</h3>
                        <p>Si no usas PHP puedes utilizar la API disponible para consumir vía HTTP los servicios que ofrece en la nube LibreDTE</p>
                        <p><a href="<?=$_base?>/doc/api" class="btn btn-primary btn-block" role="button">ver documentación &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-top:3em">
    <div class="col-xs-12 col-md-offset-1 col-md-5 center">
        <a class="twitter-timeline"  href="https://twitter.com/LibreDTE" data-widget-id="643568969484488704">Tweets de @LibreDTE.</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <div class="col-xs-12 col-md-5 center">
        <div class="row">
            <div class="col-xs-4 center">
                <a href="https://twitter.com/LibreDTE" title="Síguenos en Twitter">
                    <span class="fa fa-twitter-square" style="font-size:128px"></span>
                </a>
            </div>
            <div class="col-xs-4 center">
                <a href="https://www.facebook.com/LibreDTE" title="Síguenos en Facebook">
                    <span class="fa fa-facebook-square" style="font-size:128px"></span>
                </a>
            </div>
            <div class="col-xs-4 center">
                <a href="https://plus.google.com/u/0/101078963971350176990/about" title="Síguenos en Google+">
                    <span class="fa fa-google-plus-square" style="font-size:128px"></span>
                </a>
            </div>
            <div class="col-xs-4 center">
                <a href="https://www.linkedin.com/grp/home?gid=8403251" title="Síguenos en Linkedin">
                    <span class="fa fa-linkedin-square" style="font-size:128px"></span>
                </a>
            </div>
            <div class="col-xs-4 center">
                <a href="https://www.youtube.com/channel/UCnh5duQUXmo4l8AD28PakiQ" title="Síguenos en Youtube">
                    <span class="fa fa-youtube-square" style="font-size:128px"></span>
                </a>
            </div>
            <div class="col-xs-4 center">
                <a href="https://github.com/LibreDTE" title="Código fuente en GitHub">
                    <span class="fa fa-github-square" style="font-size:128px"></span>
                </a>
            </div>
        </div>
    </div>
</div>
