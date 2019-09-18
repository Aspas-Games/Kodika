
<!DOCTYPE html PUBLIC "-">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Comentários e Curtidas</title>
  <link rel="stylesheet" href="../media/css/jogos.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){

    $(".like").click(function(){
      var ID = $(this).attr("id");
      var sid=ID.split("like");
      var New_ID=sid[1];
      var REL = $(this).attr("rel");
      //var URL=$.base_url+'message_like_ajax.php';
      var dataString = 'msg_id=' + New_ID +'&rel='+ REL;
      if(REL=='Like')
      {
        $("#youlike"+New_ID).slideDown('slow').prepend("<span id='you"+New_ID+"'><a href='#'>Você</a> Curtiu.</span>");
        $("#likes"+New_ID).prepend("<span id='you"+New_ID+"'><a href='#'>Você</a>, </span>");
        $('#'+ID).html('Unlike').attr('rel', 'Unlike').attr('title', 'Unlike');
      }
      else
      {
        $("#youlike"+New_ID).slideUp('slow');
        $("#you"+New_ID).remove();
        $('#'+ID).attr('rel', 'Like').attr('title', 'Like').html('Like');
      }
    });
  });
</script>
</head>
<body>
  <div id='container'>
    <div> Seguir <a href='http://www.Aspasgames.96.lt'>Aspas Games</a></div>
    <h1>Hora de curtir.</h1>
    <div class="stbody" id="stbody101">
      <div class="stimg">
        <img src="http://aspas.96.lt/wp-content/uploads/2019/05/Aspas_Games_Logo_Blue.png" style='width:50px;height:50px'/>
      </div>
      <div class="sttext">
        Turma incrivel e muito legal
        <div class="sttime">2 seconds ago</div>
        <div>
          <a href="#" class="like" id="like101" title="like" rel="like">Like</a>
        </div>
        <div class='likeUsers' id="youlike101" >
        </div>
      </div>
    </div>
    <div class="stbody">
      <div class="stimg">
        <img src="http://aspas.96.lt/wp-content/uploads/2019/05/Aspas_Games_Logo_Blue.png" style='width:50px;height:50px'/>
      </div>
      <div class="sttext">
        Nossos jogos são demais <a href='http://www.Aspasgames.96.lt'>http://www.Aspasgames.96.lt</a>
        <div class="sttime">25 seconds ago</div>
        <div>
          <a href="#" class="like" id="like102" title="Unlike" rel="Unlike">Unlike</a>
        </div>
        <div class='likeUsers' id="youlike102">
          <span id="you102"><a href="#">You</a> like this.</span>
        </div>
      </div>
    </div>
    <div class="stbody">
      <div class="stimg">
        <img src="http://aspas.96.lt/wp-content/uploads/2018/11/Slide7.jpg" style='width:50px;height:50px'/>
      </div>
      <div class="sttext">
        Conheça nosso portfolio <a href='http://aspas.96.lt/portfolio/'>http://aspas.96.lt/portfolio/</a>
        <div class="sttime">48 seconds ago</div>
        <div>
          <a href="#" class="like" id="like103" title="Unlike" rel="Unlike">Unlike</a>
        </div>
        <div class='likeUsers' id="likes103">
          <span id="you103"><a href="#">You</a>,</span> <a href="#">Cycero</a>, <a href="#">Danilo</a>, <a href="#">Bill Gates</a> and 20 other friends like this.
        </div>
      </div>
    </div>
  </div>
</body>
</html>
