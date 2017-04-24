"use strict";
(function(){
  var guide = {
    navigation  : document.getElementById("guide-nav"),
    document    : document.getElementById("guide-document"),

    list        : []
  };

  guide.navigation.setSize = function(first){
    var height = (window.innerHeight - 175)+ "px";
    this.style.maxHeight = height;
    guide.document.style.minHeight = height;
    this.bannerHeight = document.getElementById("banner").offsetHeight;
  }

  guide.navigation.setSize();

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
          var sContent = '<span class="span">' + string.content + '</span>';

        switch (string.type){
          case "title-2":
            html += '<h2 class="h2 ' + classList + " " + position + '">' + string.content + '</h2>';
          break;

          case "title-3":
            html += '<h3 class="h3 ' + classList + " " + position + '">' + string.content + '</h3>';
          break;

          case "title-4":
            html += '<h4 class="h3 ' + classList + " " + position + '">' + string.content + '</h4>';
          break;

          case "title-5":
            html += '<h5 class="h3 ' + classList + " " + position + '">' + string.content + '</h5>';
          break;

          case "title-6":
            html += '<h6 class="h3 ' + classList + " " + position + '">' + string.content + '</h6>';
          break;

          case "paragraph":
            html += '<p class="p ' + classList + " " + position + '">' + string.content + '</p>';
          break;

          case "italic":
            if( typeof sContent != "undefined" )
              html += '<p class="p italic ' + classList + " " + position + '">' + sContent + '</p>';
            else html += '<p class="p italic ' + classList + " " + position + '">' + string.content + '</p>';
          break;

          case "link":
            html += '<a href="' + string.link + '" class="link ' + classList + " " + position + '">' + string.content + '</a>';
          break;

          case "table":
          var ti, tr, td, ti2;
            html += '<table class="table"><thead class="head"><tr>';

            for(ti = 0; td = string.head[ti]; ++ti)
              html += '<th class="th" colspan="' + td.sizeX + '" rowspan="' + td.sizeY + '">' + td.content + '</th>';

            html += '</tr></thead><tbody class="body">';

            for(ti = 0; tr = string.body[ti]; ++ti){
              html += '<tr class="tr">';
              for(ti2 = 0; td = tr[ti2]; ++ti2){
                if( td.bold ) td.bold = "bold";
                else td.bold = "";
                html += '<td class="td ' + td.bold + '" colspan="' + td.sizeX + '" rowspan="' + td.sizeY + '">' + td.content + '</td>';
              }
              html += '</tr>';
            }

            html += '</table>';
          break
        }

        position = classList = autor = link = sContent = null;
      }

      return html;
    }
  };

  $.ajax({
    url         : "/api/guide/all.json",
    async       : false,
    beforeSend  : function(){
      document.body.style.display = "none";
    },

    success     : function(json){
      var i, q;
      for(i = 0; q = json[i]; ++i){
        $.ajax({
          url     : q.url,
          async   : false,
          success : function(guideJson){
            guide.list.push(guideJson);
          }
        });
      }

      guide.document.innerHTML = get.html(guide.list[0].document);
      for(i = 0; q = guide.list[i]; ++i){
        if( i )
          guide.navigation.innerHTML += '<span class="link" data-href="' + (i) + '" onclick="guide.change(this)" title="' + q.fullName + '">' + q.shortName + '</span>';
        else guide.navigation.innerHTML += '<span class="link active" data-href="' + (i) + '" onclick="guide.change(this)" title="' + q.fullName + '">' + q.shortName + '</span>';
      }

    },

    complete    : function(){
      document.body.style.display = "";
    }
  });

  guide.change = function(span){
    if( span.classList.contains("active") )
      return;

    span.parentNode.querySelector(".active").classList.remove("active");
    this.document.innerHTML = get.html(this.list[ span.getAttribute("data-href") ].document);
    span.classList.add("active");
  }

  document.body.onscroll = function(scroll){
    guide.navigation.setSize(true);

    if(this.scrollY >= 170 + guide.navigation.bannerHeight){
      guide.navigation.classList.add("fixed");
      if( guide.navigation.classList.contains("absolute") )
        guide.navigation.classList.remove("absolute");

    } else {
      guide.navigation.classList.add("absolute");
      if( guide.navigation.classList.contains("fixed") )
        guide.navigation.classList.remove("fixed");

    }
  }

  window.guide = guide;
})();
