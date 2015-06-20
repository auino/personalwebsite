# personalwebsite
An Heroku deployable personal website made in Django

Based on the same content structure of [denzildoyle/placeholder-site](https://github.com/denzildoyle/placeholder-site), this software allows you to set up your personal web page.
The personal web site is easy to update, since it may link to your local Dropbox published configuration files, and also allows you to easily deploy the website on [Heroku](https://heroku.com).

### Features ###
 * High customization (colors, texts, etc.)
 * Web site content is easy to change
 * Configuration files may be linked to your Dropbox profile
 * Google Analytics support
 * European cookie law message support
 * Heroku deploy support

### Configuration (through Dropbox) ###
 1. Extract `configuration.zip` file to your public Dropbox folder
 2. Open extracted `configuration.json` and set your web site content accordingly
 3. Change the `app/views.py` `url` variable to your `configuration.json` Dropbox public file path
 4. At this point, you can deploy your website (i.e. to [Heroku](https://heroku.com), hence pointing your DNS domain to Heroku)

Live demo available at [www.auino.com](http://www.auino.com)
