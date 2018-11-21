var navWrapper = document.querySelector(".nav");
var btnNav = document.querySelector("#header");
var btnClose = document.querySelector(".close");

console.log(navWrapper);

btnNav.addEventListener('click', function() {
    document.querySelector(".nav").classList.add('open');

});

btnClose.addEventListener('click', function() {
    document.querySelector(".nav").classList.remove('open');

});

function simulateBtn() {

    var btnImgWrapper = document.querySelector('.btn_add-img');
    var addImg = document.querySelector('input[type="file"]');

    btnImgWrapper.addEventListener('click', function() {
        addImg.click();
        console.log('jemmp');
    });
}

if(document.querySelector('.btn_add-img')) { simulateBtn(); }


$(function(){

    $.fn.extend({
        disableSelection: function() {
            this.each(function() {
                this.onselectstart = function() {
                    return false;
                };
                this.unselectable = "on";
                $(this).css('-moz-user-select', 'none');
                $(this).css('-webkit-user-select', 'none');
            });
            return this;
        }
    });

    $('.notSelectable').disableSelection();
    $(window).bind( 'orientationchange', function(e){
        e.preventDefault();
    });


    $('body').each(function(){
      $( this ).bind( "taphold", tapholdHandler );
      function tapholdHandler( event ){
        var infoWrapper = $(".imgwrapper").siblings().children().children().children('.no-visible');
        $(infoWrapper).addClass('visible');
        $(".genericInfo").addClass('hide');
    };
    $( this ).bind( "tapend", tapoutHandler );
    function tapoutHandler( event ){
        var liInfo = $(".imgwrapper").siblings().children().children().children('.no-visible');
        $(liInfo).removeClass('visible');
        $(".genericInfo").removeClass('hide');
    };

});

    $('.warning').each(function() {
        $('.warning:empty').hide();

        return true;
    });
});



window.addEventListener('resize', function(){
    var currentWidth = window.innerWidth;
    if(currentWidth > 768) {
        var messageWrapper = document.querySelector('.use-on-mobile');
        messageWrapper.classList.remove('hide');
        messageWrapper.classList.add('visible');
    }else {
        var messageWrapper = document.querySelector('.use-on-mobile');
        messageWrapper.classList.remove('hide');
        messageWrapper.classList.add('visible');
        $(".genericInfo").removeClass('hide');
    }

});

function showMessage() {
    if(document.querySelector(".message span").innerHTML === "") {document.querySelector(".message").display = "none"}
}

showMessage();

function warning() {
    var wrapperWarning = document.querySelector('.warning');

    for(var i = 0; i < wrapperWarning.length; i++) {
        if(wrapperWarning[i].innerHTML.indexOf(' ') != -1) {
            wrapperWarning[i].style.display = "block";
        }else {
            wrapperWarning[i].style.display = "none";
        }

    }
}
if( document.querySelector('.warning')) {
    warning();

}

function previewFile() {
  var preview = document.querySelector('.imgwrapper');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();
  var text = document.querySelector('p.text-img');
  reader.onloadend = function () {
    preview.style.backgroundImage = 'url("' + reader.result +'")';
}

if (file) {
    reader.readAsDataURL(file);
    text.style.display ="none";
} else {
    preview.src = "";
}
}


