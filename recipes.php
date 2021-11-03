<?

/* recipe loader for TP9 */

// this file should be called with data:
// recipes.php?recipeName=Some Recipe&recipeList=list

$name = $_GET["recipeName"]; // gets the value of the passed recipeName
$list = $_GET["recipeList"]; // gets the value of the passed recipeList

// test for the first recipe
if ($name == "Seven Layer Bars") {
	
	// test for one of 3 types of lists
	if ($list == "ingredients") {
		
		// return the ingredients file for this recipe
		include "ingredients.html";
		
	} elseif ($list == "equipment") {
		
		// return the equipment file for this recipe
		include "equipment.html";
		
	} elseif ($list == "directions") {
		
		// return the directions file for this recipe
		include "directions.html";
		
	} else {
		// return a one if the list did not match any of the above
		echo "1";
		
	}

// if not the first recipe, test for the second recipe name
} elseif ($name == "Second Recipe") {
	
	// copy the ingredients/equipment/directions if-elseif statement
	// but update the file names as appropriate

// if not the first or second recipe, test for the third recipe name
} elseif ($name == "Third Recipe") {

	// copy the ingredients/equipment/directions if-elseif statement
	// but update the file names as appropriate
	
// the recipe did not match any of the above
} else {
	
	// return a zero since the recipe did not match any of the above
	echo "0";
	
}