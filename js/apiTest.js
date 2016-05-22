 window.onload=function(){
     $(function(){
         if(window.location.protocol==="https:")
             window.location.protocol="http";
     });
 }
 
$('#send').click(
    function () {
        var list = foods.toString();
        if (list == " ") {
            list = "";
        }
        var url = "http://crossorigin.me/http://food2fork.com/api/search?key=315107456e4b02d7abecd295c694c6e6&q=" + list;
        $.getJSON(url, function (data) {
            if (data.recipes.length === 0) {

            } else if (data.recipes.length === 1) {
                document.getElementById("title1").innerHTML = data.recipes[0].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;


            } else if (data.recipes.length === 2) {
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;

            } else if (data.recipes.length === 3) {
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher: " + data.recipes[2].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
            }else if(data.recipes.length === 4){
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;
                document.getElementById("title4").innerHTML = data.recipes[3].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);
                $("#picplaceholder4").attr("src", data.recipes[3].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);
                $("#linktorecipe4").attr("href", data.recipes[3].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher: " + data.recipes[2].publisher;
                document.getElementById("publisher4").innerHTML = "Publisher: " + data.recipes[3].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);
                $("#publisherurl4").attr("href", data.recipes[3].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
                document.getElementById("rank4").innerHTML = "Social Rankings " + data.recipes[3].social_rank;
            }else if(data.recipes.length === 5){
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;
                document.getElementById("title4").innerHTML = data.recipes[3].title;
                document.getElementById("title5").innerHTML = data.recipes[4].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);
                $("#picplaceholder4").attr("src", data.recipes[3].image_url);
                $("#picplaceholder5").attr("src", data.recipes[4].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);
                $("#linktorecipe4").attr("href", data.recipes[3].source_url);
                $("#linktorecipe5").attr("href", data.recipes[4].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher: " + data.recipes[2].publisher;
                document.getElementById("publisher4").innerHTML = "Publisher: " + data.recipes[3].publisher;
                document.getElementById("publisher5").innerHTML = "Publisher: " + data.recipes[4].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);
                $("#publisherurl4").attr("href", data.recipes[3].publisher_url);
                $("#publisherurl5").attr("href", data.recipes[4].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
                document.getElementById("rank4").innerHTML = "Social Rankings " + data.recipes[3].social_rank;
                document.getElementById("rank5").innerHTML = "Social Rankings " + data.recipes[4].social_rank;
            }else{
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;
                document.getElementById("title4").innerHTML = data.recipes[3].title;
                document.getElementById("title5").innerHTML = data.recipes[4].title;
                document.getElementById("title6").innerHTML = data.recipes[5].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);
                $("#picplaceholder4").attr("src", data.recipes[3].image_url);
                $("#picplaceholder5").attr("src", data.recipes[4].image_url);
                $("#picplaceholder6").attr("src", data.recipes[5].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);
                $("#linktorecipe4").attr("href", data.recipes[3].source_url);
                $("#linktorecipe5").attr("href", data.recipes[4].source_url);
                $("#linktorecipe6").attr("href", data.recipes[5].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher: " + data.recipes[2].publisher;
                document.getElementById("publisher4").innerHTML = "Publisher: " + data.recipes[3].publisher;
                document.getElementById("publisher5").innerHTML = "Publisher: " + data.recipes[4].publisher;
                document.getElementById("publisher6").innerHTML = "Publisher: " + data.recipes[5].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);
                $("#publisherurl4").attr("href", data.recipes[3].publisher_url);
                $("#publisherurl5").attr("href", data.recipes[4].publisher_url);
                $("#publisherurl6").attr("href", data.recipes[5].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
                document.getElementById("rank4").innerHTML = "Social Rankings " + data.recipes[3].social_rank;
                document.getElementById("rank5").innerHTML = "Social Rankings " + data.recipes[4].social_rank;
                document.getElementById("rank6").innerHTML = "Social Rankings " + data.recipes[5].social_rank;
            }

        }).fail(function() {
            alert('Darn... :/ this recipe couldn\'t be loaded because our servers are busy or down; try again in a few minutes and your request should go through. If not, please contact us and we\'ll investigate the manner!'); 
        });
    }
);

$('#SearchStuff').click(function () {
    
        var listsearch = $('#searchStuff').val();
        console.log(listsearch);
        
        var listsearch = lookForSpaces(listsearch);
        
        var url = "http://crossorigin.me/http://food2fork.com/api/search?key=315107456e4b02d7abecd295c694c6e6&q=" + listsearch;
        
        $.getJSON(url, function (data) {
           if (data.recipes.length === 0) {

            } else if (data.recipes.length === 1) {
                document.getElementById("title1").innerHTML = data.recipes[0].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;


            } else if (data.recipes.length === 2) {
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;

            } else if (data.recipes.length === 3) {
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher: " + data.recipes[2].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
            }else if(data.recipes.length === 4){
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;
                document.getElementById("title4").innerHTML = data.recipes[3].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);
                $("#picplaceholder4").attr("src", data.recipes[3].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);
                $("#linktorecipe4").attr("href", data.recipes[3].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher: " + data.recipes[2].publisher;
                document.getElementById("publisher4").innerHTML = "Publisher: " + data.recipes[3].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);
                $("#publisherurl4").attr("href", data.recipes[3].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
                document.getElementById("rank4").innerHTML = "Social Rankings " + data.recipes[3].social_rank;
            }else if(data.recipes.length === 5){
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;
                document.getElementById("title4").innerHTML = data.recipes[3].title;
                document.getElementById("title5").innerHTML = data.recipes[4].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);
                $("#picplaceholder4").attr("src", data.recipes[3].image_url);
                $("#picplaceholder5").attr("src", data.recipes[4].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);
                $("#linktorecipe4").attr("href", data.recipes[3].source_url);
                $("#linktorecipe5").attr("href", data.recipes[4].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher: " + data.recipes[2].publisher;
                document.getElementById("publisher4").innerHTML = "Publisher: " + data.recipes[3].publisher;
                document.getElementById("publisher5").innerHTML = "Publisher: " + data.recipes[4].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);
                $("#publisherurl4").attr("href", data.recipes[3].publisher_url);
                $("#publisherurl5").attr("href", data.recipes[4].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
                document.getElementById("rank4").innerHTML = "Social Rankings " + data.recipes[3].social_rank;
                document.getElementById("rank5").innerHTML = "Social Rankings " + data.recipes[4].social_rank;
            }else{
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;
                document.getElementById("title4").innerHTML = data.recipes[3].title;
                document.getElementById("title5").innerHTML = data.recipes[4].title;
                document.getElementById("title6").innerHTML = data.recipes[5].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);
                $("#picplaceholder4").attr("src", data.recipes[3].image_url);
                $("#picplaceholder5").attr("src", data.recipes[4].image_url);
                $("#picplaceholder6").attr("src", data.recipes[5].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);
                $("#linktorecipe4").attr("href", data.recipes[3].source_url);
                $("#linktorecipe5").attr("href", data.recipes[4].source_url);
                $("#linktorecipe6").attr("href", data.recipes[5].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher: " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher: " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher: " + data.recipes[2].publisher;
                document.getElementById("publisher4").innerHTML = "Publisher: " + data.recipes[3].publisher;
                document.getElementById("publisher5").innerHTML = "Publisher: " + data.recipes[4].publisher;
                document.getElementById("publisher6").innerHTML = "Publisher: " + data.recipes[5].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);
                $("#publisherurl4").attr("href", data.recipes[3].publisher_url);
                $("#publisherurl5").attr("href", data.recipes[4].publisher_url);
                $("#publisherurl6").attr("href", data.recipes[5].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
                document.getElementById("rank4").innerHTML = "Social Rankings " + data.recipes[3].social_rank;
                document.getElementById("rank5").innerHTML = "Social Rankings " + data.recipes[4].social_rank;
                document.getElementById("rank6").innerHTML = "Social Rankings " + data.recipes[5].social_rank;
            }

        });
    
});