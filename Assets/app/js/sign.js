$('#imgUp, #alias, #continuar').hide();

function show(){
    $('#imgUp, #alias, #continuar').show();
    $('#email, #pass, #fechaN, #pais, #crear').hide();
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
            $('#imgUp, #alias, #continuar').hide();
            $('#email, #pass, #fechaN, #pais, #crear').show();
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