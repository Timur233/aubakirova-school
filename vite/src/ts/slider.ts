export class RandomElements {
    readonly sel: string;
    elements: Array<any> = [];

    constructor(selector: string) {
        this.sel = selector;

        this.init();
        this.move();
    }

    private init(): any {
        interface NodeElement {
            node: Element,
            speed: number,
        };

        document.querySelectorAll(this.sel).forEach(item => {
            this.elements.push(<NodeElement>{
                node: item,
                speed: parseFloat(<string>item.getAttribute('data-speed')),
            })
        });        
    }

    private random(min:number, max:number):number {
        return Math.floor(Math.random() * (max - min)) + min;
    }

    public move():void {
        this.elements.forEach(el => {
            setInterval(():void => {
                el.node.style.transition = `${el.speed.toString()}s all cubic-bezier(0, 0, 0.73, 0.74) 0s`;
                el.node.style.transform = 'translateX(' + this.random(-20, 20) + 'px)  translateY(' + this.random(-20, 20) + 'px)';
            }, 800);
        });
    }
}

// document.addEventListener('DOMContentLoaded', function (e) {
//     var scene = document.querySelector(".gw-parts-scene");
//     if (!!!scene) {
//         return;
//     }
//     var time = 5000;
//     var timeTransitionMin = time * 2;
//     var timeTransitionMax = time * 4;
//     var timeIntervalMin = time;
//     var timeIntervalMax = time * 2;
//     var size = 1.5;
//     for (var i = 0; i < 100; i++) {
//         GWcreatePart(scene);
//     }


//     function GWcreatePart(scene) {
//         var part = document.createElement('div');
//         part.className = "gw-part";
//         var partItem = document.createElement('div');
//         partItem.className = "gw-part__item";
//         part.appendChild(partItem);
//         scene.appendChild(part);
//         setInterval(function () {
//             var tempTime = getRandomInt(timeTransitionMin, timeTransitionMax);
//             part.style.transition = tempTime + "ms all";
//             part.style.transform = 'translateX(' + getRandomInt(-scene.getBoundingClientRect().width / size, scene.getBoundingClientRect().width / size) + 'px) translateY(' + getRandomInt(-scene.getBoundingClientRect().height / size, scene.getBoundingClientRect().height / size) + 'px) rotate(' + getRandomInt(-400, 400) + 'deg)';
//             partItem.style.transition = tempTime / 2 + "ms all";
//             partItem.style.backgroundColor = "hsl(0, " + getRandomInt(30, 80) + "%, " + getRandomInt(30, 100) + "%)";
//             partItem.style.transform = 'translateX(' + getRandomInt(-150, 150) + 'px)  translateY(' + getRandomInt(-150, 150) + 'px)';
//         }, getRandomInt(timeIntervalMin, timeIntervalMax));
//     }

//     function getRandomInt(min, max) {
//         return Math.floor(Math.random() * (max - min)) + min;
//     }
// });