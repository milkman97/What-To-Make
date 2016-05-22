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
    var item = document.getElementById(id).id;
    var boxs = document.getElementById(id);
     
    if (boxs.checked) {
         
         item = lookForSpaces(item);
         
        //adding elements to the array
        foods.push(item);
        
        //string to push to api call
        var stuff = foods.toString(); 
        console.log(stuff);
    }
    if(!boxs.checked) {
        //deletes elements from the array
        item = lookForSpaces(item);
        var i = foods.indexOf(item);
        if(i != -1) {
	       foods.splice(i, 1);
            var stuff = foods.toString(); 
            console.log(stuff);
        }
    }
}

function lookForSpaces(id){
    return id.replace(/\s/g, '%20');
}

$('.modal-trigger').leanModal();

function cookiefunc(){
    if(document.cookie.indexOf("ingredients") > -1 ){
        var d = new Date();
        d.setTime(d.getTime() + (10*24*60*60*1000));
        var expires = "expires="+ d.toUTCString();
        console.log(expires);
        var list = foods.toString();
        document.cookie = "ingredients=" + list + ";" + expires;
        var x = document.cookie;
        alert(x);
    }else{
        window.document.cookie = "ingredients=";
    }
}

