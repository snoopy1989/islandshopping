<?php
interface IApplicationState {
   	function init();
	function endState();
	function getApplicationStateType();
}

?>