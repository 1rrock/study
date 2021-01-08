// star
//document.addEventListener("mousemove", function (e) {
//    let x = e.pageX;
//    let y = e.pageY;
//    let a = x * 0.1
//    let b = y * 0.1
//
//    gsap.to(".stars", {
//        duration: 0.2,
//        x: a,
//        y: b,
//        z: a * 0.1
//    })
//    $(".stars").css("transform", "translate(" + a + "px, " + b + "px)")
//});

class Star {
    constructor(obj) {
        this.star = document.querySelector(".stars");
        this.sections = document.querySelector("#conetents");
        this.init();
    }

    init() {
        this.binds();
        this.events();
    }

    binds() {
        this.handleMouse = this.handleMouse.bind(this);
        //this.handleScroll = this.handleScroll.bind(this);
    }

    events() {
        window.addEventListener('mousemove', this.handleMouse);
        //window.addEventListener('scroll', this.handleScroll);
    }

    handleMouse(e) {
        this.mouseX = e.pageX * 0.1;
        this.mouseY = e.pageY * 0.1;
        gsap.to(this.star, {
            duration: .2,
            x: this.mouseX,
            y: this.mouseY,
            z: this.mouseX * 0.1,
            ease: "circ.out"
        });
    }
}
new Star();