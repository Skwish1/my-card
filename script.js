const inptName = document.querySelector('#name-inpt')
    
const inptEmail = document.querySelector('#email-inpt')

const btnSub = document.querySelector('#sub-btn')

btnSub.addEventListener('click', ()=>{
    if(inptName.value !== "" & inptEmail.value !== "") {
        alert('Вы отправили заявку')
    } else {
        alert('Заполните поля для отправления заявки')
    }   
})

