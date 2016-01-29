# personalwebsite
An Heroku deployable personal website made in Django

Based on the same content structure of [denzildoyle/placeholder-site](https://github.com/denzildoyle/placeholder-site), this software allows you to set up your personal web page.
The personal web site is easy to update, since it may link to your local Dropbox published configuration files, and also allows you to easily deploy the website on [Heroku](https://heroku.com).

### Features ###
 * High customization (colors, texts, etc.)
 * Responsive design (mobile and desktop support)
 * [RDFa schema](http://www.data-vocabulary.org) support
 * Web site content is easy to change
 * Configuration files may be linked to your [Dropbox](https://www.dropbox.com) profile (no login needed)
 * [Google Analytics](https://analytics.google.com) support
 * [European cookie law](http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm) message support
 * [Heroku](https://heroku.com) deploy support

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

### Configuration (through Dropbox) ###
 1. Extract `configuration.zip` file to your public Dropbox folder
 2. Open extracted `configuration.json` and set your web site content accordingly
 3. Change the `app/views.py` `url` variable to your `configuration.json` Dropbox public file path
 4. At this point, you can deploy your website (i.e. to [Heroku](https://heroku.com), hence pointing your DNS domain to Heroku)

### Demo ###
Live demo available at [www.auino.com](http://www.auino.com)
