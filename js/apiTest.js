$(document).ready(
    function(){
        $.getJSON("http://food2fork.com/api/search?key=315107456e4b02d7abecd295c694c6e6&q=milk,bread,cheese,beef", function(data)
            {
            console.log(data);
        });
    }
);
