[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/yikesinc/yikes-inc-custom-login/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/yikesinc/yikes-inc-custom-login/?branch=master)
<!-- When we have our unit tests set up, uncomment this line
[![Code Coverage](https://scrutinizer-ci.com/g/yikesinc/yikes-inc-custom-login/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yikesinc/yikes-inc-custom-login/?branch=master)
-->
[![Build Status](https://scrutinizer-ci.com/g/yikesinc/yikes-inc-custom-login/badges/build.png?b=master)](https://scrutinizer-ci.com/g/yikesinc/yikes-inc-custom-login/build-status/master)

### YIKES Inc. Custom Login

A WordPress plugin that replaces the login flow with custom pages.

#### Shortcodes:

* `[custom-login-form]`
* `[custom-register-form]`
* `[custom-password-lost-form]`
* `[custom-password-reset-form]`
* `[account-info]` <small>(in the works)</small>

#### Custom Templates:

Users can override the default templates by copying `wp-content/plugins/yikes-custom-login/templates/` into the theme root, and renaming the directory `/yikes-custom-login/`. You can remove any of the templates you don't need, and customize the ones you will be using.

#### Filters

* `yikes-inc-custom-login-redirect`

Page to redirect non-admin users to when they successfully login. **Note:** This URL must be a URL of a page on this site. `wp_validate_redirect` is used, to confirm a valid URL before redirecting the user.

Default redirects to the Account Info ( 'member-account' ) page.

**Example Usage:**
```php
function yikes_custom_login_redirect_non_admins() {
	// Redirect non-admins to page 8
	return esc_url( get_the_permalink( 8 ) );
}
add_filter( 'yikes-inc-custom-login-redirect', 'yikes_custom_login_redirect_non_admins' );
```
#### Actions

###### Login Form

* `yikes-inc-custom-login-before-login-form`
* `yikes-inc-custom-login-after-login-form`


###### Password Lost form

* `yikes-inc-custom-login-before-password-lost-form`
* `yikes-inc-custom-login-after-password-lost-form`

###### Password Reset form

* `yikes-inc-custom-login-before-password-reset-form`
* `yikes-inc-custom-login-after-password-reset-form`

###### Register Form

* `yikes-inc-custom-login-before-register-form`
* `yikes-inc-custom-login-after-register-form`
