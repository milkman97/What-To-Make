//this array will be sent to the api to get back the list of recipes
var foods = [];

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
        }else{
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

function addItemToArray(id){
    var boxs = document.getElementById(id);
     if (boxs.checked) {
        //adding elements to the array
        foods.push(document.getElementById(id).id);
        
        //string to push to api call
        var stuff = foods.toString(); 
         
    }
    if(!boxs.checked) {
        //deletes elements from the array
        var i = foods.indexOf(document.getElementById(id).id);
        if(i != -1) {
	       foods.splice(i, 1);
        }
    }
}