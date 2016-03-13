function HideOrUnhide(id, contentId, header) {
    toggleSub(id, contentId, header);
}

function toggleSub(box, id, header) {
    // get reference to related content to display/hide
    var el = document.getElementById(id);
    var boxs = document.getElementById(box);
    var head = document.getElementById(header);
    
    if (boxs.checked) {
        el.classList.remove('fadeOutUp');
        el.classList.add('fadeInDown');
        el.style.display = "block";
        if(head === null){
           //ignore the error code here 
        }
        
        else{
            head.style.display = "block";
        }
    } if(!boxs.checked) {
        el.classList.remove('fadeInDown');
        el.classList.add('fadeOutUp');
        el.style.display = "none";
        if(head === null){
           //ignore the error code here 
        }else{
            head.style.display = "none";
        }
    }
}