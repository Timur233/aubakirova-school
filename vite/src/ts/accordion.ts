export default class Accorion {
    elements: NodeList;
    selector: String;

    constructor(selector: string) {
        this.elements = document.querySelectorAll(selector);
        this.selector = 'faq__item';        
        
        if (this.elements.length > 0) this.init();
    }

    public init(): void {
        this.openAccordionItem(<Element>this.elements[0])

        for (let i = 0; i < this.elements.length; i++) {
            const element: Element = <Element>this.elements[i];
            const titleBlock: Element = <Element>element.querySelector('.faq__title');

            titleBlock.addEventListener('click', () => {
                this.openAccordionItem(element);
            });            
        }
    }

    public openAccordionItem(element: Element): void {
        const content: HTMLElement = <HTMLElement>element.querySelector('.faq__body');

        if (!element.classList.contains(this.selector + '--active')) {
            this.closeAllItems();
            element.classList.add(this.selector + '--active');
            content.style.height = <number>content.scrollHeight + 'px';
        } else {
            element.classList.remove(this.selector + '--active');
            content.style.height = '';
        }
    } 

    public closeAllItems():void {
        for (let i = 0; i < this.elements.length; i++) {
            const element: Element = <Element>this.elements[i];
            const content: HTMLElement = <HTMLElement>element.querySelector('.faq__body');
            
            element.classList.remove(this.selector + '--active');   
            content.style.height = '';

        }
    }
}