$('#send').click(
    function(){
        var url = "http://food2fork.com/api/search?key=315107456e4b02d7abecd295c694c6e6&q=" + foods.toString();
        $.getJSON(url, function(data)
            {
            console.log(data);
        });
    }
);
