
## Installation
1. Install the parent theme UnderStrap first: `https://github.com/understrap/understrap`
   - IMPORTANT: If you download UnderStrap from GitHub make sure you rename the "understrap-master.zip" file to "understrap.zip" or you might have problems using this child theme!
1. Upload the understrap-child folder to your wp-content/themes directory
1. Go into your WP admin backend 
1. Go to "Appearance -> Themes"
1. Activate the UnderStrap Child theme

## Setup

### Initial Setup
This project requires git, composer, npm, and gulp.
1. Git
    1. `sudo apt update`
    2. `sudo apt install git-all`
2. Composer (Summarized instructions from [https://www.hostinger.com/tutorials/how-to-install-composer](https://www.hostinger.com/tutorials/how-to-install-composer))
    1. `sudo apt update`
    2. `php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`
    3. `php composer-setup.php --install-dir=bin --filename=composer`
    4. `sudo mv composer.phar /usr/local/bin/composer`
3. NPM (Summarized instructions from [https://linuxize.com/post/how-to-install-node-js-on-ubuntu-18.04/](https://linuxize.com/post/how-to-install-node-js-on-ubuntu-18.04/))
    1. `sudo apt update`
    2. `sudo apt-get install python-software-properties` // Chances are you already have this installed 
    3. `sudo apt install nodejs npm` // nodejs is a prerequisite for npm
4. Gulp (Summarized instructions from [https://tecadmin.net/install-gulp-js-on-ubuntu/](https://tecadmin.net/install-gulp-js-on-ubuntu/))
    1.  `npm install -g gulp`
    
### First Time    
This site now uses SCSS which can be found in `/sass/*` and is compiled to `/css/child-theme.css` along with some other functionality.

1. Navigate to the wyble (theme) directory.
    1. `cd {root}/wp-content/themes/wyble`
2. Install all dependencies (after pulling the latest code base `git pull origin master`)
    1. `composer install`
    2. `npm install`
3. Compile using Gulp
    1. Everything
        // TODO: Riley! see (*Gulp Everything* below)
    2. SASS    
        1. `gulp styles`
    3. Minify and Compile JS
        1. `gulp scripts`
    4. Watch - Have gulp monitor file changes and compile when a file change has been detected
        1. `gulp watch` // Standard watch
        2. `gulp watch-bs` // Watches AND refreshes the browser (note: this make require further adjustments depending on your server/vm/local environment)


#### Gulp Everything
You are tasked with creating a Gulp task that compiles and minifies both SASS and JS.
Here is a nice reference: https://semaphoreci.com/community/tutorials/getting-started-with-gulp-js
Basically, you'll just need to write a new task; give it a name and pass an array of OTHER tasks and finally add an empty closure.