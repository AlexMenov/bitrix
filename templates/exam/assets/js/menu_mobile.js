//jQuery
// установим обработчик события click, элементу с идентификатором top_menu_id
$('#top_menu_id').click(function(){
  var el = document.getElementById("menu_mobile");
  if(el.style.display == ''){
        el.style.display = 'block';
        document.getElementById("top_menu_mobile").style.height = '280px';
    }
    else {
        el.style.display = '';
        document.getElementById("top_menu_mobile").style.height = '';
        document.getElementsByClassName("menu_mobile_catalog")[0].style.display = '';
        document.getElementsByClassName("active")[0].style.backgroundColor = '';
        document.getElementsByClassName("active")[0].style.color = '';
    }
});

// установим обработчик события click, элементу с идентификатором catalog_menu_id
$('#catalog_menu_id').click(function(){
  var el = document.getElementsByClassName("menu_mobile_catalog")[0];
  if(el.style.display == ''){
        el.style.display = 'block';
        document.getElementById("top_menu_mobile").style.height = '440px';
        document.getElementsByClassName("active")[0].style.backgroundColor = '#ffffff';
        document.getElementsByClassName("active")[0].style.color = '#2368c5';
    }
    else {
        el.style.display = '';
        document.getElementById("top_menu_mobile").style.height = '280px';
        document.getElementsByClassName("active")[0].style.backgroundColor = '';
        document.getElementsByClassName("active")[0].style.color = '';
    }
});