<?php
	/* HTML Input Utility
	* Copyright (C) DeRemee Systems, IXE Electronics LLC
	* Portions copyright IXE Electronics LLC, Republic Robotics, FemtoLaunch, FemtoSat, FemtoTrack, Weland
	* This work is made available under the Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License.
	* To view a copy of this license, visit http://creativecommons.org/licenses/by-nc-sa/4.0/.
	*/
	class HTMLInput{
		private $AltText = "";
		private $AutoComplete = false;
		private $AutoFocus = false;
		private $ButtonImage = "";
		private $Checked = false;
		private $Disabled = false;
		private $DisplaySize = "";
		private $EncodingType = "";
		private $EventTarget = "";
		private $EventType = "";
		private $Form = "";
		private $FileFilter = [];
		private $GlobalAttribs = "";
		private $ID = "";
		private $ImageHeight = "";
		private $ImageSource = "";
		private $ImageWidth = "";
		private $InputStep = "";
		private $LengthMax = "";
		private $List = "";
		private $MultipleEnable = false;
		private $Name = "";
		private $Parent = "";
		private $PixelWidth = "";
		private $Placeholder = "";
		private $ReadOnly = false;
		private $RegEx = "";
		private $Required = false;
		private $SubmitMethod = "";
		private $SubmitURL = "";
		private $Target = "";
		private $TextDirection = false;
		private $Type = "";
		private $Validate = false;
		private $Value = "";
		private $ValueMax = "";
		private $ValueMin = "";
		
		function HTML(){
        	$HTML = "";
			if($this->Type != ""){
				$HTML .= '<input type = "' . $this->Type . '"';
				if($this->ID != ""){
					$HTML .= ' id = "' . $this->ID . '"';
				}
				if($this->Type === "file"){
					//Write the file filter
					if($this->FileFilter.length != 0){
						$HTML .= ' accept = "';
						for($i = 0; $i < $this->FileFilter.length; $i++){
							if(i === 0){
								$HTML .= $this->FileFilter[0];
							} else {
								$HTML .= ", " . $this->FileFilter[$i];
							}
						}
						$HTML .= '"';
					}
				}
				if($this->Type === "email" || $this->Type === "file"){
					if($this->MultipleEnable === true){
						$HTML .= " multiple";
					}
				}
				if($this->Type === "image"){
					//Write image attributes
					if($this->AltText != ""){
						$HTML .= ' alt = "' . $this->AltText . '"';
					}
					if($this->ImageHeight != ""){
						$HTML .= ' height = "' . $this->ImageHeight . '"';
					}
					if($this->ImageSource != ""){
						$HTML .= ' src = "' . $this->ImageSource . '"';
					}
					if($this->ImageWidth != ""){
						$HTML .= ' width = "' . $this->ImageWidth . '"';
					}
				}
				//Write autocomplete attributes
				if($this->Type === "color" ||
					$this->Type === "date" ||
					$this->Type === "datetime-local" ||
					$this->Type === "email" ||
					$this->Type === "password" ||
					$this->Type === "range" ||
					$this->Type === "search" ||
					$this->Type === "tel" ||
					$this->Type === "text" ||
					$this->Type === "url"){
					if($this->AutoComplete === true){
						$HTML .= ' autocomplete = "on"';
					} else {
						$HTML .= ' autocomplete = "off"';
					}
				}
				//Write min/max value attributes
				if($this->Type === "date" ||
					$this->Type === "datetime" ||
					$this->Type === "datetime-local" ||
					$this->Type === "month" ||
					$this->Type === "number" ||
					$this->Type === "range" ||
					$this->Type === "time" ||
					$this->Type === "week"){
					if($this->InputStep != ""){
						$HTML .= ' step = "' . $this->InputStep . '"';
					}
					if($this->ValueMin != ""){
						$HTML .= ' min = "' . $this->ValueMin . '"';
					}
					if($this->ValueMax != ""){
						$HTML .= ' max = "' . $this->ValueMax . '"';
					}
				}
				//Write submit/image attributes
				if($this->Type === "image" || $this->Type === "submit"){
					if($this->SubmitMethod != ""){
						$HTML .= ' formmethod ="' . $this->SubmitMethod . '"';
					}
					if($this->SubmitURL != ""){
						$HTML .= ' formaction ="' . $this->SubmitURL . '"';
					}
					if($this->EncodingType != ""){
						$HTML .= ' formenctype ="' . $this->EncodingType . '"';
					}
					if($this->Target != ""){
						$HTML .= ' formtarget ="' . $this->Target . '"';
					}
				}
				if($this->Type === "checkbox" || $this->Type === "radio"){
					if($this->Checked != false){
						$HTML .= " checked";
					}
				}
				//Write remaining attributes
				if($this->AutoFocus === true){
					$HTML .= " autofocus";
				}
				if($this->Name != ""){
					$HTML .= ' name ="' . $this->Name . '"';
					if($this->TextDirection === true){
						$HTML .= ' dirname = "' . $this->Name . '.dir"'; 
					}
				}
				if($this->Disabled === true){
					$HTML .= " disabled";
				}
				if($this->Form != "") {
					$HTML .= ' form = "' . $this->Form . '"';
				}
				if($this->List != ""){
					$HTML .= ' list = "' . $this->List . '"';
				}
				if($this->Type === "date" || $this->Type === "email" || $this->Type === "password" || $this->Type === "search" || $this->Type === "tel" || $this->Type === "text" || $this->Type === "url"){
					if($this->RegEx != ""){
						$HTML .= ' pattern = "' . $this->RegEx . '"';
					}
				}
				if($this->Type === "email" || $this->Type === "password" || $this->Type === "search" || $this->Type === "tel" || $this->Type === "text" || $this->Type === "url"){
					if($this->Placeholder != ""){
						$HTML .= ' placeholder = "' . $this->Placeholder . '"';
					}
				}
				if($this->ReadOnly === true){
					$HTML .= " readonly";
				}
				if($this->Type === "checkbox" ||
					$this->Type === "date" ||
					$this->Type === "datetime-local" ||
					$this->Type === "email" ||
					$this->Type === "file" ||
					$this->Type === "password" ||
					$this->Type === "radio" ||
					$this->Type === "search" ||
					$this->Type === "tel" ||
					$this->Type === "text" ||
					$this->Type === "url"){
					if($this->Required === true){
						$HTML .= " required";
					}
				}
				if($this->Type != "file" && $this->Value != ""){
					$HTML .= ' value = "' . $this->Value . '"';
				}
				if($this->EventType != "" && $this->EventTarget != ""){
					$HTML .= " " . $this->EventType . ' = "' . $this->EventTarget . '"';
				}
			}
            $HTML .= ">";
			return $HTML;
		}
		function AltText($Text){
			$this->AltText = $Text;
		}
		function AutoCompleteDisable(){
			$this->AutoComplete = false;
		}
		function AutoCompleteEnable(){
			$this->AutoComplete = true;
		}
		function AutoFocusDisable(){
			$this->AutoFocus = false;
		}
		function AutoFocusEnable(){
			$this->AutoFocus = true;
		}
		function ButtonImage($URL){
			$this->ButtonImage = $URL;
		}
		function Checked(){
			$this->Checked = true;
		}
		function Disable(){
			$this->Disabled = true;
		}
		function Enable(){
			$this->Disabled = false;
		}
		function DisplaySize($Value){
			$this->DisplaySize = $Value;
		}
		function EncodingTypeApplication(){
			$this->EncodingType = "application/x-www-form-urlencoded";
		}
		function EncodingTypeMultipart(){
			$this->EncodingType = "multipart/form-data";
		}
		function EncodingTypeText(){
			$this->EncodingType = "text/plain";
		}
		function EventTarget($Handler){
			$this->EventTarget = $Handler;
		}
		function EventType($Event){
			$this->EventType = $Event;
		}
		function Form($ID){
			$this->Form = $ID;
		}
		function FileFilterAdd($Extension){
			if($Extension != ""){
				for($i = 0; $i < $this->FileFilter.length; $i++){
					if($this->FileFilter === $Extension){
						return;
					}
				}
				$this->FileFilter.push($Extension);
			}
		}
		function FileFilterClear(){
			$this->FileFilter = [];
		}
		function FileFilterDelete($Extension){
			if($Extension != ""){
				for($i = 0; $i < $this->FileFilter.length; $i++){
					if($this->FileFilter === $Extension){
						\array_splice($this->FileFilter, i, 1);
					}
				}
			}
		}
		function GlobalAttribs($Object){
			$this->GlobalAttribs = $Object;
		}
		function ID($ID){
			$this->ID = $ID;
		}
		function ImageHeight($Value){
			$this->ImageHeight = $Value;
		}
		function ImageWidth($Value){
			$this->ImageWidth = $Value;
		}
		function InputStep($Value){
			$this->InputStep = $Value;
		}
		function LengthMax($Value){
			$this->LengthMax = $Value;
		}
		function List($ID){
			$this->List = $ID;
		}
		function MultipleDisable(){
			$this->MultipleEnable = false;
		}
		function MultipleEnable(){
			$this->MultipleEnable = false;
		}
		function Name($Name){
			$this->Name = $Name;
		}
		function NotRequired(){
			$this->Required = false;
		}
		function Parent($Object){
			$this->Parent = $Object;
		}
		function PixelWidth($Value){
			$this->PixelWidth = $Value;
		}
		function PlaceHolder($Text){
			$this->Placeholder = $Text;
		}
		function ReadOnly(){
			$this->ReadOnly = true;
		}
		function ReadWrite(){
			$this->ReadOnly = false;
		}
		function RegEx($Expression){
			$this->RegEx = $Expression;
		}
		function Required(){
			$this->Required = true;
		}
		function SubmitMethodfunction(){
			$this->SubmitMethod = "function";
		}
		function SubmitMethodPost(){
			$this->SubmitMethod = "post";
		}
		function SubmitURL($URL){
			$this->SubmitURL = $URL;
		}
		function Target($Frame){
			$this->Target = $Frame;
		}
		function TargetBlank(){
			$this->Target = "_blank";
		}
		function TargetParent(){
			$this->Target = "_parent";
		}
		function TargetSelf(){
			$this->Target = "_self";
		}
		function TargetTop(){
			$this->Target = "_top";
		}
		function TextDirectionDisable(){
			$this->TextDirection = false;
		}
		function TextDirectionEnable(){
			$this->TextDirection = true;
		}
		function ButtonImageURL($URL){
			$this->ButtonImageURL = $URL;
		}
		function TypeButton(){
			$this->Type = "button";
		}
		function TypeCheckbox(){
			$this->Type = "checkbox";
		}
		function TypeColor(){
			$this->Type = "color";
		}
		function TypeDate(){
			$this->Type = "date";
		}
		function TypeDateTime(){
			$this->Type = "datetime-local";
		}
		function TypeEmail(){
			$this->Type = "email";
		}
		function TypeFile(){
			$this->Type = "file";
		}
		function TypeHidden(){
			$this->Type = "hidden";
		}
		function TypeImage(){
			$this->Type = "image";
		}
		function TypeMonth(){
			$this->Type = "month";
		}
		function TypeNumber(){
			$this->Type = "number";
		}
		function TypePassword(){
			$this->Type = "password";
		}
		function TypeRadio(){
			$this->Type = "radio";
		}
		function TypeRange(){
			$this->Type = "range";
		}
		function TypeRefunction(){
			$this->Type = "refunction";
		}
		function TypeSearch(){
			$this->Type = "search";
		}
		function TypeSubmit(){
			$this->Type = "submit";
		}
		function TypeTelephone(){
			$this->Type = "tel";
		}
		function TypeText(){
			$this->Type = "text";
		}
		function TypeTime(){
			$this->Type = "time";
		}
		function TypeURL(){
			$this->Type = "url";
		}
		function TypeWeek(){
			$this->Type = "week";
		}
		function Unchecked(){
			$this->Checked = false;
		}
		function ValidateDisable(){
			$this->Validate = false;
		}
		function ValidateEnable(){
			$this->Validate = true;
		}
		function Value($Value){
			$this->Value = $Value;
		}
		function ValueMax($Value){
			$this->ValueMax = $Value;
		}
		function ValueMin($Value){
			$this->ValueMin = $Value;
		}
	}
?>
