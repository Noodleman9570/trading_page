
document.querySelector('#loginForm').addEventListener('submit', function(e){
    e.preventDefault();
    login()
})

async function login(){
    let loginForm = document.querySelector('#loginForm');
    const datos = new FormData(loginForm);
    try {
        const url = `${base_url}/login/access`;
        const res = await fetch(url, {
            method: "POST",
            body: datos
        })
        console.log(res);
        console.log("res typeof -> ", typeof res);
        const result = typeof res == "string" ? res : await res.json();
        console.log(result);

        if(result.error){
            if(typeof res != "string") {
                new Noty({
                    type: 'error',
                    theme: 'metroui',
                    text: `${result.error}`,
                    timeout: 2000,
                }).show(); 
            }
        }else{
            new Noty({
                type: 'success',
                theme: 'metroui',
                text: `${result.msg}`,
                timeout: 2000,
            }).show();
            loginForm.reset();
            setTimeout(function(){
                window.location.href = `${base_url}/home`;        
            },2500);        

        }

        
    } catch (err) {
        console.log(err);
    }
}