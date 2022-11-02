export default class CallBackForm {
    form: Element;
    userName: any;
    userPhone: any;
    button: any;
    responseMessage: HTMLSpanElement = document.createElement('span');

    constructor(selector: string) {
        const formSelector = selector || '.callback__form';

        this.form = <Element>document.querySelector(formSelector);

        if (!this.form) return;

        this.userName = <HTMLInputElement>this.form.querySelector('.input-group__input[name="user_name"]');
        this.userPhone = <HTMLInputElement>this.form.querySelector('.input-group__input[name="user_phone"]');
        this.button = <HTMLButtonElement>this.form.querySelector('.callback__button');        

        if (this.form) this.init();
    }

    public init():void {  
        this.userPhone.addEventListener('input', (event: any) => {
            let x = event.target.value.replace(/\D/g, '').match(/(^\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);

            event.target.value = !x[3] ? "+" + x[1] + x[2] : "+" + x[1] + ' (' + x[2] + ') ' + x[3] + (x[4] ? '-' + x[4] : '') + (x[5] ? '-' + x[5] : '');
            this.userPhone.style.border = '';
            
        });

        this.button.addEventListener('click', () => {
            this.responseMessage.remove();

            if (this.formValidate()) {
                this.button.disabled = true; 

                fetch(<any>this.form.getAttribute('data-action'), {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        user_name: this.userName.value,
                        user_phone: this.userPhone.value,
                    })
                })
                .then((res) => res.json())
                .then((res) => {
                    this.button.disabled = false; 
                    this.responseForm(res);
                })
                
            }
        })
    }

    public responseForm(status: number) {
        if (status === 200) {
            this.responseMessage.classList.add('callback__responce');
            this.responseMessage.classList.add('callback__responce--succes');
            this.responseMessage.textContent = this.form.getAttribute('data-succes-msg');

            this.form.appendChild(this.responseMessage);

            return;
        }

        this.responseMessage.classList.add('callback__responce');
            this.responseMessage.classList.add('callback__responce--error');
        this.responseMessage.textContent = this.form.getAttribute('data-error-msg');

        this.form.appendChild(this.responseMessage);

        return;
    }

    public formValidate():boolean {        
        if (this.phoneValidate(this.userPhone.value)) {
            return true;
        }

        return false;
    }

    public phoneValidate(phone:string):boolean {
        if (phone.match(/^\+\d{1} \(\d{3}\) \d{3}\-\d{2}\-\d{2}$/)) {
            return true;
        }

        this.userPhone.style.border = '1px solid red';

        return false;
    }
}