<?php
	/* HTML Form Utilities
	* Copyright (C) DeRemee Systems, IXE Electronics LLC
	* Portions copyright IXE Electronics LLC, Republic Robotics, FemtoLaunch, FemtoSat, FemtoTrack, Weland
	* This work is made available under the Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License.
	* To view a copy of this license, visit http://creativecommons.org/licenses/by-nc-sa/4.0/.
	*/
	class HTMLForm{
		private $ActionURL = "";
		private $Autocomplete = "";
		private	$CharacterSet = "";
		private $Element = array[];
		private $EncodingType = "";
		private $FormName = "";
		private $HTTPMethod = "post";
		private $Validate = "";
		private $Relationship = "";
		private $Target = "_self";
		
		function HTML(){
			$HTML = "<form ";
			if($this->ActionURL != ""){
				$HTML .= '<action = "' . $this->ActionURL . '"';
				if($this->HTTPMethod != ""){
					$HTML .= ' method = "' . $this->HTTPMethod . '"';
				}
				$HTML .= ">";
			}
			foreach($this->Element as $Entry){
				$HTML .= $Entry->HTML();
			}
			$HTML .= "</form>";
			return $HTML;
		}
		function ElementAdd($ElementObject){
			array_push($this->$Element, $ElementObject);
		}
		function ElementRemove($ElementObject){
			$Index = array_search($this->Element, $ElementObject);
			if($Index !== false){
				unset($this->Element[$Index]);
				return true;
			}
			return false;
		}
	}
?>
