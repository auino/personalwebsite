# personalwebsite
An Heroku deployable personal website made in Django

Based on the same content structure of [denzildoyle/placeholder-site](https://github.com/denzildoyle/placeholder-site), this software allows you to set up your personal web page.
Following refinements made use of parts from [amitoj-singh/personal-portfolio](https://github.com/amitoj-singh/personal-portfolio) also.
The personal web site is easy to update, since it may link to your GitHub fork of the current project to easily deploy updates of the website on services like [Heroku](https://heroku.com).

[![Deploy](https://www.herokucdn.com/deploy/button.png)](https://heroku.com/deploy)

### Features ###
 * High customization (colors, texts, etc.)
 * Responsive design (mobile and desktop support)
 * [RDFa schema](http://www.data-vocabulary.org) support
 * SEO friendly
 * Web site content is easy to change
 * Support to [Font Awesome](https://fontawesome.com) icons
 * Directly linked to your [GitHub](https://github.com) fork
 * [Google Analytics](https://analytics.google.com) support
 * [European cookie law](http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm) message support (ask for legal support if cookies are collected, since I'm not responsible of improper usage of this feature)
 * [Heroku](https://heroku.com) deploy support

### Configuration (through GitHub) ###
 1. Fork the original [auino/personalwebsite](https://github.com/auino/personalwebsite) project
 2. Edit the `src/configuration/configuration.json` file and set it accordingly to your needs (concerning the `faicon` field for social buttons icon, you have to specify the [Font Awesome](https://fontawesome.com) class of each icon, e.g., `fa-github` for GitHub links)
 3. Change the `src/configuration/img/avatar.jpg` file with your profile picture
 
### Heroku deploy ###
In order to deploy your website to [Heroku](https://heroku.com), just create a new Heroku project, link it to GitHub and follow the steps reported in the following image.

![Heroku deploy steps](https://raw.githubusercontent.com/auino/personalwebsite/master/media/heroku_deploy.gif)

Optionally, you can [set up your DNS records to Heroku servers](https://devcenter.heroku.com/articles/custom-domains).

### Demo ###
Live demo available at [www.auino.com](http://www.auino.com)

![Demo screenshot](https://raw.githubusercontent.com/auino/personalwebsite/master/media/screenshot.png)
