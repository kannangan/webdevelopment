# WordPress Development Challenge

## Introduction
This repository contains a lightweight WordPress theme frame with Bootstrap 4.5.0. With this programming task you will go through the complete process of displaying dynamically fetched posts on a WordPress site in a modern way.

**Please try to avoid using WordPress plugins. If you use any anyway, please don't forget to add a database dump to the branch you're working in.**

## Preparation
1. Set up a local development environment (f.e. LAMP-/LEMP-Stack) and install WordPress
2. Clone this theme repository to your WordPress environment and activate it in your WordPress backend
3. You can install the [Classic Editor](https://de.wordpress.org/plugins/classic-editor/) plugin to avoid the Gutenberg editor to appear in the backend.

## Task Details
a) Use the WordPress REST API to get the latest 12 posts from [meisterplan.com](https://meisterplan.com/). The endpoint you will use is located here: https://meisterplan.com/wp-json/wp/v2/posts

b) Choose a blog layout from a certain website that you like, tell us from which site you got inspired, why you have chosen it and display all the posts in a grid like your chosen website does. Order these posts ascending by their title. If a user clicks on them he will see a single post page that contains the featured image, maybe some meta data and the complete post content, styled in an appealing way.  
**There should only be one post per row on smaller devices and as it gets larger multiple posts can be positioned next to each other.**

c) Add a button to all of your pages which can be used to enable a "Dark Mode". Whenever a user clicks on that button the color scheme changes to improve the visibility at low light. The Dark Mode should be enabled by default between 8pm and 6am. The button to switch the color mode can be used anytime. If a user switches to another site the selected (current) color scheme should stay the same.

d) Visit [meisterplan.com](https://meisterplan.com/). Tell us what improvements you would suggest. These improvements can be related to technical and performance issues or design and usabiltiy aspects of this website.  

**Make sure to write clean code. Comments and answers can be placed in this file (README.md) under the respective task. We look forward to seeing your results!**

## Hints
[WordPress Developer Resources](https://developer.wordpress.org/)  
[WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)  
[WordPress REST API Handbook](https://developer.wordpress.org/rest-api/)  
[Bootstrap Documentation](https://getbootstrap.com/docs/4.5/getting-started/introduction/)  
[jQuery API Documentation](https://api.jquery.com/)
