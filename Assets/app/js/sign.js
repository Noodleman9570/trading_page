$('#imgUp, #alias, #continuar, #imgProfile').hide();

function show(){
    $('#alias, #continuar, #imgProfile').show();
    $('#email, #pass, #fechaN, #pais, #crear, #login').hide();
    $('#formTitle').text('PERSONALIZA TU PERFIL')
    $('#formTxt').text('Escoge un alias unico para que los demás te reconozcan')
}

async function save(e){
    event.preventDefault();
    let signForm = document.querySelector('#signForm');
    const datos = new FormData(signForm);
    try {
        const url = `${base_url}/sign/save`;
        const res = await fetch(url, {
            method: "POST",
            body: datos
        })
        const result = await res.json();

        if(result.error){
            new Noty({
                type: 'error',
                theme: 'metroui',
                text: `${result.error}`,
                timeout: 2000,
            }).show();      
            $('#alias, #continuar, #imgProfile').hide();
            $('#email, #pass, #fechaN, #pais, #crear, #formTxt, #login').show();
            $('#formTitle').html('CREAR CUENTA')
        }else{
            new Noty({
                type: 'success',
                theme: 'metroui',
                text: `${result.msg}`,
                timeout: 2000,
            }).show();
            signForm.reset();
            console.log("hola2")
            setTimeout(()=>{
                console.log("hola")
                window.location.href = `${base_url}/login`;        
            },2500);   
        }



        
    } catch (err) {
        console.log(err);
    }
}