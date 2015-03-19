ultimatemember
==============

**Note:** This fork does not support child themes.

What's in this fork
-------------------

Here are the differences between this fork and the official repo:

  * Changed `get_stylesheet_directory()` calls to `get_template_directory()`
  * Added a filter that allows changing the fields that appear on the `Account/General` tab
  * Added support for forcing tabs on the account page to be shown (use hook `um_account_page_default_tabs_hook` and give your tab an option of `'force_show' => true`)
  * Password is no longer shown by default in plaintext in the welcome / activation emails
  * Added a `remove_error( $key )` method to class UM_Form
