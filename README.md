
## Installation
1. Install the parent theme UnderStrap first: `https://github.com/understrap/understrap`
   - IMPORTANT: If you download UnderStrap from GitHub make sure you rename the "understrap-master.zip" file to "understrap.zip" or you might have problems using this child theme!
1. Upload the understrap-child folder to your wp-content/themes directory
1. Go into your WP admin backend 
1. Go to "Appearance -> Themes"
1. Activate the UnderStrap Child theme

## CSS Compilers
This site now uses SCSS which can be found in `/sass/*` and is compiled to `/css/child-theme.css`.

To compile your sass, navigate to the theme directory and run 'gulp sass'. Alternatively, use `gulp watch` to compile on 
file save and `gulp watch-bs` for browser-sync (this works well with localhost development, but may need alterations for 
virtual machines, docker).