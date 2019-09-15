var email = "";
var senha = "";
var pontos = 0;
var multi1 = 0;
var multi2 = 0;
var multi3 = 0;

var valorMulti1 = 10;
var valorMulti2 = 100;
var valorMulti3 = 1000;

var mouse_x;
var mouse_y;

//programar o click b2 b3
//funcoes para desenhar miniDoge2 e MiniDoges3



var pegaPontos = function()
{
    email = document.getElementById("email");
    senha = document.getElementById("senha");
    //pontos = parseInt(document.getElementById("pontos"));
    //multi1 = document.getElementById("multi1");
    //multi2 = document.getElementById("multi2");
    //multi3 = document.getElementById("multi3");
}
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
		this.currentFrame += delta * 5  ;
	}
    
    this.draw = function(sim)
	{
        if (sim)
		ctx.drawImage(this.images[Math.floor(this.currentFrame)%this.numFrames], x, y, w, h);		
	}
}

var DrawDoge = function(x, y, w, h, ctx, img)
{
    this.start = (new Date()).getTime();
	this.current;	
    this.currentFrame = 0.;
    
    this.images = new Array();
    this.numFrames = 2;
    
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
		this.currentFrame += delta * 4;
	}
    
    this.draw = function(sim)
	{
        if (sim)
		ctx.drawImage(this.images[Math.floor(this.currentFrame)%this.numFrames], x, y, w, h);		
	}
}

var drawText = function(x,y,text,color)
	{
		context.fillStyle = color;
		context.font = "20px Arial";
		context.fillText(text, x, y);		
	}	


var _mouseMove = function(e)
{
    var rect = canvas.getBoundingClientRect();

    mouse_x = e.x - rect.left;
    mouse_y = e.y - rect.top;
}

var _mouseUp = function(e)
{
    mouse_pressed = false;


    //se clicar no doge
    if (mouse_x > 305 && mouse_y > 114 && mouse_x < (305 + 200) && mouse_y < (114 + 200))
    {
        pontos++;
        dogePoints.update();
    }

    //click upgrade
    if (mouse_x > 558.6 && mouse_y > 25.7 && mouse_x < (558.6 + 190.7) && mouse_y < (25.7 + 68.3))
    {
        if (pontos > valorMulti1)
        {
            pontos -= valorMulti1;
            multi1++;
            valorMulti1 *= 2;
            desenhaMiniDoge1();
        }
    }

    //click upgrade2
    if (mouse_x > 558.6 && mouse_y > 25.7 + 88.3 && mouse_x < (558.6 + 190.7) && mouse_y < (25.7 + 68.3 + 88.3))
    {
        if (pontos > valorMulti2)
        {
            pontos -= valorMulti2;
            multi2++;
            valorMulti2 *= 2;
            desenhaMiniDoge2();
        }
    }

    //click upgrade3
    if (mouse_x > 558.6 && mouse_y > 25.7 + 88.3 + 88.3 && mouse_x < (558.6 + 190.7) && mouse_y < (25.7 + 68.3 + 88.3 + 88.3))
    {
        if (pontos > valorMulti3)
        {
            pontos -= valorMulti3;
            multi3++;
            valorMulti3 *= 2;
            desenhaMiniDoge3();
        }
    }
}	

var _mouseDown = function(e)
{
    mouse_pressed = true
}	



//Adiciona pontos
var addPontos = function()
{
    pontos++;
}

var addMulti1 = function()
{
    multi1++;
}

var addMulti2 = function()
{
    multi2++;
}

var addMulti3 = function()
{
    multi3++;
}



canvas.addEventListener("mousemove", _mouseMove, false);
canvas.addEventListener("mouseup",   _mouseUp,   false);
canvas.addEventListener("mousedown", _mouseDown, false);




//botoes
var dogePoints = new DrawDoge(305, 114, 200, 200, context, "Doggo_Black");

var upgrade1 = new Imagem(558.6, 25.7, 190.7, 68.3, context, "button");

var upgrade2 = new Imagem(558.6, 114, 190.7, 68.3, context, "button");

var upgrade3 = new Imagem(558.6, 202.2, 190.7, 68.3, context, "button");


var blocks1 = [[],[]];
var blocks2 = [[],[]];
var blocks3 = [[],[]];

var blocks1Draw = [[],[]];
var blocks2Draw = [[],[]];
var blocks3Draw = [[],[]];

var posX = 31.5;
var posY = 25.7;
for (var i = 0; i <= 1; i++)
{
    for (var j = 0; j <= 3; j++)
    {
        blocks1[i][j] =  new DrawDoge(posX, posY, 39, 39, context, "Doggo_Black");
        blocks1Draw[i][j] =  false;
        posX += 56;
    }
    posX = 31.5;
    posY += 56;
}

posX = 31.5;
posY = 168.5;
for (var i = 0; i <= 1; i++)
{
    for (var j = 0; j <= 3; j++)
    {
        blocks2[i][j] =  new DrawDoge(posX, posY, 39, 39, context, "Doggo_Red");
        blocks2Draw[i][j] = false;
        posX += 56;
    }
    posX = 31.5;
    posY += 56;
}

posX = 31.5;
posY = 311.2;
for (var i = 0; i <= 1; i++)
{
    for (var j = 0; j <= 3; j++)
    {
        blocks3[i][j] =  new DrawDoge(posX, posY, 39, 39, context, "Doggo_White");
        blocks3Draw[i][j] = false;
        posX += 56;
    }
    posX = 31.5;
    posY += 56;
}



function update()
{
    for (var i = 0; i <= 1; i++)
    {
        for (var j = 0; j <= 3; j++)
        {
            blocks1[i][j].update();
            blocks2[i][j].update();
            blocks3[i][j].update();
        }
    }   
}

function draw()
{
    context.clearRect(0, 0, canvas.width, canvas.height);

    context.fillStyle = "#e2bb0b";
    context.fillRect(0 ,0 , 540, 432);
    context.fillStyle = "#443117";
    context.fillRect(540 ,0 , 228, 432);
    
    for (var i = 0; i <= 1; i++)
    {
        for (var j = 0; j <= 3; j++)
        {
            blocks1[i][j].draw(blocks1Draw[i][j]);
            blocks2[i][j].draw(blocks2Draw[i][j]);
            blocks3[i][j].draw(blocks3Draw[i][j]);
        }
    }

    dogePoints.draw(true);
    upgrade1.draw(true);
    upgrade2.draw(true);
    upgrade3.draw(true);

    drawText (291, 34, "DOGE COINS", "YELLOW");
    drawText (291, 54, pontos, "YELLOW");

    drawText (568, 90, "DC$: " + valorMulti1, "YELLOW");
    drawText (568, 90+88, "DC$: " + valorMulti2, "YELLOW");
    drawText (568, 90+88+88, "DC$: " + valorMulti3, "YELLOW");

    drawText(mouse_x, mouse_y, "mousex: " + mouse_x + " mouse Y: " + mouse_y, "BLACK");

    /* multImg1.draw();
    multImg1_2.draw(); */
}

function drawNewDogee(vetor, num)
{
    switch (num)
    {
        case 1:
            vetor[0][0] = true;
            break;
        case 2:
            vetor[0][1] = true;
            break;
        case 3:
            vetor[0][2] = true;
            break;
        case 4:
            vetor[0][3] = true;
            break;
        case 5:
            vetor[1][0] = true;
            break;
        case 6:
            vetor[1][1] = true;
            break;
        case 7:
            vetor[1][2] = true;
            break;
        case 8:
            vetor[1][3] = true;
            break;
        default:
            document.write("Erro, por favor reinicie a página");
    } 

}

function loop()
{	
    update();
    draw();    	
    setTimeout(loop, 30);
}

function multiplicador()
{
    pontos += multi1;
    pontos += multi2;
    pontos += multi3;
    setTimeout(multiplicador, 1000);
}

var dogees1 = 1;
var dogees2 = 1;
var dogees3 = 1;
function desenhaMiniDoge1()
{
    if (dogees1 <= 8)
    {
        drawNewDogee(blocks1Draw, dogees1);
        dogees1++;
    }
}
function desenhaMiniDoge2()
{
    if (dogees2 <= 8)
    {
        drawNewDogee(blocks2Draw, dogees2);
        dogees2 = dogees2 *2;
    }
}
function desenhaMiniDoge3()
{
    if (dogees3 <= 8)
    {
        drawNewDogee(blocks3Draw, dogees3);
        dogees3 = dogees3 * 3;
    }
}

loop();
multiplicador();