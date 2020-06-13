<?php namespace Hampel\HideSignatures;

class Listener
{
	public static function visitorSetup(\XF\Entity\User &$visitor)
	{
		if (!$visitor->hasPermission('general', 'hampelHideSignatures'))
		{
			// if the user can't hide their signature, then always show it
			$visitor->Option->content_show_signature = true;
		}
	}
}
