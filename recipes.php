<?

/* recipe loader for TP9 */

$name = $_GET["recipeName"];

$list = $_GET["recipeList"];

if ($name == "Seven Layer Bars") {
	
	if ($list == "ingredients") {
		include "ingredients.html";
		
	} elseif ($list == "equipment") {
		include "equipment.html";
		
	} elseif ($list == "directions") {
		include "directions.html";
		
	} else {
		echo "1";
		
	}
	
} elseif ($name == "Second Recipe") {
	

} elseif ($name == "Third Recipe") {

	
} else {
	
	echo "0";
	
}