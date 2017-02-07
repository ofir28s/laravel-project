<?php

function flash($message, $level = 'info', $close = false)
{
	Session()->flash('flash_message', $message);
	Session()->flash('flash_message_level', $level);
	Session()->flash('flash_message_close', $close);
}