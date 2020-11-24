var bot = document.getElementById('btngame');
    bot.addEventListener('click', Clicar)
var atual = 0;
var pontos = 50;
function Clicar () {
atual=atual+pontos;
alert(`Parabéns!! agora você possui ${atual} pontos`);
bot.removeEventListener('click', Clicar);
    bot.style.background ='#fff';
    bot.innerHTML='Finalizada!';  
}