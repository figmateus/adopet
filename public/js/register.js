const CEP = document.getElementById('cep');
const STATE = document.getElementById('state');
const CITY = document.getElementById('city');
const STREET = document.getElementById('street');
const NUMBER = document.getElementById('number');
const NEIGHBOR = document.getElementById('neighbor');


CEP.addEventListener('blur', () => {
    let cep = CEP.value;
    if(cep.length != 8){
        return;
    }

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(json => {
            for (var i = 0; i < STATE.options.length; i++) {
                if (STATE.options[i].text == json.uf) {
                    STATE.selectedIndex = i;
                    break;
                }
            }
            CITY.value = json.localidade;
            STREET.value = json.logradouro;
            NEIGHBOR.value = json.bairro;
            NUMBER.focus();
        });
})

