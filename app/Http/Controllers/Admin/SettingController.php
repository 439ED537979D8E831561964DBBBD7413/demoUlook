<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSettingRequest;
use Illuminate\Support\Facades\File;


class SettingController extends Controller {
	public function index() {
		return view( 'admin.settings.index' );
	}

	public function store( StoreSettingRequest $request ) {

		if ( $request->hasFile( 'site_icon' ) ) {
			$this->deletePictureLink( setting( 'site_icon' ) );
			$site_icon = $this->uploadPicture( $request->file( 'site_icon' ) );
			setting( [ 'site_icon' => $site_icon ] )->save();
		}

		if ( $request->hasFile( 'site_logo' ) ) {
			$this->deletePictureLink( setting( 'site_logo' ) );
			$site_logo = $this->uploadPicture( $request->file( 'site_logo' ) );
			setting( [ 'site_logo' => $site_logo ] )->save();
		}

		setting( [
			'site_name'         => $request->site_name,
			'copyright_content' => $request->copyright_content,
			'play_store_link'   => $request->play_store_link,
			'app_store_link'    => $request->app_store_link,
			'contact_email'     => $request->contact_email,
			'contact_number'    => $request->contact_number,
			'fb_app_ver'        => $request->fb_app_ver,
			'fb_app_id'         => $request->fb_app_id,
			'fb_app_secret'     => $request->fb_app_secret,
			'social_login'      => $request->social_login
		] )->save();

		return redirect()->back()->with( 'success', 'Setting save successfully.' );;

	}


	public static function uploadPicture( $picture ) {
		$file_name = time();
		$file_name .= rand();
		$file_name = sha1( $file_name );
		if ( $picture ) {
			$ext = $picture->getClientOriginalExtension();
			$picture->move( public_path() . "/uploads", $file_name . "." . $ext );
			$local_url = $file_name . "." . $ext;

			$s3_url = url( '/' ) . '/uploads/' . $local_url;

			return $s3_url;
		}

		return "";
	}


	public static function deletePicture( $picture ) {
		File::delete( public_path() . "/uploads/" . basename( $picture ) );

		return true;
	}

	public static function deletePictureLink( $picture ) {
		File::delete( $picture );

		return true;
	}

}
