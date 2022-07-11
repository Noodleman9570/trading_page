
    <?php headerAdmin($data); ?>
    <article class="content_login">
		<div class="form">
			<section>
				<h1 class="title_login">INICIAR SESIÓN</h1>
			</section>
			<section>
				<span class="texto_form">Entra a tu cuenta y continúa desde donde lo dejaste</span>
			</section>
	
			<section>
				<form
					id="loginForm"
			  		method="POST"
					autocomplete="on"
				>
					<input
						class="input_form"
						type="e-mail"
						placeholder="example@e-mail.com"
						name="email"
					/>
	
					<input
						class="input_form"
						type="password"
						placeholder="******"
						name="password"
					/>
					<div class="content_submit">
						<input class="submit_form" type="submit" value="Entrar" />
						<a href="<?=BASE_URL?>/sign">¿Aún no tienes cuenta?</a>
					</div>
				</form>
			</section>
		</div>
    </article>
    <?php footerAdmin($data); ?>
