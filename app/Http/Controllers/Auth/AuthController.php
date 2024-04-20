<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Libraries\General;
use App\Models\Admin\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class AuthController extends Controller {
	/**
	 * Register the user for matrimonial.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function register(Request $request)
	{
		if($request->isMethod('post')){
    		$data = $request->toArray();
			$validator = Validator::make(
	            $request->toArray(),
	            [
					'email' => ['required', 'email', Rule::unique(Users::class, 'email')],
					'phonenumber' => ['required', Rule::unique(Users::class, 'phonenumber')],
					'password' => [
						'required', 'string',
						Password::min(8)->mixedCase()->numbers()->symbols(), 'max:36',
					],
					'password_confirmation' => ['required', 'same:password'],
					'first_name' => ['required', 'string', 'max:30'],
	            ]
	        );
			if(!$validator->fails())
	        {
				unset($data['password_confirmation']);
				unset($data['_token']);
				$nameParts = explode(' ', $data['first_name']);
				$firstName = $nameParts[0];
				$lastName = implode(' ', array_slice($nameParts, 1));
				$data['first_name'] = ucfirst(strtolower($firstName));
				$data['last_name'] = ucfirst(strtolower($lastName));
				$data['token'] = General::hash();
				$user = Users::create($data);
				if($user)
				{
					// $verificationUrl = route('home', ['token' => $data['token']]);
					$codes = [
						'{name}' => $user->first_name . ' ' . $user->last_name,
						'{email}' => $user->email,
						// '{verification_link}' => General::urlToAnchor($verificationUrl)
					];
					$emails = [$data['email']];
					General::sendTemplateEmail($emails, 'registration', $codes);
					return response()->json([
						'status' => true,
						'message' => trans('REGISTER_SUCCESSFULL'),
						'email' => $user->email,
						'user_id' => $user->id
					], Response::HTTP_OK);
				}
				else
				{
					return Response()->json([
						'status' => false,
						'message' => "User could not be registered."
					], Response::HTTP_OK);
				}
			} else {
				$errors = current(current($validator->errors()->toArray()));
				return Response()->json([
					'status' => false,
					'message' => $errors
				], Response::HTTP_OK);
			}
		}
		else
		{
			$user = $request->session()->get('user');
			if($user) {
				return redirect('/my-account');
			}
		}
		return view('frontend.auth.auth');
	}

	/**
	 * User login for matrimonial.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function login(Request $request)
	{
		$data = $request->toArray();
		$validator = Validator::make(
			$data,
			[
				'email' => [
					'required', 'bail', 'string', 'max:255', 'email',
					Rule::exists(Users::class, 'email')
				],
				'password' => ['required', 'string']
			],
			[
				'email.exists' => 'This email is not registered with us.',
			]
		);
		if(!$validator->fails())
		{
			$user = Users::whereEmail($data['email'])->where('status', 1)->first();
			$password = $data['password'];
			if (!$user || !Hash::check($password, $user->password)) {
				$errors = trans('INVALID_CREDENTIALS');
				return response()->json(['status' => false, 'message' => $errors], Response::HTTP_UNAUTHORIZED);
			}
			
			Users::whereEmail($data['email'])->update([
				'last_login' => date('Y-m-d H:i:s')
			]);
			$request->session()->put('user', $user);
			
			return response()->json([
				'status' => true,
				'message' => 'Login successfully.',
				'email' => $user->email,
				'name' => $user->first_name . ' ' . $user->last_name,
				'user_id' => $user->id
			], Response::HTTP_OK);
		}
		else {
			$errors = current(current($validator->errors()->toArray()));
			return Response()->json([
				'status' => false,
				'message' => $errors
			], Response::HTTP_OK);
		}
	}

	function forgotPassword(Request $request)
    {
    	if($request->isMethod('post'))
    	{
			$data = $request->toArray();
			$validator = Validator::make(
				$data,
				[
					'email' => [
						'required', 'bail', 'string', 'max:255', 'email',
						Rule::exists(Users::class, 'email')
					]
				]
			);
			if(!$validator->fails())
			{
				$user = Users::where('email', $data['email'])->first();
				$otp = mt_rand(100000, 999999);
				$user->otp = $otp;
				$user->token = General::hash();
				$user->save();
				if($user->save()){
					$codes = [
						'{first_name}' => $user->first_name,
						'{last_name}' => $user->last_name,
						'{email}' => $user->email,
						'{otp}' => $user->otp,
						'{recovery_link}' => General::urlToAnchor(route('user.otpVerify', ['hash' => $user->token]))
					];

					try
					{
						General::sendTemplateEmail(
							$user->email, 
							'user-forgot-password',
							$codes
						);
					}
					catch(\Exception $e)
					{
						
					}

					return Response()->json([
						'status' => true,
						'message' => 'We have sent you a recovery link on your email. Please follow the email.'
					], Response::HTTP_OK);	
				}	
				else
				{
					return Response()->json([
						'status' => false,
						'message' => 'Something went wrong. Please try again.'
					], Response::HTTP_OK);
				}
			}
			else {
				$errors = $validator->errors()->toArray();
				return Response()->json([
					'status' => false,
					'message' => current(current($errors))
				], Response::HTTP_OK);
			}
	    }
		return view('frontend.auth.forgotPassword');
    }
	
	/**
	 * Remove the specified resource
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function logout(Request $request) {
		$request->session()->flush();
		return redirect('/');
	}

	/**
	 * Update user password.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\JsonResponse
	 */
	public function updatePassword(Request $request) {
		$user = $request->session()->get('user');
		if($user && $user->id)
		{
			$data = $request->toArray();
			$validator = Validator::make($data, [
				'current_password' => ['required', 'string'],
				'new_password' => [
					'required', 'string',
					Password::min(8)->mixedCase()->numbers()->symbols(), 'max:36'
				],
				'confirmed_password' => ['required', 'same:new_password'],
			]);
			if(!$validator->fails())
			{
				$user = Users::where('id', $user->id)->first();
				$password = $data['current_password'];

				if (!$user || $data['current_password'] != Hash::check($password, $user->password)) {
					$request->session()->flash( 'error', "Your current password does not match." );
					return redirect()->back()->withErrors($validator)->withInput();
				}

				$user->password = $data['new_password'];
				if($user->save())
				{
					$request->session()->flash('success', 'Password updated.');
		    		return redirect()->back();	
				}
				else
				{
					$request->session()->flash('error', 'Password could not be change. Please try again.');
		    		return redirect()->back()->withErrors($validator)->withInput();	
				}
			}
			else
			{
				$request->session()->flash('error', 'Password could not be change. Please fix the errors below.');
		    	return redirect()->back()->withErrors($validator)->withInput();
			}
		}
		else
		{
			return redirect('/login');
		}
	}
	
    function otpVerify(Request $request, $hash)
    {
    	$user = Users::getRow([
    			'token like ?' => [$hash]
    		]);
    	if($user)
    	{
	    	if($request->isMethod('post'))
	    	{
	    		$data = $request->toArray();
	            $validator = Validator::make(
		            $request->toArray(),
		            [
		                'otp' => [
		                	'required',
						    'numeric'
		                ],
		            ]
		        );
		        if(!$validator->fails())
		        {
		        	unset($data['_token']);
					if ($user->otp == $data['otp']) {
						return Response()->json([
							'status' => true,
							'message' => 'OTP Verified.'
						], Response::HTTP_OK);	
					} else {

						$errors = ['otp' => ['Incorrect OTP. Please try again.']];
						return response()->json(['status' => false, 'message' => $errors], Response::HTTP_UNAUTHORIZED);
					}
			    }
			    else
			    {
					$errors = $validator->errors()->toArray();
					return Response()->json([
						'status' => false,
						'message' => $errors
					], Response::HTTP_OK);
			    }
			}
			return view("frontend.auth.verifyOtp");
		}
		else
		{
			abort(404);
		}
    }

    function recoverPassword(Request $request, $hash)
    {
    	$user = Users::getRow([
    			'token like ?' => [$hash]
    		]);
    	if($user)
    	{
	    	if($request->isMethod('post'))
	    	{
	    		$data = $request->toArray();
	            $validator = Validator::make(
		            $request->toArray(),
		            [
		                'new_password' => [
		                	'required',
						    'string',
							Password::min(8)->mixedCase()->numbers()->symbols(), 'max:36'
		                ],
		                'confirm_password' => [
		                	'required',
						    'same:new_password'
		                ]
		            ]
		        );
		        if(!$validator->fails())
		        {
		        	unset($data['_token']);
	        			$user->password = $data['new_password'];
	        			$user->token = null;
	        			if($user->save())
	        			{
							return Response()->json([
								'status' => true,
								'message' => 'Password updated successfully. Login with new credentials to proceed.'
							], Response::HTTP_OK);
	        			}
	        			else
	        			{
							return Response()->json([
								'status' => false,
								'message' => 'New password could be updated.'
							], Response::HTTP_OK);			
	        			}
			    }
			    else
			    {
					return Response()->json([
						'status' => false,
						'message' => $validator->errors()->toArray()
					], Response::HTTP_OK);
			    }
			}
			return view("frontend.auth.recoverPassword");
		}
		else
		{
			abort(404);
		}
    }
}
