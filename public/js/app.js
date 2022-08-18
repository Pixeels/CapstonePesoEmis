var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
//   if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}



//JavaScript for Tech Voc
var room = 1;
function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
	divtest.setAttribute("class", "form-group removeclass"+room);
	var rdiv = 'removeclass'+room;
    divtest.innerHTML = 
    '<div class="col nopadding"><div class="form-group"><div class="input-group mb-3"><span class="input-group-text" id="inputGroup-sizing-default">TRAINING/VOCATIONAL COURSE</span><input type="text" class="form-control" name="ACourse" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div></div></div><div class="col nopadding"><div class="form-group"><div class="input-group mb-3"><span class="input-group-text" id="inputGroup-sizing-default">DURATION</span><input type="text" class="form-control" name="ADuration" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div></div></div><div class="col nopadding"><div class="form-group"><div class="input-group mb-3"><span class="input-group-text" id="inputGroup-sizing-default">TRAINING/VOCATIONAL COURSE</span><input type="text" class="form-control" name="ATraIns" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div></div></div><div class="col nopadding"><div class="form-group"><div class="input-group mb-3"><span class="input-group-text" id="inputGroup-sizing-default">Certificates Received (NC I, NC II, NC II, NC IV, etc)</span><input type="text" class="form-control" name="ACertRec" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></div></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
	   $('.removeclass'+rid).remove();
   }


//asdasd
$(document).ready(function() {
  $("#add_row").on("click", function() {
      // Dynamic Rows Code
      
      // Get max row id and set new id
      var newid = 0;
      $.each($("#tab_logic tr"), function() {
          if (parseInt($(this).data("id")) > newid) {
              newid = parseInt($(this).data("id"));
          }
      });
      newid++;
      
      var tr = $("<tr></tr>", {
          id: "addr"+newid,
          "data-id": newid
      });
      
      // loop through each td and create new elements with name of newid
      $.each($("#tab_logic tbody tr:nth(0) td"), function() {
          var td;
          var cur_td = $(this);
          
          var children = cur_td.children();
          
          // add new td and element if it has a nane
          if ($(this).data("name") !== undefined) {
              td = $("<td></td>", {
                  "data-name": $(cur_td).data("name")
              });
              
              var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
              c.attr("name", $(cur_td).data("name") + newid);
              c.appendTo($(td));
              td.appendTo($(tr));
          } else {
              td = $("<td></td>", {
                  'text': $('#tab_logic tr').length
              }).appendTo($(tr));
          }
      });
      
      // add delete button and td
      /*
      $("<td></td>").append(
          $("<button class='btn btn-danger glyphicon glyphicon-remove row-remove'></button>")
              .click(function() {
                  $(this).closest("tr").remove();
              })
      ).appendTo($(tr));
      */
      
      // add the new row
      $(tr).appendTo($('#tab_logic'));
      
      $(tr).find("td button.row-remove").on("click", function() {
           $(this).closest("tr").remove();
      });
});




  // Sortable Code
  var fixHelperModified = function(e, tr) {
      var $originals = tr.children();
      var $helper = tr.clone();
  
      $helper.children().each(function(index) {
          $(this).width($originals.eq(index).width())
      });
      
      return $helper;
  };

  $(".table-sortable tbody").sortable({
      helper: fixHelperModified      
  }).disableSelection();

  $(".table-sortable thead").disableSelection();



  $("#add_row").trigger("click");
});