# CavTheme
WordPress Theme for Cavalier Robotics

## Wordpress
You're going to need to [install WordPress.](https://codex.wordpress.org/Installing_WordPress)  If you're on a Mac, you can [run WordPress locally using MAMP.](https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP)

Once you've installed WordPress, go to /wp-content/themes/ and make a new folder titled CavTheme. Place the contents of this repository in that folder.

## SASS and Compass
CavTheme currently uses [SASS](http://sass-lang.com/) and [Compass](http://compass-style.org/) to create its stylesheets.  Both SASS and Compass are made [Ruby.](https://www.ruby-lang.org/en/)

If you're on a Mac, you can type these five commands into the terminal to install Sass and Compass.
```
gem update --system
sudo gem update --system
sudo gem install sass
gem install compass
sudo gem install compass
```

While developing stylesheets, it is highly recommended you change the following values in the config.rb file:
- `output_style = :compressed` to `output_style = :nested`
- `line_comments = false` to `line_comments = true`
