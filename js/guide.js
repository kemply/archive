"use strict";
(function(){
  var guide = {
    "navigation"  : document.getElementById("guide-nav"),
    "document"    : document.getElementById("guide-document")
  };

  guide.navigation.setSize = function(first){
    if( first ){
      if( this.style.maxHeight )
        this.style.maxHeight = this.offsetHeight + "px";
      else return;
    }

    this.style.maxHeight = "";
    this.style.maxHeight = this.offsetHeight + "px";
  }

  window.onresize = function(){
    guide.navigation.setSize();
  }

  var get = {
    "html"  : function(json){
      var html = "";

      var i, string, classList, position, autor, link;
      for(i = 0; string = json[i]; ++i){
        position  = string.position || "none";
        classList = string.class || "";

        if( position == "left" || position == "right" )
          string.content = '<span class="span">' + string.content + '</span>';

        switch (string.type){
          case "title-2":
            html += '<h2 class="h2 ' + classList + " " + position + '">' + string.content + '</h2>';
          break;

          case "paragraph":
            html += '<p class="p ' + classList + " " + position + '">' + string.content + '</p>';
          break;

          case "italic":
            html += '<p class="p italic ' + classList + " " + position + '">' + string.content + '</p>';
          break;

          case "link":
            html += '<a href="' + string.link + '" class="link ' + classList + " " + position + '">' + string.content + '</a>';
          break;
        }

        position = classList = autor = link = null;
      }

      return html;
    }
  };

  $.ajax({
    url     : "/api/guide/Doc1.json",
    success : function(json){
      guide.document.innerHTML = get.html(json.document);
    }
  });

  document.body.onscroll = function(scroll){
    guide.navigation.setSize(true);

    if(this.scrollY >= 170){
      guide.navigation.classList.add("fixed");
      if( guide.navigation.classList.contains("absolute") )
        guide.navigation.classList.remove("absolute");

    } else {
      guide.navigation.classList.add("absolute");
      if( guide.navigation.classList.contains("fixed") )
        guide.navigation.classList.remove("fixed");

    }
  }

})();
