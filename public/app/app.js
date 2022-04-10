const nombres = document.getElementById("nombre");
const apellidos = document.getElementById("apellido");
const boton = document.getElementById("boton");
const Formulario = document.getElementById("formulario");
const correos = document.getElementById("correo");
const Teextid = document.getElementById("textid");
const teleFono = document.getElementById("telefono");

function validar() {
	if (nombres.value == "") {
        valor = nombres
       validator(valor)

		return false;
	} else if (apellidos.value == "") {
		valor = apellidos
       validator(valor)
		return false;
	} else if (
		correos.value == "" ||
		!/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(
			correos.value
		)
	) {
        valor = correos
        validator(valor)
		return false;
	}
    else if (teleFono.value == ""  || teleFono.value.length < 10)  {


        valor = teleFono
        validator(valor)
        return false;
        
    } 
    else if (Teextid.value == "") {
        valor = Teextid
        validator(valor)

		return false;
	} else {return true;}
}
const validator = (valor) => {
    console.log("nombre vacio");
    valor.classList.add("error");

    setInterval(() => {
        valor.classList.remove("error");

    },2000)
}







boton.addEventListener("click", (e) => {
    
   
    if (validar()) {
        Formulario.submit()
        console.log("...... enviado fomulario")
        
    }
 

	
	e.preventDefault();
});


/*popu*/
const button = document.querySelector('button');
const popup = document.querySelector('.popup-wrapper');
const close = document.querySelector('.popup-close');
 
button.addEventListener('click', () => {
    popup.style.display = 'block';
});
 
close.addEventListener('click', () => {
    popup.style.display = 'none';
});
 
popup.addEventListener('click', e => {
    // console.log(e);
    if(e.target.className === 'popup-wrapper') {
        popup.style.display = 'none';
    }
});


