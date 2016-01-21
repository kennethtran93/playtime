# demo-retrodiner
In class demo of static site conversion

This repository reflects the converison of a static website (a template from freewebsitetemplates.com)
into a reasonable CodeIgniter webapp.. I will usee branches to reflect the webapp state after
each conversion stage (separate lab 3 tutorials for COMP4711 and ACIT4850). That way, you can switch 
branches in your IDE to view the evolution of the site :)

I will add notes here, but the general plan is 

0) setup;
1) convert to a trivial CI site;
2) convert to a basic CI site (view templating);
3) convert to a good CI site (using models)

# 0-initial

I cloned the repository, and set it up as a NetBeans project, git ignoring the
NB metadata.

I created a new local domain (diner.local) and configured httpd-vhosts.conf
to map it to the cloned repo folder.

I then copied the "retrodiner" template into the project's "public" folder,
to match the starter repo for lab 3.

http://diner.local will show a folder list of the repository document root.
http://diner.local/public will show the static site.

# 1-setup

I then copied the CodeIgniter starter, that should have been created last week.
This should be the starting point for your lab3.

In my case, http://diner.local now shows the default CI welcome page.

# 2-trivial

Copy the HTML files into the application/views folder of what will be 
our app.

Create simple controllers to load the views.

Fix the menus, to reference our controllers.

Fix the image references.

# 3 - basic

Refactor the views, by extracting the common parts of all views into a template,
and adding a master controller (application/core/MY_Controller) to pull the
pieces together.

I started by grabbing application/core/MY_Controller from the example-contacts
project. We will use this as our base controller. 

I see that it provides for an array of view parameters, $this->data.
Substitution parameters according to it are title, menubar, content and pagebody.
It uses the parser library, and on digging I found that the application/config/autoload
is where that is referenced, as well as a couple of helpers. Grabbed it, and
removed the autoloading for the database library and contacts model -
we don't need those yet.
Hmm - it references a "build_menu" function ... digging, I found that in 
application/helpers/common_helper inside the example-contacts project. 
I'll grab that too.

We now have three files from the example-contacts project:
- application/config/autoload.php
- application/core/MY_Controller.php
- application/helpers/common_helper.php

I made application/views/_template.php by copying the original welcome view
and replacing the page-specific content with substitution parameters.

Looking at the template, I can see that I missed some .html links
in the footer - oops! These need to be changed to match those in the
top menu navbar.

Ok - the <div id="body"> looks like the content unique to each page.
I am replacing it with a substitution request, {content}, per the
base controller.

I commented out the call to build a menu bar from a configuration array -
we will leave things alone at this stage.
All we have to do is modify our controllers, so they extend Application instead 
of CI_Controller, and so that each sets the 'pagebody' view parameter
properly before calling the inherited "render" method.
Oops - we need to strip the common data from the views too!
