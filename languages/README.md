# Languages Directory

This folder is used to store translation files for the Groundwork theme.

To support translations:

-   Use a tool like Poedit or Loco Translate to generate `.po` and `.mo` files.
-   Files should be named using the format: `groundwork-LOCALE.mo`
    -   Example: `groundwork-fr_FR.mo` for French

This folder is meant to be registered in the theme's root `functions.php` file using `load_theme_textdomain()`. For example:

```php
// Load theme textdomain for translation support
function groundwork_load_textdomain() {
  load_theme_textdomain( "groundwork", get_template_directory() . "/languages" );
}
add_action( "after_setup_theme", "groundwork_load_textdomain" );
```
