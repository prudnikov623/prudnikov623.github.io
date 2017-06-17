$(document).ready(function () {
 $('input,textarea').focus(function(){
   $(this).data('placeholder',$(this).attr('placeholder'))
   $(this).attr('placeholder','');
 });
 $('input,textarea').blur(function(){
   $(this).attr('placeholder',$(this).data('placeholder'));
 });
 });



function vverh() {
  window.scrollBy(0,-100); // чем меньше значение (цифра -10), тем выше скорость перемещения
  if (window.pageYOffset > 0) {requestAnimationFrame(vverh);} // если значение прокрутки больше нуля, то функция повториться
}
document.getElementById('vverh').addEventListener('click', function(e) {
   e.preventDefault();  // запрет перехода по ссылке, вместо него скрипт
   vverh();
}, false);


