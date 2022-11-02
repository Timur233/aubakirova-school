export default class MobileMenu {
    menuTogglerBtn: Element;
    mobileMenuEl: Element;
    mobileMenuCloseBtn: Element;
    menuItemsHasChilds: NodeList;

    constructor() {
        this.menuTogglerBtn = <Element>document.querySelector('.menu-toggle');
        this.mobileMenuEl = <Element>document.querySelector('.mobile-menu');
        this.mobileMenuCloseBtn = <Element>document.querySelector('.mobile-menu__btn-close');
        this.menuItemsHasChilds = document.querySelectorAll('.mobile-menu .main-menu__item--has-childs');

        this.init();
    }

    public init(): void {
        this.menuTogglerBtn.addEventListener('click', () => { this.mobileMenuToggle() });

        if (this.mobileMenuCloseBtn) this.mobileMenuCloseBtn.addEventListener('click', () => { this.mobileMenuToggle() });

        this.mobileMenuItemClick();
    }

    public mobileMenuToggle(): void {
        const isOpen = this.menuTogglerBtn.classList.toggle('menu-toggle--open');                   
        
        this.ToggleMenuFn(isOpen);
    }

    public ToggleMenuFn(isOpen:Boolean): void {
        const menuEl: HTMLElement = <HTMLElement>this.mobileMenuEl;

        if (!isOpen) {
            menuEl.style.opacity = '0';
            document.documentElement.classList.remove('open-modal');

            setTimeout(() => {
                menuEl.classList.toggle('mobile-menu--open');
            }, 300);
        
        } else {
            menuEl.classList.toggle('mobile-menu--open');
            document.documentElement.classList.add('open-modal');

            setTimeout(() => {
                menuEl.style.opacity = '1';
            }, 10);
        }
    }

    public mobileMenuItemClick(): void {
        this.menuItemsHasChilds.forEach((item) => {
            const itemEl: Element = <Element>item;
            const el: HTMLElement = <HTMLElement>itemEl.querySelector('a');
            const selectedMenu: HTMLElement = 
                <HTMLElement>itemEl.querySelector('.sub-menu');

            selectedMenu.innerHTML = `
                <li class="sub-menu__item">
                    <a href="${el.getAttribute('href')}" class="sub-menu__link">${el.textContent}</a>
                </li> 
                ${selectedMenu.innerHTML}
            `;
            el.setAttribute('href', '#');

            el.addEventListener('click', () => {
                const activeMenu: HTMLElement = 
                    <HTMLElement>document.querySelector('.mobile-menu .sub-menu--open');

                if (activeMenu) { activeMenu.classList.remove('sub-menu--open'); }
                selectedMenu.classList.add('sub-menu--open');
            })
        })
    }
}