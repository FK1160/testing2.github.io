<script type="text/javascript">
	var b = false;
	var MenuBox = document.getElementById('MenuBox');
var List = document.getElementById('List');
MenuBox.style.display = "none";
List.style.display="block";
function showmenu(x) {
if (List.style.display=="block") {
	List.style.display="none";
	MenuBox.style.display="block";
}
else {
	MenuBox.style.display="none";
	List.style.display="block";
}
b = true;
}

function togglemenuclick() {
	  if(!b) MenuBox.style.display = 'none';
        if(!b) List.style.display = 'block';
      
}

function togglemenuclick2() {
	  if(!b) MenuBox.style.display = 'block';
  
        if(!b) List.style.display = 'none';
      
}







	var b = false;
	var PersonBox = document.getElementById('person-box');
var Arrow1 = document.getElementById('arrow1');
var Arrow2 = document.getElementById('arrow2');

PersonBox.style.display = "none";
Arrow1.style.display="block";

function showpersonbox(x) {
if (Arrow1.style.display=="block") {
	Arrow1.style.display="none";
	PersonBox.style.display="block";
	Arrow2.style.display="block";
}
else {
	PersonBox.style.display="none";
	Arrow1.style.display="block";
	Arrow2.style.display="none";
}
b = true;
}
var b = false;

	var HelpBox = document.getElementById('help-box');


HelpBox.style.display = "none";

function showhelpbox(x) {
if (HelpBox.style.display=="none") {
	HelpBox.style.display="block";
	
}
else {
	HelpBox.style.display="none";

}
b = true;
}
// for clicking outside to remove various forms below
function bodyclick() {
   
    if(!b) HelpBox.style.display = 'none';
     if(!b) PersonBox.style.display = 'none';
     if(!b) Arrow2.style.display = 'none';
     if(!b) Arrow1.style.display = 'block';


      
    b = false;
}


var b = false;
// this is to toggle display on search form
var SearchForm = document.getElementById("SearchMain");
var Offers = document.getElementById("offers");
SearchForm.style.display="none";
var inputBoxFocus = document.getElementById("inputBoxMain");
function searchform(x) {
if(SearchForm.style.display=="none") {
	SearchForm.style.display="block";
	
	// this is to autofocus the input
inputBoxFocus.focus();
}
else {
	SearchForm.style.display="none";
}
b = true;
}



var b = false;
// this is to close the search form using the left arrow icon
var SearchForm = document.getElementById("SearchMain");


function closesearchform(x) {



	SearchForm.style.display="none";
	Offers.style.opacity ="1";
b= true;
}

//this below is for clicking outside to remove searh form

function bodyclick2() {
   
      if(!b) SearchForm.style.display = 'none';
       if(!b) MenuBox.style.display = 'none';
        if(!b) List.style.display = 'block';
    b = false;
}
// this is for when the user has started typing

  let inputBox = document.querySelector('.inputBox')
      
        inputBox.addEventListener('input', function() {
            document.querySelector('#Xbtn').style.display
                    = "block";
        });
// this is for when the user clicks the"X" button on the search form

var RemoveWord = document.getElementById("inputBoxMain");

var Xbtn = document.getElementById("Xbtn");
function  RemoveWordInInput () {
RemoveWord.value = '';
Xbtn.style.display ="none";
}


</script>