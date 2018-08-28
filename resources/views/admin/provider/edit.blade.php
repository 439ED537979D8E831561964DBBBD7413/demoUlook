@extends('admin._layout.app')

@section('title', 'Providers');

@section('main')
    <section class="card">
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12">

                    <div class="row">
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label" for="site_name">Site Name</label>
                                <input type="text" class="form-control maxlength-simple" id="site_name"
                                       value="{{ setting('site_name', 'TenStudio')  }}"
                                       placeholder="Site Name" maxlength="15" name="site_name">
                                <small class="text-muted">Max length 15</small>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <img src="{{ setting('site_logo', asset('assets/img/taxi.png'))  }}" width="80">
                                <label class="form-label" for="site_logo">Site Logo</label>
                                <input type="file" accept="image/*" class="form-control maxlength-custom-message"
                                       id="site_logo" placeholder="Site Logo" name="site_logo">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <img src="{{ setting('site_logo', asset('assets/img/taxi.png'))  }}" width="80">
                                <label class="form-label" for="site_icon">Site Icon</label>
                                <input type="file" accept="image/*" class="form-control maxlength-always-show"
                                       id="site_icon" placeholder="Site Icon" name="site_icon">
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="copyright_content">Copyright Content</label>
                                <input type="text" class="form-control maxlength-simple" id="copyright_content"
                                       value="{{ setting('copyright_content', 'TenStudio')  }}"
                                       placeholder="Copyright Content" name="copyright_content">
                            </fieldset>
                        </div>
                    </div>

                    <h5 class="with-border">Market Appearance</h5>

                    <div class="row">
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="play_store_link">Play Store Link</label>
                                <input type="url" class="form-control maxlength-always-show" id="play_store_link"
                                       value="{{ setting('play_store_link', '')  }}"
                                       placeholder="Play Store Link" name="play_store_link">
                            </fieldset>
                        </div>

                        <div class="col-lg-12">
                            <fieldset class="form-group">
                                <label class="form-label" for="app_store_link">App Store Link</label>
                                <input type="url" class="form-control maxlength-always-show" id="app_store_link"
                                       value="{{ setting('app_store_link', '')  }}"
                                       placeholder="App Store Link" name="app_store_link">
                            </fieldset>
                        </div>

                    </div><!--.row-->

                    <h5 class="with-border m-t-lg">Contact Details</h5>

                    <div class="row">
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label" for="contact_email">Contact Email</label>
                                <input type="email" class="form-control maxlength-custom-message" id="contact_email"
                                       value="{{ setting('contact_email', '')  }}"
                                       placeholder="Contact Email" name="contact_email">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label" for="contact_number">Contact Number</label>
                                <input type="tel" class="form-control maxlength-simple" id="contact_number"
                                       value="{{ setting('contact_number', '')  }}"
                                       placeholder="Contact Number" name="contact_number">
                            </fieldset>
                        </div>
                    </div>


                    <h5 class="with-border m-t-lg">Authentication</h5>

                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset class="form-group">
                                <div class="checkbox-toggle">
                                    <input type="checkbox" id="social_login" checked="" name="social_login">
                                    <label for="social-login">Social Login</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label" for="fb_app_ver">Facebook App Version</label>
                                <input type="text" class="form-control maxlength-simple" id="fb_app_ver"
                                       value="{{ setting('fb_app_ver', '')  }}"
                                       placeholder="Facebook App Version" name="fb_app_ver">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label" for="fb_app_id">Facebook App ID</label>
                                <input type="text" class="form-control maxlength-custom-message" id="fb_app_id"
                                       value="{{ setting('fb_app_id', '')  }}"
                                       placeholder="Facebook App ID" name="fb_app_id">
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset class="form-group">
                                <label class="form-label" for="fb_app_secret">Facebook App Secret</label>
                                <input type="text" class="form-control maxlength-always-show" id="fb_app_secret"
                                       value="{{ setting('fb_app_secret', '')  }}"
                                       placeholder="Facebook App Secret" name="fb_app_secret">
                            </fieldset>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <input type="submit" class="btn btn-success" title="Submit"/>
                        </div>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection