var button = document.querySelector('button');

button.eventListener('click', function (event){
event.preventDeafult();
});