<?php headerAdmin($data); 
if ($_POST['email']) {
	$email = $_POST['email'];
}else {
	$email = "";
}
?>


<article>
    	<section>
    		<h1>CREAR CUENTA</h1>
    	</section>

    	<section>
    		<span>Crea una contraseña para comenzar a aprender</span>
    	</section>

    	<section>
    		<form
                id="signForm"
                method="POST"
    			autocomplete="on"
    		>
    			<ul>
    				<li>
    					<input
                            name="email"
							id="email"
    						type="e-mail"
    						placeholder="example@e-mail.com"
							value="<?=$email;?>"
    					/>
    				</li>

    				<li>
    					<input
                            name="password"
							id="pass"
    						type="password"
    						placeholder="******"
    					/>
    				</li>

                    <li>
    						<input
                                name="fechaNacimiento"
    							type="date"
    							id="fechaN"
    						/>
    					</li>

    				<li>
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
    				</li>
    			</ul>
    				<ul>
    					<li>
    						<input
                                name="imgProfile"
    							type="file"
    							id="imgUp"
    						/>
    					</li>
    					<li>
    						<input
    							type="text"
    							placeholder="Ingresa un alias"
    							name="alias" 
    							id="alias"
    						/>
    					</li>
    					<li>
    						<input
								id="crear"
								onclick="show();"
    							type="button"
    							value="Crear"
    						/>
    					</li>
						<li>
    						<input
								onclick="save();"
								id="continuar"
    							type="submit"
    							value="Continuar"
    						/>
    					</li>
						<li>
							<a style="color: black;" href="<?=BASE_URL?>/login">¿Ya estás registrado?</a>
						</li>
    				</ul>
    			</form>
    	</section>
    </article>

    <?php footerAdmin($data); ?>