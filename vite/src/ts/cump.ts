export default class CumpPage {
    modaButtons: NodeList;
    modal: HTMLDivElement;
    closeButton: HTMLDivElement;

    constructor() {
        this.modaButtons = document.querySelectorAll('.amo-form__buttom');
        this.modal = <HTMLDivElement>document.querySelector('.amo-modal');
        this.closeButton = <HTMLDivElement>document.querySelector('.amo-modal__btn-close');

        this.init();
    }

    public init():void {  
        if (!this.modal) return;
        
        this.modaButtons.forEach(item => {
            item.addEventListener('click', () => { 
                this.openModal();
            });
        });

        this.closeButton.addEventListener('click', () => {
            this.closeModal();
        });

        this.modal.addEventListener('click', (e) => {
            e.stopPropagation();

            this.closeModal();
        });
    }

    public openModal():any {
        if (!this.modal) return;

        this.modal.style.display = 'flex';
    }

    public closeModal():void {
        if (!this.modal) return;

        this.modal.style.display = 'none';
    }
}