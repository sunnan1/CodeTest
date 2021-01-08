<?php

class helper
{

	public function admin()
	{
		return env('ADMIN_ROLE_ID')
	}
	public function superadmin()
	{
		return env('SUPERADMIN_ROLE_ID')
	}
	public function adminemail()
	{
		return config('app.adminemail')
	}
}


?>