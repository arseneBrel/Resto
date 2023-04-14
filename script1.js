
const btnToggle = document.querySelector('.btn-toggle');

btnToggle.addEventListener('click', () => {

    const body = document.body;

    if(body.classList.contains('dark')){

        body.classList.add('light')
        body.classList.remove('dark')
        btnToggle.innerHTML = "Go Dark"

    } else if(body.classList.contains('light')){

        body.classList.add('dark')
        body.classList.remove('light')
        btnToggle.innerHTML = "Go Light"

    }

})



function controlEmail(){
    let email=document.getElementById("email");
    //si on met plutot en param
    //x=window.location.search.substring(1);
    if((email.value.indexOf("@")==email.value.lastIndexOf("@"))&&(email.value.indexOf("@")!=-1)){
        if(email.value.lastIndexOf(".")>email.value.indexOf("@")){
            let index=email.value.lastIndexOf(".")+1;
            if(email.value[index]!=""){
                swal("Vous avez bien ete enregistrer au newsletter","Votre enregistremet est reussi","success");
                //return true;
            }else{
                swal("Vous n'avez pas ete enregistrer au newsletter","Verifié l'adresse saisie","error");;
                //return false;
            }

        }else{
            swal("Vous n'avez pas ete enregistrer au newsletter","mauvais enregistrement","error");
            //return false;
        }
    }else{
        swal("Vous n'avez pas ete enregistrer au newsletter","Adresse invalide","error");
        //return false;
    }
}











