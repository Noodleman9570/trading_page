<?php headerAdmin($data); ?>
<article class="principal">
      <section  class="seccion">
        <h2 class="title">Aprende a invertir con CryptoLearning</h2>

        <span class="face">Ingresa tu e-mail para comenzar</span>

        <form
          action="<?=BASE_URL?>/sign"
          method="POST"
          autocomplete="on"
          class="face" 
        >
          <ul>
            <li>
              <input
              	class="e-mail"
                type="e-mail"
                name="email"
                placeholder="example@e-mail.com"
              />
            </li>

            <li>
              <input
              	class="envio"
                type="submit"
                value="Comenzar"
                target="_self"
              />
            </li>
          </ul>
        </form>
      </section>
    </article>
<?php footerAdmin($data); ?>