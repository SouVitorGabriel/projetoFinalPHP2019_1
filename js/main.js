var email = document.getElementById("email");
var senha = document.getElementById("senha");
var pontos = document.getElementById("pontos");
var multi1 = document.getElementById("multi1");
var multi2 = document.getElementById("multi2");
var multi3 = document.getElementById("multi3");

/* ?email=meil@meil,senha=123,pontos=092,multi1=1,multi2=1,multi3=1 *//* 

alert("Email:" + email); */

var canvas = document.getElementById("jogo");

var context = canvas.getContext("2d");

var Imagem = function(x, y, w, h, ctx, img)
{
    this.start = (new Date()).getTime();
	this.current;	
    this.currentFrame = 0.;
    
    this.images = new Array();
    this.numFrames = 4;
    
    this.w = w;
    this.h = h;
    this.x = x;
    this.y = y;

    for (var i = 0; i < this.numFrames; i++)
	{
	    this.images[i] = new Image();
		this.images[i].src = "img/"+ img + (i+1) + ".png";
    }
    
    this.deltaTime = function()
	{
		this.current = (new Date()).getTime();
		this.elapsed = this.current - this.start;
		this.start = this.current;
		var delta = this.elapsed / 1000.;			
		return delta;
    }

    this.update = function()
	{
		var delta = this.deltaTime();	
		this.currentFrame += delta * 10;
	}
    
    this.draw = function()
	{
		ctx.drawImage(this.images[Math.floor(this.currentFrame)%this.numFrames], x, y, w, h);		
	}
}


/* context.fillStyle = "#FF0000";

context.fillRect(0, 0, 500,500);

context.fillStyle = "#00ff00";

context.fillRect(500, 0, 800,500);

context.fillStyle = "#000fff";

context.fillRect(520,20, 220,50);

context.fillRect(520,90, 220,50);

context.fillRect(520,160, 220,50);

context.fillRect(520,230, 220,50);

context.fillRect(520,300, 220,50);

context.fillRect(520,370, 220,50); */

var multImg1 = new Imagem(31.5, 25.7, 39, 39, context, "doge");

var multImg1_2 = new Imagem(87.5, 25.7, 39, 39, context, "doge");


for (var i = 0; i <= 2; i++)
{
    for (var i = 0; i <= 1; i++)
    {
        
    }
}
function loop()
{	
    multImg1.update();
    multImg1_2.update();

    context.clearRect(0, 0, canvas.width, canvas.height);
    
    multImg1.draw();
    multImg1_2.draw();
    	
    	
    setTimeout(loop, 30);
}

loop();