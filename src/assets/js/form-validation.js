const email = document.getElementById('email')
const phone = document.getElementById('phone')

        document.querySelector('button').addEventListener('click', (e) => {
            e.preventDefault()

            // validate email
            if(validateEmail(email.value)) {
                document.querySelector('#email-label').innerText = 'Email is not valid'
                email.style.border = '3px solid red'
            } else {
                email.style.border = '3px solid green'
                document.querySelector('#email-label').innerText = 'Email is valid'
                window.location = "/src/pages/Homepage.html";
            }

            // validate phone
            // if(validatePhone(phone.value)) {
            //     document.querySelector('#phone-label').innerText = 'Phone number is not valid'
            //     phone.style.border = '3px solid red'
            // } else {
            //     phone.style.border = '3px solid green'
            //     document.querySelector('#phone-label').innerText = 'Phone number is valid'
            // }

            // console.log(email.value)
            // console.log(phone.value)
        })

        function validateEmail(email) {
            const regex = /[a-zA-Z0-9\.\_\-]+\@[a-z]+\.[a-z]{3}/g
            return email.match(regex) === null
        }

        // function validatePhone(phone) {
        //     const regex = /[0-9]{9}/g
        //     return phone.match(regex) === null
        // }