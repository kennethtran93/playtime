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
