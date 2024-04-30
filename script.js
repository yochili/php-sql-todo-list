var header = document.querySelector('header')
var nav_buttons = document.querySelectorAll('nav>form>button:not(.logout)')
var uname = document.querySelector('#name')


document.addEventListener('scroll',()=>{
    uname.classList.toggle('primary-collor',scrollY > 0)
    header.classList.toggle('nav-scroll',scrollY > 0)
    nav_buttons.forEach(elem => {
        elem.classList.toggle('nav-scroll-button',scrollY > 0)
    });
    
})


var buttons_to_unallow_click = document.querySelectorAll(".finished button[name='end']")
buttons_to_unallow_click.forEach(elem => {
    elem.addEventListener('click',(e)=>{
        e.preventDefault()
    })
})


var form_add = document.querySelector('.form-add')
var input_add = document.querySelector('.form-add input')
form_add.addEventListener('submit',(e)=>{
    if (input_add.value.length <= 3) {
        e.preventDefault()
        alert('you must enter a minimum of 4 characters')
    }
    form_add.submit
})

