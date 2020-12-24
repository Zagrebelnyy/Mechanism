let buttonForm=document.getElementById('btn-sign-in_modal-window');
let modal=document.getElementById('sign-in_modal-window');
let close=document.getElementById('sign-in_modal-window__close');
close.onclick=function(){
    modal.style.display="none";
}
buttonForm.onclick=function(){
    modal.style.display="block";
}