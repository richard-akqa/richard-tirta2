# Paths #
#########
@asset_path = "assets/"
set :images_dir, "#{@asset_path}images"
set :css_dir, "#{@asset_path}stylesheets"
set :js_dir, "#{@asset_path}javascripts"
set :fonts_dir, "#{@asset_path}fonts"

set :build_dir, "build"

activate :autoprefixer

###
# Compass
###

# Change Compass configuration
# compass_config do |config|
#   config.output_style = :compact
# end

###
# Page options, layouts, aliases and proxies
###

data.projects.akqa.each do |project|
  proxy "/works/#{project[:name]}.html", "views/templates/akqa-works.html", :layout => "akqa-layout" , :locals => { :project => project }, :ignore => true
end

data.projects.aau.each do |project|
  proxy "/works/#{project[:name]}.html", "views/templates/aau-works.html", :layout => "aau-layout" , :locals => { :project => project }, :ignore => true
end

# Per-page layout changes:
#
# With no layout
# page "/path/to/file.html", :layout => false
#
# With alternative layout
# page "/path/to/file.html", :layout => :otherlayout
#
# A path which all have the same layout
# with_layout :admin do
#   page "/admin/*"
# end

# Proxy pages (http://middlemanapp.com/basics/dynamic-pages/)
# proxy "/this-page-has-no-template.html", "/template-file.html", :locals => {
#  :which_fake_page => "Rendering a fake page with a local variable" }

###
# Helpers
###

# Automatic image dimensions on image_tag helper
# activate :automatic_image_sizes

# Reload the browser automatically whenever files change
# configure :development do
#   activate :livereload
# end

# Methods defined in the helpers block are available in templates
# helpers do
#   def some_helper
#     "Helping"
#   end
# end


# Build-specific configuration
configure :build do
  # For example, change the Compass output style for deployment
  #activate :minify_css

  # Minify Javascript on build
  activate :minify_javascript

  # Enable cache buster
  # activate :asset_hash

  # Use relative URLs
  activate :relative_assets

  # Or use a different image path
  # set :http_prefix, "/Content/images/"
end
