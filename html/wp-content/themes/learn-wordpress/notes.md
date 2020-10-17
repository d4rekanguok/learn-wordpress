## Wordpress Weirdness

- Call 'wp_enqueue_style' to 'enqueue' stuff to header
- The first argument of 'wp_enqueue_style' is just the id for the meta tag
- This function has to be called after a certain hook, using 'add_action'
- 'get_stylesheet_uri' will return root style.css
- version of the theme is declared in style.css?!