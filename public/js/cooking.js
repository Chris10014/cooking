function test(text) {
    alert("Test was sucessful: " + text);
}

/**
 *
 * @param {int} id id to check if an element wth this id exists
 * @returns {boolean} true || false
 */
function existsElementWithId(id) {
    var element = document.getElementById(id);
    if (typeof element != "undefined" && element != null) {
        return true;
    } else {
        return false;
    }
}

/**
 * Makes an ajax call to modify the DOM without page load
 * @param {str} url
 * @param {function} cFunction
 * @param {str} method GET || PUSH optional, default = GET
 * @returns {} output of the called site
 */

function ajax(url, cFunction, method = "GET") {

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.open(method, url, true);
    xmlhttp.send();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            cFunction(this);
        }
    };
}

/**
 * jQuery getJSON
 * Search for recipes as jQuery function
 *
 */
$("#searchRecipes, #searchDishType").on('change keyup', function () {
    $.getJSON(
        "/cooking/recipes/search/" + $("#searchRecipes").val() + "/" + $("#searchDishType").val(), function (data) {

            $("#recipeTableBody").empty();
            $("#message").hide().removeClass("alert alert-danger").html("");

            if (typeof data == "object") {
                var recipes = data;
                for (i = 0; i < recipes.length; i++) {
                    var recipe = recipes[i];
                    $.each(recipe, function (key, val) {
                        window.console &&
                            console.log("key: " + key + " val: " + val + "\n");
                    });
                }
                var tableBody = "";
                for (i = 0; i < recipes.length; i++) {
                    recipe = recipes[i];
                    dishType = recipe.dish_type;
                    cookbook = recipe.cookbook;
                    tableBody +=
                        '<tr><td> \
                <img src="/cooking/' +
                        recipe.recipe_image +
                        '" onerror=src="/cooking/storage/app/recipe_images/mealPlaceholder.jpg" alt="Gericht" width="100"></td>';
                    tableBody +=
                        '<td><p><span><i class="' +
                        dishType.glyphicon_fontawesome +
                        '" ></i></span>' +
                        " " +
                        recipe.name +
                        " ";

                    if (cookbook !== null) {
                        tableBody +=
                            cookbook.title + " S. " + recipe.page + "</p>";
                    }

                    incredients = recipe.incredients;
                    if (incredients.length != 0) {
                        tableBody +=
                            "<p><details><summary>Zutaten</summary><ul>";
                        for (k = 0; k < incredients.length; k++) {
                            tableBody +=
                                "<li>" + incredients[k].incredient_de + "</li>";
                        }
                        tableBody += "</ul></details></p>";
                    } else {
                        tableBody += "<i>keine Zutaten eingetragen</i>";
                    }
                    tableBody +=
                        '</td><td><a href="/cooking/recipes/' +
                        recipe.id +
                        '/edit"><span><i class="fas fa-pen"></i></span></a></td></tr>';
                }

                $("#recipeTableBody").append(tableBody);
            } else {
                $("#message")
                    .addClass("alert alert-danger")
                    .html("<p>Keine passenden Ergebnisse gefunden.</p>")
                    .show();
            }
        }
    );
});


/**
 *
 * @param {str} tableId id if the table
 * @param {int} cells number of cells in the row
 * @param {array} content content for each cell in an array
 *
 * @returns {} adds a new row with cells at the end of to the <table id="id">
 */
function addRowToTable(tableId, cells, content) {
    var tbl = document.getElementById(tableId);
    var newRow = tbl.insertRow();
    for (var i = 0; i < cells; i++) {
        var newCell = newRow.insertCell(i);
            newCell.innerHTML = content[i];
    }
}

/* ====================== special functions ======================================= */

/**
 *
 * @param {str} str string to search for
 * @param {str} divId id to display the search result
 * @param {str} url address to the search method /address/.../search.php
 * @returns {str} html html code with dearch result to add it to divId element
 */

function liveSearchForItems(str, divId, url) {

    if (str.length == 0) {
        str = '%';
    }
    function showSearchResult(xmlhttp) {
        document.getElementById(divId).innerHTML = xmlhttp.responseText;
    }
    ajax(url + str, showSearchResult);
}

/**
 * Validate recipe forms (create and edit) in the browser
 */
 $(document).ready(function() {
     $("#recipeForm").validate({
         // Place error message below radio button blocks
         errorPlacement: function(error, element) {
             error.css({display: 'block'});
             error.appendTo(element.parent());
             },
         errorClass: "alert alert-danger",
         rules: {
             name: { required: true, minlength: 5 },
             preparation_time: { number: true },
             page: { number: true,
                required: { depends: function(element) {
                    var val = $('#cookbook').val() !== '';
                    return val;
                    },
                },
            },
            dish_type_id: { required: true },
         },
         // Add bootstrap alert class
         highlight: function (element, errorClass) {
             $(element.id).addClass(errorClass);
         },
     })
 })

/**
 * Adds an incredient from the search result to the incredients list
 * to add it to the recipe by update on recipe.edit
 *
 * @param {int} incredientId id of the incredient to add to the incredients list
 * @returns no value hides the element in the search result list and add it to the incredients list
 *
 */
function addIncredientToRecipe(incredientId) {
    // Read the input values
    var incredientName = document.getElementById(
        "incredientName" + incredientId
    ).innerHTML;
    var quantity = document.getElementById("quantity" + incredientId).value;
    var units = document.getElementById("units" + incredientId);
    var unitOptions = units.options;
    var selectedUnitId = units.options[units.selectedIndex].value; // Retreive the selected option.value
    var selectedUnitName = units.options[units.selectedIndex].innerHTML;

    var existingDiv = document.getElementById("incredientsList"); // Div for all incredients belong to the recipe (existing and new ones)


    // var newLine =
    //     '<div class="row" id="row' + incredentID + '"> \
    //      <div class="col-md3"><p>' + incredientName + '</p></div>';
    //     newLine +=
    //          '<input type="hidden" name="incredient_ids[]" id="incredient' + incredientId + ' value="' + incredientId + '"';
    //     newLine += '<div class="col-auto"><input type="number" step="0.1" lang="de" name="quantities []" id="quantitiy' + incredientId + '" value ="' + quantity + '"style="width:100px"></div>';
    //     newLine += '<div class="col-auto"><select name="unit_ids[]" id="unit' + incredientId + '">';

    // Create the div element for the new line
    var rowDiv = document.createElement("div");
    rowDiv.id = "row" + incredientId;
    rowDiv.className = "row";
    existingDiv.appendChild(rowDiv);

    // Create the div for the incredientName
    var incNameDiv = document.createElement("div");
    incNameDiv.id = "incredientName";
    incNameDiv.className = "col-md-3";
    rowDiv.appendChild(incNameDiv);
    // Set the incredientName into a span element
    var nameField = document.createElement("span");
    nameField.innerHTML = incredientName + ": ";
    incNameDiv.appendChild(nameField);

    // Create a hidden input element for the incredientId
    var inpIncredientId = document.createElement("input");
    inpIncredientId.name = "incredient_ids[]";
    inpIncredientId.value = incredientId;
    inpIncredientId.setAttribute("type", "hidden"); // Hide id
    rowDiv.appendChild(inpIncredientId);

    // Create the div for quantity
    var qtyDiv = document.createElement("div");
    qtyDiv.id = "quantity";
    qtyDiv.className = "col-auto";
    rowDiv.appendChild(qtyDiv);
    // Create input element
    var inpQuantity = document.createElement("input");
    inpQuantity.type = "number";
    inpQuantity.step = "0.1";
    inpQuantity.lang = "de";
    inpQuantity.name = "quantities[]";
    inpQuantity.value = quantity;
    inpQuantity.id = "quantity" + incredientId;
    qtyDiv.appendChild(inpQuantity);

    // Create the div for unit
    var unitsDiv = document.createElement("div");
    unitsDiv.id = "units";
    unitsDiv.className = "col-auto";
    rowDiv.appendChild(unitsDiv);
    // Create select element
    var slctUnit = document.createElement("select");
    slctUnit.name = "unit_ids[]";
    slctUnit.id = "unit" + incredientId;
    unitsDiv.appendChild(slctUnit);
    // Add the options
    for (i = 0; i < unitOptions.length; i++) {
        var x = document.getElementById("unit" + incredientId);
        var option = document.createElement("option");
        option.value = unitOptions[i].value;
        if (selectedUnitId == option.value) {
            option.selected = true;
        }
        option.text = unitOptions[i].text;
        x.add(option);
    }

    // Create the div for remove button
    var btnDiv = document.createElement("div");
    btnDiv.id = "removeButton";
    btnDiv.className = "col-auto";
    rowDiv.appendChild(btnDiv);
    // Create the button ina span element
    var rmvBtn = document.createElement("span");
    rmvBtn.innerHTML = "<i class='fas fa-trash-alt'></i>";
    rmvBtn.onclick = function () {
        removeElementById(
            "row" + incredientId,
            "foundIncredients" + incredientId
        );
    };
    btnDiv.append(rmvBtn);

    document
        .getElementById("foundIncredients" + incredientId)
        .setAttribute("style", "display:none");
}

/**
 * Deletes an incredient from a recipe, means it is deleted from pivot table
 * @param {int} recipeId id of the current recipe
 * @param {int} incredientId id of the incredient to delete
 * @param {str} incredientName name of the incredient to delete
 * @return {} item deleted from the recipe, DOM element in view removed
 */

function deleteIncredientFromRecipe(recipeId, incredientId, incredientName) {
    // confirm or dismiss the delete action
    var result = confirm(incredientName + " aus dem Rezept löschen?");

    if (result == true) {
        var url =
            "/cooking/recipes/deleteIncredientFromRecipe/" +
            recipeId +
            "/" +
            incredientId;
        function cFunction(xmlhttp) {
            document.getElementById("row" + incredientId).remove();
        }

        ajax(url, cFunction);
    } else {
        // do nothing
    }
}

/**
 * Special function to remove slected elements from the incredients list
 * before a update of the recipe in recipe.edit.
 * @param {int} id1 id of the source element
 * @param {int} id2 id of the hidden target element
 * @returns no value, removed element id1 and display the hidden element div2
 */

function removeElementById(id1, id2 = "not used") {
    document.getElementById(id1).remove();

    if (typeof id2 != "not used") {
        document.getElementById(id2).setAttribute("style", "display:true");
    }
}
