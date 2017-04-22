(function(){

  var click = {
    target      : [],
    targetOnce  : []
  };

  document.onclick = function(element){
    var target = element.target;

    if( click.target[target] )
      click.target[target](target);

    if( click.targetOnce[target] ){
      click.targetOnce[target](target);
      delete click.targetOnce[target];
    }
  }

  var modal = {};

  modal.open = function(id){
    var modal = document.getElementById(id);
    if( !modal ) return;

    if( !modal.classList.contains("active") )
      modal.classList.add("active");

    click.targetOnce[modal] = this.close;

    return;
  }

  modal.close = function(id){
    if( typeof id != "string" )
      var modal = id;
    else var modal = document.getElementById(id);

    if( modal.classList.contains("active") )
      modal.classList.remove("active");

    return;
  }

  modal.toggle = function(id){
    var modal = document.getElementById(id);
    if( modal.classList.contains("active") )
      return this.open(id);

    return this.close(id);
  }

  window.modal = modal;
})();
