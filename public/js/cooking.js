function test(text) {
    alert('pub: ' + text);
}

// Makes an AJAX call for a live search
// search word: str
// div id to diespaly the result: divId
// url for the ajax call: url

function liveSearchForItems(str, divId, url) {
    console.log(str);
    if (str.length==0) {
    document.getElementById(divId).innerHTML="";
    document.getElementById(divId).style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById(divId).innerHTML=this.responseText;
    //   document.getElementById(divId).style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET",url + str,true);
  xmlhttp.send();
}

function addIncredientToRecipe(incredientId) {
    // Read the input values
    var incredientName = document.getElementById('incredientName' + incredientId).innerHTML;
    var quantity = document.getElementById('quantity' + incredientId).value;

    var unit = document.getElementById('units' + incredientId)
    var unitOptions = unit.options;
    var selectedUnitId = unit.options[unit.selectedIndex].value; // Retreive the selected option.value
    var div = document.createElement('div');
    var rowDiv = document.createElement('div');

    // Grap the div element where to put in the incredients ... and force a new line
    var container = document.getElementById('incredientsList');
    rowDiv.id = "row" + incredientId;
    container.appendChild(rowDiv);
    // rowDiv.appendChild(document.createElement("br"));
    container = document.getElementById('row' + incredientId);

    // Create a span element with the incredient name
    div.class = "inline-block col-md-3";
    var nameField = document.createElement('span');
    nameField.innerHTML = incredientName + ": ";
    container.appendChild(div).appendChild(nameField);

    // Create the form input fields to submit them
    div.class = "inline-block col-md-3";
    var inputIncredient = document.createElement('input');
    inputIncredient.type = 'text';
    inputIncredient.name = 'incredient_ids[]';
    inputIncredient.value = incredientId;
    inputIncredient.id = "incredient" + incredientId;
    inputIncredient.setAttribute('type', 'hidden'); // Hide id
    container.appendChild(div).appendChild(inputIncredient);

    var inputQuantity = document.createElement('input');
    div.class = "inline-block col-md-2";
    inputQuantity.type = 'number';
    inputQuantity.step = '0.1';
    inputQuantity.lang = 'de';
    inputQuantity.name = 'quantities[]';
    inputQuantity.value = quantity;
    inputQuantity.id = 'quantity' + incredientId;
    container.appendChild(div).appendChild(inputQuantity);

    // Create a select menu for the units
    div.class = "inline-block col-md-2";
    var selectUnit = document.createElement('select');
    selectUnit.name = 'unit_ids[]';
    selectUnit.id = 'unit' + incredientId;
    container.appendChild(div).appendChild(selectUnit);
    // Add the options
    for(i = 0; i < unitOptions.length; i++) {
        var x = document.getElementById('unit' + incredientId);
        var option = document.createElement("option");
        option.value = unitOptions[i].value;
        if(selectedUnitId == option.value) {
            option.selected = true;
        }
        option.text = unitOptions[i].text;
        x.add(option);
    }

    // Create checkbox to mark main incredients
    // div.class = "inline-block col-md-2";
    // var checkMainIncredient = document.createElement('input');
    // checkMainIncredient.setAttribute("type", "checkbox");
    // checkMainIncredient.name = 'main_incredient[]';
    // checkMainIncredient.id = 'mainIncredient' + incredientId;
    // container.appendChild(div).appendChild(checkMainIncredient);

    // Create the removeFromList button
    div.class = "inline-block";
    var removeFromList = document.createElement('span');
    removeFromList.innerHTML = "<i class='fas fa-trash-alt'></i>";
    removeFromList.onclick = function() {removeElementById("row" + incredientId, "foundIncredients" + incredientId); };
    container.appendChild(div).appendChild(removeFromList);

    document.getElementById('foundIncredients' + incredientId).setAttribute('style','display:none');
}

function deleteIncredientFromRecipe() {
    return confirm("delete Incredient?");
}

// Removes an element from the DOM by a given id1 and show anothe hidden element by id2
function removeElementById(id1, id2) {
    document.getElementById(id1).remove();

    if(typeof id2 != "undefined") {
        document.getElementById(id2).setAttribute('style','display:true');
    }

}

// Does an element exist
function existsElementWithId(id) {

    var element = document.getElementById(id);
    if(typeof element != "undefined" && element != null) {
        return true;
    } else {
        return false;
    }

}
