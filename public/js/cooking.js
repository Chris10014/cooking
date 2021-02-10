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

$("#searchRecipes").keyup(function () {
    $.getJSON("/cooking/recipes/search/" + $(this).val(), function (data) {
        window.console && console.log("resp.: " + data);

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
                    tableBody += cookbook.title + " S. " + recipe.page + "</p>";
                }

                incredients = recipe.incredients;

                if (incredients.length != 0) {
                    tableBody += "<p><details><summary>Zutaten</summary><ul>";
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
    });
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

function liveSearchForRecipes(str, divId, url) {
    // if (str.length == 0) {
    //     location.replace("/cooking/recipes/");
    //     return;
    // }

    var message = document.getElementById("message");
    message.innerHTML = ""; // Clear <div id=message>
    message.classList.remove("alert-danger"); // remove class
    message.style.display = "none";

    function showSearchResult(xmlhttp) {
        console.dir(".dir: \n" + JSON.parse(xmlhttp.responseText));
        var recipes = JSON.parse(xmlhttp.responseText);

        if (recipes.length == 0) {
            document.getElementById("recipeTable").innerHTML = ""; // Clear table
            message.innerHTML = "Suche ergab keine Treffer.";
            message.style.display = "block";
            message.classList.add("alert-danger");

            return;
        }

        var dataArray = [];

        for (var i = 0; i < recipes.length; i++) {
            var data = new Object();
            if (
                recipes[i]["recipe_image"] != null &&
                recipes[i]["recipe_image"].length > 0
            ) {
                data.Bild = "/cooking/" + recipes[i]["recipe_image"];
            } else {
                data.Bild =
                    "/cooking/storage/app/recipe_images/mealPlaceholder.jpg";
            }
            data.Rezeptname = recipes[i]["name"];
            data.Aktion = "action";
            dataArray[dataArray.length] = data;
        }

        if (dataArray.lengt > 0) {
            data = Object.keys(dataArray[0]);
        }
        var table = document.querySelector("#recipeTable");
        $("#recipeTable thead, tr>td").remove(); // Clear the tabale head and all rows in the table

        generateTable(table, dataArray);
        createTableHead(table, data, "Gericht");
    }

    // ajax(url + str, showSearchResult);
}

/**
 * Generates the header for a table
 * @param {DOM element} table DOM table element which will contain the table e.g. document.querySelector(id)
 * @param {Object} data Object with key:value pairs to generate the columns headlines e.g. Object {key: value, ...}
 */

function createTableHead(table, data) {
    var thead = table.createTHead();
    var row = thead.insertRow();
    for (let key of Object.keys(data)) {
    var th = document.createElement("th");
    var text = document.createTextNode(key);
    th.appendChild(text);
    row.appendChild(th);
    }
}

/**
 * Generates table rows
 * @param {DOM element} table DOM table element which will contain the table e.g. document.querySelector(id)
 * @param {Object array} data Array with the content of the columns e.g. Array[ 0: Object{key: value, ...}, 1: Object{key: value, ...} ...]
 * @param {str} alt default: "image" alternative text in case the table conatains an image column (optional)
 * @param {int} width default: 100 The width in px of an image in case the table conatains an image column (optional)
 */

function generateTable(table, data, alt = "image", width = 100) {
    for (var element of data) {
        var row = table.insertRow();
        for (key in element) {
            var cell = row.insertCell();

            if (
                key.toLowerCase().includes("image") ||
                key.toLowerCase().includes("img") ||
                key.toLowerCase().includes("bild") ||
                key.toLowerCase().includes("picture")
            ) {
                var img = document.createElement("img");
                img.src = element[key];
                img.alt = alt;
                img.width = width;

                cell.appendChild(img);
            } else {
                var text = document.createTextNode(element[key]);
                cell.appendChild(text);
            }
        }
    }
}

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

    var existingDiv = document.getElementById("incredientsList"); // Div for all inedients belong to the recipe (existing and new ones)

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
