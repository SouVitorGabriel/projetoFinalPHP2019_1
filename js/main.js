var email = document.getElementById("email");
var senha = document.getElementById("senha");
var pontos = document.getElementById("pontos");
var multi1 = document.getElementById("multi1");
var multi2 = document.getElementById("multi2");
var multi3 = document.getElementById("multi3");

/* ?email=meil@meil,senha=123,pontos=092,multi1=1,multi2=1,multi3=1 */

alert("Email:" + email);

var canvas = document.getElementById("jogo");

var context = canvas.getContext("2d");

context.fillStyle = "#FF0000";

context.fillRect(0, 0, 500,500);

context.fillStyle = "#00ff00";

context.fillRect(500, 0, 800,500);

context.fillStyle = "#000fff";

context.fillRect(520,20, 220,50);

context.fillRect(520,90, 220,50);

context.fillRect(520,160, 220,50);

context.fillRect(520,230, 220,50);

context.fillRect(520,300, 220,50);

context.fillRect(520,370, 220,50);


var image = new Image();
image.src = "img/olar.png";
image.onload = function()
{
    context.drawImage(image, 2,2,50,50);
    context.drawImage(image, 60,60,50,50);
    context.drawImage(image, 120,120,50,50);
    context.drawImage(image, 300,160,50,50);
    context.drawImage(image, 160,300,50,50);
}


var img = new Image();
img.src = "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png";
img.onload = function()
{
    context.drawImage(img, 200,200);
}