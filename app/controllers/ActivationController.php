<?php 

class ActivationController extends BaseController {

	public function asAdmin($id)
	{
		$user = User::find($id);

		$user->user_type = 'admin';

		$user->save();

		return Redirect::to('admin');
	}

	public function asTutor($id)
	{
		$user = User::find($id);

		$user->user_type = 'tutor';

		$user->save();

		return Redirect::to('admin');
	}

	public function asCoord($id)
	{
		$user = User::find($id);

		$user->user_type = 'coord';

		$user->save();

		return Redirect::to('admin');
	}

	public function deactivate($id)
	{
		$user = User::find($id);

		$user->user_type = 'ninguno';

		$user->save();

		return Redirect::to('admin');
	}

}