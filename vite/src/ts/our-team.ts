export default class OurTeam {
    elements: NodeList;
    selector: String;
    modal: any = null;

    constructor(selector: string) {
        this.elements = document.querySelectorAll(selector);
        this.selector = selector;

        if (this.elements.length > 0) this.init();
    }

    public init():void {        
        for (let i = 0; i < this.elements.length; i++) {
            const element: Element = <Element>this.elements[i];
            const content:Element = <Element>element.querySelector('.about-me__content');
            const button: Element = <Element>element.querySelector('.team-grid__btn');

            button.addEventListener('click', () => {
                this.modal = <Element>this.openModal(content);

                window.history.pushState({page: 1}, '', ''); // button.id
                window.onpopstate = () => {
                    this.closeModal();
                };
            });            
        }
    }

    public openModal(content:Element):any {
        const modalWrapper:Element = <Element>document.createElement('div');
        const modalContent:Element = <Element>document.createElement('div');

        modalWrapper.classList.add('modal');
        modalContent.classList.add('modal__content');
        modalContent.classList.add('container');
        content.classList.remove('team-grid__content--hidden');

        modalContent.appendChild(content);
        modalWrapper.appendChild(modalContent);
        modalWrapper.appendChild(<Element>this.renderCloseButton());
        document.body.appendChild(modalWrapper);
        document.documentElement.classList.add('open-modal');

        return modalWrapper;
    }

    public closeModal():void {
        if (!this.modal) return;

        this.modal.remove();
        document.documentElement.classList.remove('open-modal');
    }

    public renderCloseButton():any {
        const btnWrap = document.createElement('button');

        btnWrap.classList.add('modal__btn-close');
        btnWrap.innerHTML = `
            <svg 
                role="presentation" 
                class="modal__icon-close" 
                width="23px" 
                height="23px" 
                viewBox="0 0 23 23" 
                version="1.1" xmlns="http://www.w3.org/2000/svg" 
                xmlns:xlink="http://www.w3.org/1999/xlink"
            > 
                <g 
                    stroke="none" 
                    stroke-width="1" 
                    fill="#000000" 
                    fill-rule="evenodd"
                > 
                    <rect 
                        transform="
                            translate(11.313708, 11.313708) 
                            rotate(-45.000000) 
                            translate(-11.313708, -11.313708) 
                        " 
                        x="10.3137085" 
                        y="-3.6862915" 
                        width="2" 
                        height="30"
                    ></rect> 
                    <rect 
                        transform="
                            translate(11.313708, 11.313708) 
                            rotate(-315.000000) 
                            translate(-11.313708, -11.313708) 
                        " 
                        x="10.3137085" 
                        y="-3.6862915" 
                        width="2" 
                        height="30"
                    ></rect> 
                </g> 
            </svg>
        `;
        btnWrap.addEventListener('click', () => {
            window.history.back();
            this.closeModal();
        });

        return btnWrap;
    }
}