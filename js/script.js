const divDolar = document.getElementById('divDolar')
//carga por primera vez
function consultarDolar(){
    fetch('https://criptoya.com/api/dolar')
    .then(response => response.json())
    .then(({oficial, blue, tarjeta, mep}) => {
        const dolarMEP = mep.al30['48hs'].price

       divDolar.innerHTML = ""
       divDolar.innerHTML =`
        <div>
            <h2 class= "tituloMain btn btnColor">Cotizacion del Dolar hoy</h2>
            <p class ="textDolar">Oficial: $${oficial.price}</p>
            <p class ="textDolar">Blue: $${blue.ask}</p>
            <p class ="textDolar">Tarjeta: $${tarjeta.price}</p>
            <p class ="textDolar">Mep: $${dolarMEP}</p>
        </div>
       `
    })
}
consultarDolar()

//Actualiza cada 30 segundos    
setInterval(()=>{
    consultarDolar()
}, 30000)

