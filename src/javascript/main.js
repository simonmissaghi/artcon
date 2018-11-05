var navWrapper = document.querySelector("nav");
var btnNav = document.querySelector("header");

btnNav.addEventLister('click', function() {
    console.log("hello");
navWrapper.classlist.add('open');
});
