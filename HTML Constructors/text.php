<?php
	/* HTML Text Utilities
	* Copyright (C) DeRemee Systems, IXE Electronics LLC
	* Portions copyright IXE Electronics LLC, Republic Robotics, FemtoLaunch, FemtoSat, FemtoTrack, Weland
	* This work is made available under the Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License.
	* To view a copy of this license, visit http://creativecommons.org/licenses/by-nc-sa/4.0/.
	*/
	class HTMLText{
		private $Bold = "";
		private $Deleted = "";
		private $Emphasized = "";
		private $Italic = "";
		private $Inserted = "";
		private $Marked = "";
		private $Small = "";
		private $Strong = "";
		private $Subscript = "";
		private $Superscript = "";
		private $Text = "";
		
		function HTML(){
			$HTML = "";
			if($this->Bold){
				$HTML .= "<b>";
			}
			if($this->Deleted){
				$HTML .= "<del>";
			}
			if($this->Emphasized){
				$HTML .= "<em>";
			}
			if($this->Italic){
				$HTML .= "<i>";
			}
			if($this->Inserted){
				$HTML .= "<ins>";
			}
			if($this->Marked){
				$HTML .= "<mark>";
			}
			if($this->Small){
				$HTML .= "<small>";
			}
			if($this->Strong){
				$HTML .= "<strong>";
			}
			if($this->Subscript){
				$HTML .= "<sub>";
			}
			if($this->Superscript){
				$HTML .= "<sup>";
			}
			$HTML .= $this->Text;
			if($this->Bold){
				$HTML .= "</b>";
			}
			if($this->Deleted){
				$HTML .= "</del>";
			}
			if($this->Emphasized){
				$HTML .= "</em>";
			}
			if($this->Italic){
				$HTML .= "</i>";
			}
			if($this->Inserted){
				$HTML .= "</ins>";
			}
			if($this->Marked){
				$HTML .= "</mark>";
			}
			if($this->Small){
				$HTML .= "</small>";
			}
			if($this->Strong){
				$HTML .= "</strong>";
			}
			if($this->Subscript){
				$HTML .= "</sub>";
			}
			if($this->Superscript){
				$HTML .= "</sup>";
			}
			return $HTML;
		}
		function Append($TextString){
			$this->Text .= $TextString;
		}
		function Text($TextString){
			$this->Text = $TextString;
		}
		function Bold($Flag){
			$this->Bold = $Flag;
		}
		function Deleted($Flag){
			$this->Deleted = $Flag;
		}
		function Emphasized($Flag){
			$this->Emphasized = $Flag;
		}
		function Italic($Flag){
			$this->Italic = $Flag;
		}
		function Inserted($Flag){
			$this->Inserted = $Flag;
		}
		function Marked($Flag){
			$this->Marked = $Flag;
		}
		function Small($Flag){
			$this->Small = $Flag;
		}
		function Strong($Flag){
			$this->Strong = $Flag;
		}
		function Subscript($Flag){
			$this->Subscript = $Flag;
		}
		function Superscript($Flag){
			$this->Superscript = $Flag;
		}
	}
?>
