
# variable-dumper
Debug in Wordpress as in Laravel. This plugin will add a dump function that outputs the variable contents for debugging purposes.

### Step 1: Create the Plugin File

1.  **Create a new folder** in the `wp-content/plugins` directory, for example, `variable-dumper`.
2.  **Create a PHP file** inside this folder, e.g., `variable-dumper.php`.

### Step 2: Add Plugin Fie

Add to the directory the file `variable-dumper.php`

### Step 4: Activating the Plugin

1.  **Go to the WordPress admin area**.
2.  **Navigate to Plugins > Installed Plugins**.
3.  **Activate the "Variable Dumper" plugin**.

### Usage

Once the plugin is activated, you can use the `dump()` function in your WordPress theme or other plugins. For example:

    // In your theme's functions.php or any other PHP file
    $array = ['name' => 'John', 'age' => 30];
    dump($array);

You also have a `dd` (dump and die) function similar to Laravel's `dd()`


