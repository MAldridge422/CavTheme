http_path = "/" #root level target path
css_dir = "." #targets default style.css file at the root level of our theme
sass_dir = "sass" #targets sass directory
images_dir = "images" #targets image directory
javascripts_dir = "js" #targets JavaScript directory

# use :nested during development, :compressed during production 
output_style = :compressed

# Prints comments detailing what .scss line created a piece of the .css file
# use true during development, false during prouction
line_comments = false

# To enable relative paths to assets via compass helper functions.
# note: this is important in wordpress themes for sprites
relative_assets = true