  <footer class="pie">
      <div class="preguntas">
        <h3>PREGUNTAS FRECUENTES</h3>

        <ul>
          <li>
            <a href="#">FAQ</a>
          </li>

          <li>
            <a href="#">Glosario</a>
          </li>
        </ul>
      </div>

      <div class="contacto">
        <h3>CONTACTO</h3>

        <ul>
          <li type="text">Carlos Alberto Mora Pérez</li>

          <li type="text">carlosamorap@gmail.com</li>

          <li type="text">(+58) 424-7432428</li>
        </ul>
      </div>

      <div class="comunidad">
        <h3>COMUNIDAD</h3>

        <a 
          href="#"
          target="_self" 
        >
          <img 
            src="img/fb.png" 
            alt="fb"
            width="30"
            height="30"
          />
        </a>

        <a
          href="#"
          target="_self"
        >
          <img 
            src="img/tw.png" 
            alt="tw"
            width="30"
            height="30"
          />
        </a>

        <a
          href="#"
          target="_self"
        >
          <img 
            src="img/ig.png" 
            alt="ig"
            width="30"
            height="30"
          />
        </a>
      </div>
      <div class="copyrigth">CRYPTOLEARNING © 2022</div>
    </footer>
  <!-- Essential javascripts for application to work-->
  <script src="<?= JS; ?>/jquery-3.3.1.min.js"></script>
  <script src="<?= JS; ?>/main.js"></script>
  <script src="<?= JS; ?>/fontawesome.js"></script>
  <script src="<?= JS; ?>/functions_admin.js"></script>
  <!-- Noty plugin -->
  <script src="<?= PLUGINS; ?>/notify/noty.min.js"></script>
  <script src="<?= PLUGINS; ?>/notify/noty.min.js.map"></script>
  <!-- Url para javascritp -->
  <script>
    const base_url = "<?= BASE_URL ?>";
  </script>
  <!-- Scripts por parametros a un controlador -->
  <script src="<?= APP ?>/js<?=$data['function.js'] ?>"></script>
  <!-- Scripts para graficos  Chartjs -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.esm.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/helpers.esm.min.js"></script> -->
  </body>
</html>