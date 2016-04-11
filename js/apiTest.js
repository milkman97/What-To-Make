$('#send').click(
    function () {
        var list = foods.toString();
        if (list == " ") {
            list = "";
        }
        var url = "http://food2fork.com/api/search?key=315107456e4b02d7abecd295c694c6e6&q=" + list;
        $.getJSON(url, function (data) {
            console.log(data);

            if (jQuery.isEmptyObject(data)) {

            } else {
                document.getElementById("title1").innerHTML = data.recipes[0].title;
                document.getElementById("title2").innerHTML = data.recipes[1].title;
                document.getElementById("title3").innerHTML = data.recipes[2].title;

                $("#picplaceholder1").attr("src", data.recipes[0].image_url);
                $("#picplaceholder2").attr("src", data.recipes[1].image_url);
                $("#picplaceholder3").attr("src", data.recipes[2].image_url);

                $("#linktorecipe1").attr("href", data.recipes[0].source_url);
                $("#linktorecipe2").attr("href", data.recipes[1].source_url);
                $("#linktorecipe3").attr("href", data.recipes[2].source_url);

                document.getElementById("publisher1").innerHTML = "Publisher " + data.recipes[0].publisher;
                document.getElementById("publisher2").innerHTML = "Publisher " + data.recipes[1].publisher;
                document.getElementById("publisher3").innerHTML = "Publisher " + data.recipes[2].publisher;

                $("#publisherurl1").attr("href", data.recipes[0].publisher_url);
                $("#publisherurl2").attr("href", data.recipes[1].publisher_url);
                $("#publisherurl3").attr("href", data.recipes[2].publisher_url);

                document.getElementById("rank1").innerHTML = "Social Rankings " + data.recipes[0].social_rank;
                document.getElementById("rank2").innerHTML = "Social Rankings " + data.recipes[1].social_rank;
                document.getElementById("rank3").innerHTML = "Social Rankings " + data.recipes[2].social_rank;
            }

        });
    }
);