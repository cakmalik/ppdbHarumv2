console.log("Reloaded");

// dom variables
var msf_getFsTag = document.getElementsByTagName("fieldset");

// declaring the active fieldset & the total fieldset count
var msf_form_nr = 0;
var fieldset = msf_getFsTag[msf_form_nr];
fieldset.className = "msf_show";

// creates and stores a number of bullets
var msf_bullet_nr = "<div class='msf_bullet'></div>";
var msf_length = msf_getFsTag.length;
for (var i = 1; i < msf_length; ++i) {
  msf_bullet_nr += "<div class='msf_bullet'></div>";
}
// injects bullets
var msf_bullet_o = document.getElementsByClassName("msf_bullet_o");
for (var i = 0; i < msf_bullet_o.length; ++i) {
  var msf_b_item = msf_bullet_o[i];
  msf_b_item.innerHTML = msf_bullet_nr;
}

// removes the first back button & the last next button
// document.getElementsByName("back")[0].className = "msf_hide";
// document.getElementsByName("next")[msf_bullet_o.length - 1].className =
//   "msf_hide";

// Makes the first dot active
var msf_bullets = document.getElementsByClassName("msf_bullet");
msf_bullets[msf_form_nr].className += " msf_bullet_active";

// Validation loop & goes to the next step
function msf_btn_next() {
  var msf_val = true;

  var msf_fs = document.querySelectorAll("fieldset")[msf_form_nr];
  var msf_fs_i_count = msf_fs.querySelectorAll("input").length;

  for (i = 0; i < msf_fs_i_count; ++i) {
    var msf_input_s = msf_fs.querySelectorAll("input")[i];
    if (msf_input_s.getAttribute("type") === "button") {
      // nothing happens
    } else {
      if (msf_input_s.value === "") {
        msf_input_s.style.backgroundColor = "pink";
        msf_val = false;
      } else {
        if (msf_val === false) {
        } else {
          msf_val = true;
          msf_input_s.style.backgroundColor = "lime";
        }
      }
    }
  }
  if (msf_val === true) {
    // goes to the next step
    var selection = msf_getFsTag[msf_form_nr];
    selection.className = "msf_hide";
    msf_form_nr = msf_form_nr + 1;
    var selection = msf_getFsTag[msf_form_nr];
    selection.className = "msf_show";
    // refreshes the bullet
    var msf_bullets_a = msf_form_nr * msf_length + msf_form_nr;
    msf_bullets[msf_bullets_a].className += " msf_bullet_active";
  }
}

// goes one step back
function msf_btn_back() {
  msf_getFsTag[msf_form_nr].className = "msf_hide";
  msf_form_nr = msf_form_nr - 1;
  msf_getFsTag[msf_form_nr].className = "msf_showhide";
}

console.log("loaded");

//date
$(function () {
  $("#tanggallahir").datepicker({
    dateFormat: "dd MM yy",
    changeMonth: true,
    changeYear: true,
  });
});
