window.addEventListener('load',function(){

//constant variable    
const canvas  = document.getElementById('canvas1');
const ctx     = canvas.getContext('2d');
canvas.width  = 1500;
canvas.height = 720;
const moving = false;
const froggerSprite = new Image();
froggerSprite.src = 'assets/img/frog_spritesheet.png';




// create class for genrate endless background
class Background{
    
     constructor(gameWidth,gameHeigth){
         this.gameWidth  = gameWidth;
         this.gameHeigth = gameHeigth;
         this.image = document.getElementById('backgroundImage');
         this.x = 0;
         this.y = 0;  
         this.width = 2400;
         this.height = 720;
         this.speed = 0;
     }
     draw(context){
          context.drawImage(this.image,this.x,this.y,this.width,this.height);
          context.drawImage(this.image,this.x +this.width,this.y,this.width,this.height);
        

     }
     update(){
         this.x -= this.speed;
         if(this.x < 0 - this.width) this.x = 0;
     }
}

//create class for genrate frog
class Frogger{ 
    constructor(gameWidth,gameHeigth,X,Y){
            
    this.spriteWidth  = 250;
    this.spriteheight = 250;
    this.width   = this.spriteWidth/5;
    this.height  = this.spriteheight/5;
    this.x = X;
    this.y =  gameHeigth - this.height -Y;
    this.moving = false;
    this.framX = 1;
    this.framY = 1;
    }

    update(grid){
                if(this.moving === false){
                    this.x += grid;
                    this.moving = true;
                    this.framX = 0; 
                    // console.log(this.framX);
                }
                this.x += grid;
            }

    draw(context){

        // context.fillStyle = 'green';
        // context.fillRect(this.x,this.y,this.width,this.height);
        context.drawImage(froggerSprite,this.framX * this.spriteWidth,this.framY * this.spriteheight,
                        this.spriteWidth,this.spriteheight,this.x -25,this.y -25,this.width*2,this.height*2);
    }
    
     //set up value for the jump 
        setUpTime = setInterval(function () {
          
           frogger.update(13); 
           frogger1.update(15); 
           frogger2.update(10); 
        },1000);
      
}

//function user to display score and game over status
function displayStatusText(){
}

//object creation for Frogger
const  frogger  = new  Frogger(canvas.width,canvas.height,80,350);
const  frogger1 = new  Frogger(canvas.width,canvas.height,80,450);
const  frogger2 = new  Frogger(canvas.width,canvas.height,80,250);
// frogger.claerRect(0,0,this.width,this.height);
// frogger.update();
//object creation for background
const background = new Background(canvas.width,canvas.height);


//function use to give the animation
function animate(){
    
      background.draw(ctx);
      
      frogger.draw(ctx);
      frogger1.draw(ctx);
      frogger2.draw(ctx);
     
      //frogger.jump();
      //set up value for the jump 
    //   background.update();
      requestAnimationFrame(animate);
}
animate();
});
