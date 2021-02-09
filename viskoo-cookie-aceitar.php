<style>

@keyframes mostraralerta {
  0% { bottom: -100px; }
  100% { bottom: 5px !important; z-index: 99999; }
}

.cookie-viskoo-alerta
{
  position: fixed;
  bottom: 5px;
  z-index: 99999;
  background-color: white;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 20px black;
  width: 80%;
  margin-left: 10%;

  animation-name: mostraralerta;
  animation-duration: 2s;
  animation-delay: 1s;
}
</style>

<?php
session_start();
  if ($_SESSION["cookieaceitar"] == "ok"){

  } else
  {
    ?>

    <div id="alertacookie">
      <div class="cookie-viskoo-alerta">
        <center>Você curte Cookie? &#x1F36A;  Nós usamos cookies para garantir uma melhor experiência no nosso site! &#128522;

          <a href="javascript:void(0)" onClick="aceitarcookie(alertacookie,'viskoo-cookie-aceito.php')" style="background-color: #c4151c; color: white; border: 0px; border-radius: 5px; padding: 5px;">
              Aceitar
          </a>
        </center>
      </div>
    </div>

    <?php
  }
?>


<!-- O JQUERY TALVEZ TERIA Q EXCLUIR -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script>
function aceitarcookie(alvo,pagina) {
	$(alvo).fadeIn(700);
  $(alvo).html('<p><img src="loading.gif" /></p>');
  $(alvo).load(pagina);
}
</script>
