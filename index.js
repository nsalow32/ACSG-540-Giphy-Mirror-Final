var APIKEY = "secret!"

function getImages() {
    var GetMore = document.getElementById("more").addEventListener("click")

        while ($offset <= 10) {
            $offset++; 
        } 

function search() {
    document.getElementById("searchButton").addEventListener("click", ev => {
      ev.preventDefault(); //no page total reloading
      let url = `https://api.giphy.com/v1/gifs/search?api_key=${APIKEY}&limit=5&rating=g&offset=0&q=`;

      let str = document.getElementById("Search_input").value.trim();
      url = url.concat(str);
      console.log(url);
      fetch(url)
        .then(response => response.json())
        .then(content => {
          console.log(content.data);
          console.log("META", content.meta);
          let fig = document.createElement("figure");
          let img = document.createElement("img");
          let fc = document.createElement("figcaption");
          img.src = content.data[5].images.downsized.url;
          img.alt = content.data[5].title;
          fc.textContent = content.data[5].title;
          fig.appendChild(img);
          let out = document.querySelector(".out");
          out.insertAdjacentElement("afterbegin", fig);
          document.querySelector("#search").value = "";
        })

        .catch(err => {
          console.error(err);

        });
    });
  }

    var xhr = new XMLHttpRequest();

var everything = JSON.parse(xhr.responseText);
    for (var i = 0; i < giphy.data.length; i++) {
        getImages(giphy.data[i].images.original.url)
        $("body").append('<iframe src="'+ everything[i] +'" width="380" height = "200">')}}