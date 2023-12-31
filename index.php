<!-- MADE BY CATALIN -->
<!-- DISCORD: TripleZone#8501 -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
include 'config/config.php';
include('config/announcements.php');
include('script/AI.php');
include('config/navigation.php');
?>
  <head>
    <title><?php echo $title_of_page; ?></title>
    <meta name="description" content="<?php echo $description_of_page; ?>">
    <link rel="stylesheet" href="assets/style.min.css">
    <link rel="shortcut icon" href="imagini/favicon.png" type="image/vnd.microsoft.icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
  </head>
  <body>
    <div class="" id="shadow-open">
      <div class="mobile-navigation" id="mobile-nav">
        <button type="button" name="button" id="close-nav"><i class="fas fa-arrow-left"></i></button>
        <div class="header-mobile-navigation">
          <img src="imagini/server-logo.png" class="logo-counter" style="width: 200px;">
        </div>
        <div class="body-mobile-navigation">
          <div class="navigatie-mobil">
            <p>Navigation</p>
          </div>
          <ul>
            <?php redirectionari_navigatie(); ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="loadingcontainer hidden"><div class="roata"></div></div></div>
    <div class="catalin-header">
        <nav class="catalin-navigatie">
            <div class="container">
            <ul class="catalin-nav-social" id="catalin-navi-social">
              <?php redirectionari_media(); ?>
            </ul>
            <ul class="catalin-nav-links">
              <li id="button-open"><button type="button" id="open-nav" name="button"><i class="fas fa-bars"></i></button></li>
              <div id="testare-hide"><?php redirectionari_navigatie(); ?></div>
            </ul>
          </nav>
          <div class="catalin-header-content">
            <div class="container">
            <div class="coloana-3" id="coloana-3">
              <div class="cutie-1" id="cutie-1">
                <ul>
                  <a href="<?php echo $discord_invite_link; ?>" target="_blank" style="text-decoration: none;">
                  <ul class="directia-elementelor-secundare">
                    <li class="element-secundar"><h3>Discord Server</h3></li>
                    <li class="element-secundar"><p><span id="discord-count">?</span> online now</p></li>
                  </ul>
                  <ul class="directie-elemente">
                    <li class="principalul-element"><i class="fab fa-discord discord-spatiu"></i></li>
                  </ul>
                  </a>
                  </ul>
              </div>
                <div class="cutie-2" id="cutie-2">
                  <img src="imagini/server-logo.png" height="<?php echo $server_logo_height; ?>" width="<?php echo $server_logo_width; ?>" class="logo-counter">
                </div>
              <div class="cutie-3" id="cutie-3">
                <a href="#" style="text-decoration: none;" id="copiazaIP">
                  <ul class="directie-elemente">
                    <li class="principalul-element"><i class="fas fa-play-circle server-spatiu"></i></li>
                  </ul>
                  <ul class="directia-elementelor-secundare" style="margin-right: 0px;">
                    <li class="element-secundar"><h3 class="play-button-design"><span class="player-count"><div class="invarte"></div></span> players online</h3></li>
                    <li class="element-secundar"><p class="play-button-design-gray">Start your adventure now!</p></li>
                  </ul>
                </a>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="container">
  <?php //SECTION OF ANNUNCEMENTS!
    createAnnouncements();
  ?>
</div>
<div class="store-sale">
  <div class="container">
    <a href="#store">Mega sale on our store</a>
  </div>
</div>
<div class="footer">
  <img src="imagini/server-logo.png" class="gray-animatie" alt="poke-logo">
  <p>© 2023 <?php echo $server_copyright; ?>. All Rights Reserved.</p>
  <p>Made by <a href="https://discord.gg/UDREHcb88d">Catalin</a></p>
  <input type="text" id="ipServer" value="<?php echo $ip_server; ?>"/>
</div>
<button class="mergisus" style="display: inline-block;"><span></span></button>
  </body>

  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="script/index.js"></script>
  <script type="text/javascript">

  function arataJucatori() {
    const player = "<?php echo $ip_server;?>";
    const port = "<?php echo $port_server;?>";
    $.getJSON('https://api.minetools.eu/ping/' + player + "/" + port, function(status) {
        var jucatoriOnline = status.players.online;
        $(".player-count").html(((jucatoriOnline = jucatoriOnline.toString().split("."))[0] = jucatoriOnline[0].replace(/\B(?=(\d{3})+(?!\d))/g, ","), jucatoriOnline.join(".")));
    });
  }

    arataJucatori();
    test = setInterval(arataJucatori, 1000);

    const discord_widget_id = "<?php echo $discord_widget_id;?>";
    $.get('https://discordapp.com/api/guilds/'+ discord_widget_id +'/embed.json', function(d){
    	let members = d['members'];
    	let online_count = members.length;
    	$('#discord-count').html(online_count);
    });

      $( document ).ready(function() {
    $('.agata').on('click', function() {
       $('.modal-wrapper').toggleClass('open');
      $('.page-wrapper').toggleClass('blur-it');
       return false;
    });
  });

  document.documentElement.style.setProperty('--main-color', '<?php echo $main_color; ?>');

</script>
</html>
