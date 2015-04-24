<?php

class FollowersController extends \BaseController {

	/**
	 * Follow a user.
	 *
	 * @return Response
	 */
	public function store()
	{
		// id of the user to follow
        // id of the authenticated user
        $input = array_add(Input::get(), 'userId', Auth::id());
        $this->execute(FollowUserCommand::class, $input);
	}


	/**
	 * Unfollow a user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
