# Amica e.V. Wordpress Theme
A Wordpress theme by Daniel Frings.



![amica screenshot]( https://github.com/bajuku-daniel/amica_ev/blob/master/screenshot.png )


## Short Description
Bootsrap4, SCSS, GULP & NPM. Please dont edit the CSS files directly - it will be overwritten by the gulp scss compile routine.

## Install and Compile the Theme
Easy Breasy run `npm install` to download all dependencies defined in package.json. Than run `gulp vendor` to copy all the required files into the vendor directory.
Finaly run `gulp` to compile the SCSS files.

## Local DEV with GULP and Browsersync
In the gulp.js file is a *dev* task defined. The dev task will compile the scss files to valid css, minifiy all css and js files and start a browser sync session for your default browser (you have to edit the proxy url).
Just run `gulp dev` inside the theme folder.
