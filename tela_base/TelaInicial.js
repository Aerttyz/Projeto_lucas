class MobileNavbar{
    constructor(mobileMenu, navList, navLinks){
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";
        this.handleClick = this.handleClick.bind(this);
    }
    animateLinks(){
        this.navLinks.forEach((link)=>{
            link.style.animation
            ?(link.style.animation="")
            :(link.style.animation = 'navLinkFade 0.5s ease forwards 0.3s');
        });
    }
     handleClick(){
         
         this.navList.classList.toggle(this.activeClass);
         this.mobileMenu.classList.toggle(this.activeClass);
         this.animateLinks();
          }

    addClickEvent(){
        this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init(){
        if(this.mobileMenu){
            this.addClickEvent();
        }
        return this;
    }
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);
mobileNavbar.init();
var x = 1;
function cor(){
    
    
    if(x == 1){
    document.getElementById('wave').style.color = '#ff0000';
    document.getElementById('wave').innerHTML = 'Não, é sangue!';
    document.getElementById('tex').innerHTML = 'Não, é sangue!';
    x++;
    console.log(x)
} else if(x == 2){
    document.getElementById('wave').style.color = '#00ff00';
    document.getElementById('wave').innerHTML = 'Não, é mato!';
    document.getElementById('tex').innerHTML = 'Não, é mato!';
    x++;
    console.log(x)
}else if(x == 3){
    document.getElementById('wave').style.color = 'blue';
    document.getElementById('wave').innerHTML = 'isso é agua?';
    document.getElementById('tex').innerHTML = 'isso é agua?';
    x=1;
    console.log(x)
}}
function md(){
    setInterval('cor()', 1000)
    
}
    var y = 0;
function bb(){
    y++;
    document.getElementById('but').innerHTML = y;
}
function cc(){
    document.getElementById('vel').innerHTML = 'velocidade = '+y;
}
