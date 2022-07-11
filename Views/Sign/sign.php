<?php headerAdmin($data); 
if ($_POST['email']) {
	$email = $_POST['email'];
}else {
	$email = "";
}
?>


<article class="content_login">
	<div class="form">
    	<section>
    		<h1 id="formTitle" class="title_login">CREAR CUENTA</h1>
    	</section>

    	<section id="formTxt">
    		<span class="texto_form">Crea una contraseña para comenzar a aprender</span>
    	</section>

    	<section>
    		<form
                id="signForm"
                method="POST"
    			autocomplete="on"
    		>
  
				<input
					class="input_form"
					name="email"
					id="email"
					type="e-mail"
					placeholder="example@e-mail.com"
					value="<?=$email;?>"
				/>

				<input
					class="input_form"
					name="password"
					id="pass"
					type="password"
					placeholder="******"
				/>

				<input
					name="fechaNacimiento"
					type="date"
					id="fechaN"
				/>

				<select id="pais" name="pais"  form="registrarse">
					<option>Antigua y Barbuda</option>
					<option>Argentina</option>
					<option>Bahamas</option>
					<option>Barbados</option>
					<option>Belice</option>
					<option>Bolivia</option>
					<option>Colombia</option>
					<option>Costa Rica</option>
					<option>Cuba</option>
					<option>Chile</option>
					<option>Dominica</option>
					<option>Ecuador</option>
					<option>El Salvador</option>
					<option>Granada</option>
					<option>Guatemala</option>
					<option>Guyana</option>
					<option>Haití</option>
					<option>Honduras</option>
					<option>Jamaica</option>
					<option>México</option>
					<option>Nicaragua</option>
					<option>Panamá</option>
					<option>Paraguay</option>
					<option>Perú</option>
					<option>República Dominicana</option>
					<option>San Cristóbal y Nieves</option>
					<option>San Vicente y las Granadinas</option>
					<option>Santa Lucía</option>
					<option>Surinam</option>
					<option>Trinidad y Tobago</option>
					<option>Uruguay</option>
					<option>Venezuela</option>
				</select>


				<input
					name="imgProfile"
					type="file"
					id="imgUp"
				/>

				<input
					type="text"
					placeholder="Ingresa un alias"
					name="alias" 
					id="alias"
				/>

				<div class="content_submit">
					<input
						class="submit_form"
						id="crear"
						onclick="show();"
						type="button"
						value="Crear"
					/>
					<input
						class="submit_form"
						onclick="save();"
						id="continuar"
						type="submit"
						value="Continuar"
					/>
					<a id="login" href="<?=BASE_URL?>/login">¿Ya estás registrado?</a>
				</div> 

				

				


    		</form>
    	</section>
	</div>
</article>

<?php footerAdmin($data); ?>